@extends('main_layout')
@section('content')

<h1>Cadastrar Marcas</h1>
<div class="container-fluid">
<form action="{{ route('brand.store')}}" method="post">
    @csrf
    <div class="row justify-content-md-center" >
        <div class="col col-lg-3">
<label for="name" class="form-label">Nome:</label>
<input type="text" class="form-control" name="name" id="name" required> 
    </div></div>
{{--<label for="descricao">Descrição</label>
<input type="text" name="descricao" id="descricao" required> <br>--}}
<div class="row justify-content-md-center" >
<div class="col col-lg-3">
<label for="country" class="form-label">Pais</label>
<input type="text" class="form-control" name="country" id="country" required> 
</div></div>
<div class="d-grid gap-2 col-1 mx-auto">
<input type="submit" class="btn btn-primary mt-3" name="command" value="Cadastrar">
<input type="reset" class="btn btn-primary" value="Limpar">
</div>

</form>
</div>
@endsection
