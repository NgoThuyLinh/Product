<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Size;
use App\Color;
use App\Vendor;
// use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::where('id',$id)->first();
        return response ()->json ( $category );

    }
    public function index(){
        $categories = Category::All();

        return view('admins/category',['categories'=> $categories]);
    }
    public function product($id){
        $product=Product::where('category_id',$id)->paginate(env('PAGES'));;
        if (!empty($product)) {
            $sizes= Size::all();
            $categories= Category::getAll();
            $colors= Color::all();
            $vendors= Vendor::all();
        return view('webs/list',['sizes'=>$sizes,'colors'=>$colors,'vendors'=>$vendors,'products'=>$product,'categories'=>$categories]);
        }
        else{
            return redirect('list');
        }
        
    }
    public function anyData(){
        return Datatables::of(Category::query())->make(true);
    }
    public function getList(){
        $categories= Category::orderBy('id','desc');;
        return datatables()->eloquent($categories)
            ->addColumn('action', function($category){
                return '<button data-id="'. $category->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $category->id .'" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $category->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        ->addColumn('thumbnail', function($category){
            return '<img class="img-fluid img-responsive" style=" height:6rem; width: 12rem;" src="'. asset(\Storage::url($category->thumbnail)) .'">';
        })
        ->rawColumns(['action', 'description','thumbnail'])
        ->toJson();
    }
    public function update($id,Request $request){
        $category=$request->all();
        // dd($category);
        if ($request->thumbnail=='undefined') {
            $thumbnail=Category::where('id',$id)->first();
            $category['thumbnail']=$thumbnail->thumbnail;
            Category::where('id',$id)->first()->update($category);
        }else{
            $category['thumbnail']=$request->thumbnail->store('category');
            Category::where('id',$id)->first()->update($category);
        }
        return response()->json('yes');
        
    }
    public function store(Request $request){
        $category=$request->all();
        // dd($category);
        $category['thumbnail']=$request->thumbnail->store('category');
        Category::create([
            'name' => $category['name'],
            'thumbnail' => $category['thumbnail'],
            'description' => $category['description'],
            
        ]);
        return response()->json('yes');
    }
    public function destroy($id){
        Category::where('id',$id)->first()->delete();
        return response()->json($id);
    }
}
