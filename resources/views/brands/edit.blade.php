@extends('main_layout')

@section('content')
<form method="POST" action="{{ route('brand.update', $brands->id) }}">
@csrf

@method('PUT')
<div class="row justify-content-md-center" >
    <div class="col col-lg-3">
<label for="name_marca" class="form-label" >Nome:</label>
<input type="text" name="name_marca" id="name" class="form-control" required value="{{ $brands->name_marca }}">
    </div></div>
{{--<label for="descricao">Descrição:</label>
<input type="text" name="descricao" id="descricao" required value="{{ $brands->descricao }}"> <br>--}}
<div class="row justify-content-md-center" >
    <div class="col col-lg-3">
<label for="country" class="form-label">Pais:</label>
<input type="text" name="country" id="country" class="form-control" required value="{{ $brands->country }}">
    </div></div>
    <div class="d-grid gap-2 col-1 mx-auto">
<input type="submit" class="btn btn-primary mt-3" name="command" value="Salvar">
<input type="reset" class="btn btn-primary" value="Limpar">
</form>

@endsection