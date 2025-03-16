<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\StoreRequest;
use App\Http\Requests\Products\UpdateRequest;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $products= Product::get();
        $products= Product::paginate(5);
        return view('admin/products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::pluck('id','brand'); //solo datos especificos
        //dd($brands);
        return view('admin/products/create',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //echo "Los datos pasan";
        //dd($request->all());
        
        /*$request->validate([//validación directa
            'name_product'=> 'required | min:5|max:50',
            'brand_id'=> 'required | integer',
            'stock'=> 'required | integer',
            'unit_price'=> 'required | decimal:2,4',
            'image'=> 'required'
        ]);*/

        $data = $request->all();

        if(isset($data["image"])){
            $data["image"]= $filename = time().".".$data["image"] ->extension();

            $request->image->move(public_path("imgs/products"),$filename);
        }
        Product::create($data);
        return to_route('products.index')-> with('success','Producto Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view ('admin/products/show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        $brands = Brand::Pluck('id','brand');
        return view ('admin/products/edit', compact('product','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Product $product)
    {
        /*$request->validate([//validación directa
            'name_product'=> 'required | min:5|max:50',
            'brand_id'=> 'required | integer',
            'stock'=> 'required | integer',
            'unit_price'=> 'required | decimal:2,4',
            'image'=> 'required'
        ]);*/
        $data = $request->all();

        if(isset($data["image"])){
            $data["image"]= $filename = time().".".$data["image"] ->extension();

            $request->image->move(public_path("imgs/products"),$filename);
        }

        $product->update($data);
        return to_route('products.index')-> with('success','Producto Actualizado');
    }

    public function delete(Product $product){
        return view('admin.products.delete', compact('product'));

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')-> with('nosuccess','Producto Eliminado');
    }
}
