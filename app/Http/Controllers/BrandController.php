<?php

namespace App\Http\Controllers;

use App\Models\Brand;

use Illuminate\Http\Request;


class BrandController extends Controller
{
    private $Page = 5;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function index()
    {
        
        if(Brand::count() != 0){
            
            $brands = Brand::all();
        }else{
            $brands = null;
        }
        return view('brands.index')->with('brands',$brands);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.create');
        
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

            $brands = new Brand();

            $brands->name = $request->input('name');
           
            $brands->country = $request->input('country');

            $brands->save();

            return redirect(route('brand.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands = Brand::find($id);

        if($brands){
        return view('brands.show')->with('brands', $brands);
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
        $brands = Brand::find($id);
        
        return view('brands.edit')->with('brands', $brands);
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
        $brands = Brand::find($id);

        $brands->name = $request->input('name');
        
        $brands->country = $request->input('country');

        $brands->save();

        return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Brand::destroy($id);
        $brands = Brand::find($id);
        $brands->delete();
       
//..redireciona para o index
        return redirect(route('brand.index'));
    }
}
