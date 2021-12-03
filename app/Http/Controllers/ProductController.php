<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Brand;




use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $totalPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$products = Product::all();

        //return view('products.index')->with('products', $products);
        if(Product::count() != 0){
           
            $products = Product::all();
        }else{
            $products = null;
        }
        return view('products.index')->with('products',$products);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Brand::count() != 0){
            $brands = Brand::orderBy('name')->get();
        }else{
            $brands = null;
        }
        return view('products.create')->with('brands', $brands);
                 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:20|',
            
            ];
            
            $messages = [
            'required' => 'O campo :attribute precisa ser preenchido!',
            
            ];
            
            $request->validate($rules, $messages);

            $products = new Product();

            $products->name = $request->input('name');
            $products->categoria = $request->input('categoria');
            //$products->brand_id = $request->input('marca');
            $products->brand_id = $request->input('brand_id');
            

            $products->save();

            return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $products = Product::find($id);

        if($products){
        return view('products.show')->with('products', $products);
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        //..retorna a view com o model a ser editado
        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        $products->name = $request->input('name');
        $products->categoria = $request->input('categoria');
        //$products->brand_name = $request->input('brand_name');
       // $products->brand_id = $request->input('marca');
        $products->brand_id = $request->input('brand_id');
        $products->save();

        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
       
//..redireciona para o index
        return redirect(route('product.index'));
    }
}
