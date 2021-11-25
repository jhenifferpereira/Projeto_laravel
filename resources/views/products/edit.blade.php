@extends('main_layout')

@section('content')
<form method="POST" action="{{ route('product.update', $products->id) }}">
@csrf

@method('PUT')
<div class="row justify-content-md-center" >
    <div class="col col-lg-3">
<label for="name" class="form-label">Nome:</label>
<input type="text" name="name" class="form-control" id="name" required value="{{ $products->name }}"> 
    </div></div>
    <div class="row justify-content-md-center" >
        <div class="col col-lg-3">
<label for="categoria" class="form-label">Categoria:</label>
<input type="text" name="categoria" class="form-control" id="categoria" required value="{{ $products->categoria }}">
        </div></div>
        <div class="row justify-content-md-center" >
            <div class="col col-lg-3">
<label for="marca" class="form-label"> Marca:</label>
<input type="text" name="brand_id" class="form-control" id="brand_id" required value="{{ $products->marca }}"> 
            </div></div>
            <div class="d-grid gap-2 col-1 mx-auto">
<input type="submit" class="btn btn-primary mt-3" name="command" value="Salvar">
<input type="reset" class="btn btn-primary" value="Limpar">
</form>

@endsection