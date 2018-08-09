<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductDetail;
use App\Size;
use App\ImageProduct;
use App\Color;

class ProductDetailController extends Controller
{
    public function index(){
    	$products=ProductDetail::getAll();
    	return view('admins/product');
    }
    public function anyData($id){
        $products= \DB::table('products')
        ->join('product_details', function ($join) {
            $join->on('products.id', '=', 'product_details.product_id')
            ;
        })
        ->join('colors', function ($join) {
            $join->on('product_details.color_id', '=', 'colors.id');
        })
        ->join('sizes', function ($join) {
            $join->on('product_details.size_id', '=', 'sizes.id');
        })
        ->select('product_details.*', 'code', 'colors.name as colors','color','sizes.name as size')
        ->where('product_details.product_id',$id)
        ->orderBy('id','product_details.product_id');
        return datatables()->of($products)
            ->addColumn('action', function($product){
                return '<button data-id="'. $product->id .'" class="btn btn-sm btn-success detail1" data-toggle="modal" data-target="#detailproduct"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $product->id .'" class="btn btn-sm btn-warning edit1" data-toggle="modal" data-target="#edit1"><i class="fa fa-pencil"></i></button>
                        <button data-id="'. $product->id .'" class="btn btn-sm btn-warning uploadimage" data-toggle="modal" data-target="#uploadimage"><i class="fa fa-upload"></i></button>
                        <button type="button" data-id="'. $product->id .'" class="btn btn-sm btn-danger delete1"><i class="fa fa-trash"></i></button>';
            })
        ->addColumn('color', function($product){
            return '<div style="width:50px; border-radius:30%; height:50px; margin-left: 60px;background:'.$product->color.'"> </div>';
        })
        ->rawColumns(['action', 'description','color'])
        ->toJson();
    }
    public function getList(){
        $products= \DB::table('product_details')
        ->join('products', function ($join) {
            $join->on('products.id', '=', 'product_details.product_id');
        })
        ->join('colors', function ($join) {
            $join->on('colors.id', '=', 'product_details.color_id');
        })
        ->join('sizes', function ($join) {
            $join->on('sizes.id', '=', 'product_details.size_id');
        })
        ->select('code','product_details.*', 'color.name as colors','color','sizes.name as size')
        ->orderBy('product_details.id', 'DESC');
        return datatables()->of($products)
            ->addColumn('action', function($product){
                return '<button data-id="'. $product->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $product->id .'" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $product->id .'" class="btn btn-sm btn-danger delete1"><i class="fa fa-trash"></i></button>';
            })
        // ->addColumn('photo', function($user){
        //     return '<img class="img-fluid" src="'. $user->avatar .'">';
        // })
        ->rawColumns(['action', 'description'])
        ->toJson();
    }
    public function update($id,Request $request){
        $product=$request->all();
        ProductDetail::where('id',$id)->update([
            'description' => $product['description'],
            'quantity' => $product['quantity'],
            'size_id' => $product['size_id'],
            'color_id' => $product['color_id'],
        ]);
        return response()->json('yes');
    }
    public function show($id){
        $product= \DB::table('product_details')
        ->join('products', function ($join) {
            $join->on('product_details.product_id', '=', 'products.id');
        })
        ->join('colors', function ($join) {
            $join->on('product_details.color_id', '=', 'colors.id');
        })
        ->join('sizes', function ($join) {
            $join->on('product_details.size_id', '=', 'sizes.id');
        })
        ->select('product_details.*','products.name as name', 'code','price', 'colors.name as color','color','sizes.name as size')
        ->where('product_details.id',$id)->first();
        $links=ImageProduct::select('links')->where('product_id',$id)->first();
        return response()->json([$product,$links]);
    }
     public function show1($id){
        $product= ProductDetail::where('id',$id)->first();
        $colors= Color::all();
        $sizes= Size::all();
        return response()->json([$sizes, $colors,$product]);
    }
    public function store(Request $request){
        $product=$request->all();
        $pro=ProductDetail::where([
            ['size_id', '=', $product['size_id']],
            ['color_id', '=', $product['color_id']],
            ['product_id', '=', $product['product_id']]
        ])->first();
        if (empty($pro)==true) {
            ProductDetail::create([
                'product_id' => $product['product_id'],
                'description' => $product['description'],
                'quantity' => $product['quantity'],
                'size_id' => $product['size_id'],
                'color_id' => $product['color_id'],
            ]);
            return response()->json('yes');
        }else{
            return response()->json('no');
            
        }
        
    }
    public function destroy($id){
        ProductDetail::where('id',$id)->first()->delete();
        return response()->json($id);
    }
}
