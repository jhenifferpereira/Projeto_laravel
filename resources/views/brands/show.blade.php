@extends('main_layout');
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content')
<h1 class="display-5 mt-5">Visualizando Marcas</h1>
{{--
a variável $client será definida no controlador --}}
<div class="row justify-content-md-center" >
    <div class="col col-lg-3">
<p><strong>Nome: </strong>{{ $brands->name }}</p>
{{--<p><strong>Descrição:</strong>{{ $brands->descricao }}</p>--}}
<p><strong>Pais: </strong>{{ $brands->country }}</p>
    </div></div>
{{-- finalizana a seção --}}
@endsection
