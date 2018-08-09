<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;

class SizeController extends Controller
{
    public function show($id)
    {
        $size = Size::where('id',$id)->first();
        return response ()->json ( $size );

    }
    public function index(){
        $sizes = Size::All();

        return view('admins/size',['sizes'=> $sizes]);
    }
    public function anyData(){
        return Datatables::of(Size::query())->make(true);
    }
    public function getList(){
        $sizes= Size::orderBy('id','desc');;
        return datatables()->eloquent($sizes)
            ->addColumn('action', function($size){
                return '<button data-id="'. $size->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $size->id .'" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $size->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        ->rawColumns(['action', 'description'])
        ->toJson();
    }
    public function update($id,Request $request){
        $size=$request->all();
        Size::where('id',$id)->first()->update([
            'name' => $size['name'],
            'description' => $size['description'],
            
        ]);
        return response()->json('yes');
        
    }
    public function store(Request $request){
        $size=$request->all();
        Size::create([
            'name' => $size['name'],
            'description' => $size['description'],
        ]);
        return response()->json('yes');
    }
    public function destroy($id){
        Size::where('id',$id)->first()->delete();
        return response()->json($id);
    }
}
