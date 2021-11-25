<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

        return view('brands.index')->with('brands', $brands);
        
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
            //..cria um array com mensagens personalizadas
            $messages = [
            'required' => 'O campo :attribute precisa ser preenchido!',
            //'between' => 'O campo :attribute deve estar entre 18 e 30!'
            ];
            //..executa a validação, passando as mensagens
            $request->validate($rules, $messages);

            $brands = new Brand();
//..seta os dados do model a partir do $request
            $brands->name = $request->input('name');
           // $brands->descricao = $request->input('descricao');
            $brands->country = $request->input('country');
//..persiste o objeto no BD
            $brands->save();
//..redireciona para o index
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
        //..retorna a view com o model a ser editado
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
//..seta os novos dados no model
        $brands->name = $request->input('name');
        //$brands->descricao = $request->input('descricao');
        $brands->country = $request->input('country');
//..salva as alterações
        $brands->save();
//..redireciona para o index
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
