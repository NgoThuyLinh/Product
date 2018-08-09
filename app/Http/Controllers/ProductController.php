<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Product;
use App\ProductDetail;
use App\Category;
use App\Vendor;
use App\Color;
use App\Size;
use App\ImageProduct;

class ProductController extends Controller
{
    public function index(){
    	$products=Product::getAll();
    	return view('admins/product');
    }
    public function anyData(){
        $categories = Category::All();
        $vendors = Vendor::All();
        $colors=Color::All();
        $sizes=Size::All();
        return response()->json([$categories, $vendors,$sizes,$colors]);
    }
    public function getList(){
        $categories = Category::All();
        $vendors = Vendor::All();
        $products= \DB::table('products')
        ->join('vendors', function ($join) {
            $join->on('vendors.id', '=', 'products.vendor_id');
        })
        ->select('products.*', 'vendors.name as vendor')
        ->orderBy('products.id','desc');
        return datatables()->of($products)
            ->addColumn('action', function($product){
                return '<button data-id="'. $product->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $product->id .'" class="btn btn-sm btn-warning btn-edit edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $product->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        ->rawColumns(['action', 'description'])
        ->toJson();
    }
    public function show($id){
        $categories = Category::All();
        $vendors = Vendor::All();
        $product=Product::where('id',$id)->first();
        return response()->json([$categories, $vendors,$product]);
    }
    public function edit($id){
        
    }
    public function update($id,Request $request){
        $product= $request->all();

        if ($request->thumbnail=='undefined') {
            $thumbnail=Product::where('id',$id)->first();
            $product['thumbnail']=$thumbnail->thumbnail;
            Product::where('id',$id)->first()->update([
                'name' => $product['name'],
                'code' => $product['code'],
                'description' => $product['description'],
                'historical_cost' => $product['historical_cost'],
                'price' => $product['price'],
                'vendor_id' => $product['vendor_id'],
                'category_id' => $product['category_id'],
                'sex'=>$product['sex'],
                'thumbnail'=>$product['thumbnail'],
            ]);
        }else{
            $product['thumbnail']=$request->thumbnail->store('products');
            Product::where('id',$id)->first()->update([
                'name' => $product['name'],
                'code' => $product['code'],
                'description' => $product['description'],
                'historical_cost' => $product['historical_cost'],
                'price' => $product['price'],
                'vendor_id' => $product['vendor_id'],
                'category_id' => $product['category_id'],
                'sex'=>$product['sex'],
                'thumbnail'=>$product['thumbnail'],
            ]);
        }
        return response()->json('yes');
    }
    public function create(){
        
    }
    public function store(Request $request){
        $product=$request->all();
        $product['thumbnail']=$request->thumbnail->store('products');
        Product::create([
            'name' => $product['name'],
            'code' => $product['code'],
            'description' => $product['description'],
            'historical_cost' => $product['historical_cost'],
            'price' => $product['price'],
            'vendor_id' => $product['vendor_id'],
            'category_id' => $product['category_id'],
            'sex'=>$product['sex'],
            'thumbnail'=>$product['thumbnail'],
        ]);
        return response()->json('yes');
    }
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $productdetail=ProductDetail::where('product_id',$id)->first();
        if (empty($productdetail)==true) {
            Product::where('id',$id)->first()->delete();
            return response()->json('yes');
        }else{
            return response()->json('no');

        }
    }
}
