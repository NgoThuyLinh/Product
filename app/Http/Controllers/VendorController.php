<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
// use Illuminate\Support\Facades\Auth;

class VendorController extends Controller
{
    public function show($id)
    {
        $vendor = Vendor::where('id',$id)->first();
        return response ()->json ( $vendor );

    }
    public function index(){
        $vendors = Vendor::All();

        return view('admins/vendor',['vendors'=> $vendors]);
    }
    public function anyData(){
        return Datatables::of(Vendor::query())->make(true);
    }
    public function getList(){
        $vendors= Vendor::orderBy('id','desc');;
        return datatables()->eloquent($vendors)
            ->addColumn('action', function($vendor){
                return '<button data-id="'. $vendor->id .'" class="btn btn-sm btn-success detail" data-toggle="modal" data-target="#detail"><i class="fa fa-eye"></i></button>
                        <button data-id="'. $vendor->id .'" class="btn btn-sm btn-warning btn-edit" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil"></i></button>
                        <button type="button" data-id="'. $vendor->id .'" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"></i></button>';
            })
        // ->addColumn('thumbnail', function($vendor){
        //     return '<img class="img-fluid" src="'. $vendor->thumbnail .'">';
        // })
        ->rawColumns(['action', 'description'])
        ->toJson();
    }
    public function update($id,Request $request){
        $vendor=$request->all();
        Vendor::where('id',$id)->first()->update([
            'name' => $vendor['name'],
            'phone' => $vendor['phone'],
            'address' => $vendor['address'],
            'description' => $vendor['description'],
            
        ]);
        return response()->json('yes');
        
    }
    public function store(Request $request){
        $vendor=$request->all();
        Vendor::create([
            'name' => $vendor['name'],
            'phone' => $vendor['phone'],
            'address' => $vendor['address'],
            'description' => $vendor['description'],
        ]);
        return response()->json('yes');
    }
    public function destroy($id){
        Vendor::where('id',$id)->first()->delete();
        return response()->json($id);
    }
}
