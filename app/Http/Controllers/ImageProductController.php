<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageProduct;

class ImageProductController extends Controller
{
    public function index()
    {
    	return view('image-view');
    }


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file;
     //    $imageName['image']=null;
        $product_id=$request->product_id;
    	foreach ($request->file as $value) {
    		$imageName = $value->store('productdetail');
           
    	}
         ImageProduct::create([
                'product_id'=>$product_id,
                'links'=> $imageName,
            ]);
        
    	return response()->json(['path' => $imageName]);
    }
    public function store11(Request $request)
    {
        // dd($request->file);
        $product_id=$request->product_id;
        foreach ($request->file as $key=> $value) {
            $imageName[$key] = $value->store('productdetails');
           
        }
         ImageProduct::create([
                'product_id'=>$product_id,
                'links'=> json_encode($imageName),
            ]);
        
        return response()->json('yes');
    }
}
