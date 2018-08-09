<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;
use Illuminate\Support\Facades\Auth;
use App\Color;
use App\Vendor;
use App\Product;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\ProductDetail;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('admins/database');
    }
    public function home()
    {
      $products=Product::latest()->limit(8)->get();
      
      foreach ($products as $product) {
        foreach ($product->productdetail as $pro) {
          $links=$pro->imageproduct->links;
          $col[$product->code][$pro->color->id]=null;
          $size[$pro->color_id][$pro->size_id]=null;
          if (in_array($pro->color->id,$col[$product->code],$strict = true)!=true) {
            $col[$product->code][$pro->color->id]=$pro->color->color;
            $size[$pro->color_id][$pro->size_id]=$pro->size->name;
          }
        }
      }
      return view('webs/index',['products'=>$products,'color'=>$col]);

    }
    public function shop()
    {
        return view('webs/shopping');
    }
    public function list()
    {
      if (Auth::check()) {
       $user=Auth::user();
        session(['name'=>$user->name,'id'=>$user->id]);
      }
      
      $sizes= Size::all();
      $categories= Category::getAll();
      $colors= Color::all();
      $vendors= Vendor::all();
      $products=Product::getAll();
        return view('webs/list',['sizes'=>$sizes,'colors'=>$colors,'vendors'=>$vendors,'products'=>$products,'categories'=>$categories]);
    }
    public function product($id){
      $previous = Product::select('id')->where('id', '<', $id)->max('id');
      $next = Product::select('id')->where('id', '>', $id)->min('id');
      $product=Product::where('id',$id)->first();
      $products=Product::where([
        ['category_id','=',$product->category_id],
        ['id','<>',$product->id],

      ])->get();
      $productdetail=ProductDetail::where('product_id',$id)->first();
      if (empty($productdetail)==true){
        return view('webs/product',['products'=>$product,'previous'=>$previous,'next'=>$next,'category'=>$products]);
      }
      else{
        foreach ($product->productdetail as $pro) {
          $links=$pro->imageproduct->links;
          $col[$product->code][$pro->color->id]=null;
          $size[$pro->color_id][$pro->size_id]=null;
          if (in_array($pro->color->id,$col[$product->code],$strict = true)!=true) {
            $col[$product->code][$pro->color->id]=$pro->color->color;
            $size[$pro->color_id][$pro->size_id]=$pro->size->name;
          }
        }
        return view('webs/product',['products'=>$product,'col'=>$col,'size'=>$size,'links'=>$links,'previous'=>$previous,'next'=>$next,'category'=>$products]);
      }
      
    }
    public function show($id){
      $product=Product::where('id',$id)->first();
      $detail=ProductDetail::where('product_id',$id)->first();
      if (empty($detail)==true) {
        return response()->json($product);
      }else{
        foreach ($product->productdetail as $pros) {
          $colors[$product->code][$pros->color_id]=null;
          $size[$pros->color_id][$pros->size_id]=null;
          if (in_array($pros->color_id,$colors[$product->code],$strict = true)!=true) {
            $colors[$product->code][$pros->color_id]=$pros->color->color;
            $size[$pros->color_id][$pros->size_id]=$pros->size->name;
          }
        }
        return response()->json([$product, $colors,$size]);
      }
      
    }
    public function buy(Request $request){
      $data=$request->all();
      $product= ProductDetail::where([
        ['size_id', '=', $data['size_id']],
        ['color_id', '=', $data['color_id']],
        ['product_id', '=', $data['product_id']]
      ])->first();
      if ($product['quantity']>=$data['quantity']) {
        Cart::add(array('id' => $product['product_id'], 'name' =>$product->product->name, 'qty' => 1, 'price' => $product->product->price,'options' => ['link' => $product->imageproduct->links,'thumbnail'=>$product->product->thumbnail,'size' => $product->size->name,'color' => $product->color->color, 'color_id' => $request->color_id,'size_id' => $request->size_id,'productdetail'=>$product->id]))->associate('App\Product');
         return response()->json('yes');
      }
      else{
        return response()->json($product);
      }
    }
    public function shopping(Request $request)
    {
      if (session('id')!=null) {
        $order = new Order;
        $order->custorm_id=session('id');
        $order->amount = Cart::total();
        $order->save();
        foreach (Cart::content() as $cart) {
          // order detail
          $orderDetail = new OrderDetail;
          $orderDetail->order_id = $order->id;
          $orderDetail->quantity = $cart->qty;
          $orderDetail->product_id = $cart->options->productdetail;
          $orderDetail->save();
        }
        Cart::destroy();
        return response()->json('yes');
      }else{
        $data=json_encode($request->all());
         $order = new Order;
        $order->custorm= $data;
        $order->amount = Cart::total();
        $order->save();
        foreach (Cart::content() as $cart) {
          // order detail
          $orderDetail = new OrderDetail;
          $orderDetail->order_id = $order->id;
          $orderDetail->quantity = $cart->qty;
          $orderDetail->product_id = $cart->options->productdetail;
          $orderDetail->save();
        }
        Cart::destroy();
        return response()->json('yes');
      }
      
    }
    public function update($id,Request $request)
    {
      Cart::update($id, $request->quantity );
      return response()->json(Cart::content());
    }
    public function destroy($id){
      Cart::remove($id);
      return response()->json(Cart::content());
    }
}
