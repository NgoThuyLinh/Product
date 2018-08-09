<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Size;
use App\Vendor;
use App\Category;
use App\ProductDetail;

class ColorController extends Controller
{
     public function show($id)
    {
        $color = Color::where('id',$id)->first();
        return response ()->json ( $color );

    }
    public function index(){
        $colors = Color::All();
        return view('admins/color',['colors'=> $colors]);
    }
    public function product($id){
        $product=ProductDetail::where('color_id',$id)->paginate(env('PAGES'));;
        if (!empty($product)) {
            $sizes= Size::all();
            $categories= Category::getAll();
            $colors= Color::all();
            $vendors= Vendor::all();
        return view('webs/color',['sizes'=>$sizes,'colors'=>$colors,'vendors'=>$vendors,'productdetail'=>$product,'categories'=>$categories]);
        }
        else{
            return redirect('list');
        }
    }
    public function getList(){
        $colors= Color::orderBy('id','desc');;
        return datatables()->eloquent($colors)
            ->addColumn('action', function($color){
                return '<button data-id="'. $color->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $color->id .'" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $color->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        ->addColumn('color', function($color){
            return '<div style="width:50px;border:1px solid #777;height:50px; margin-left: 40%;background:'.$color->color.'"> </div>';
        })
        ->rawColumns(['action', 'color'])
        ->toJson();
    }
    public function update($id,Request $request){
        $color=$request->all();
        Color::where('id',$id)->first()->update([
            'name' => $color['name'],
            'color' => $color['color'],
        ]);
        return response()->json("yes");
        
    }
    public function store(Request $request){
        $color=$request->all();
        Color::create([
            'name' => $color['name'],
            'color' => $color['color'],
        ]);
        return response()->json('yes');
    }
    public function destroy($id){
        Color::where('id',$id)->first()->delete();
        return response()->json($id);
    }
}
