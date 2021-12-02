@extends('main_layout');
{{-- cria uma seção chamada content que será injetada
na view base --}}
@section('content')
<h1 h1 class="display-5 mt-5">Visualizando Produtos</h1>
{{--
a variável $client será definida no controlador --}}
<div class="row justify-content-md-center" >
    <div class="col col-lg-3">

<p><strong>Nome:</strong>{{ $products->name }}</p>
<p><strong>Categoria:</strong>{{ $products->categoria }}</p>
{{--<p><strong>Marca:</strong>{{ $products->brand_id }}</p>--}}
<p><strong>Marca:</strong>{{ $products->brand_id }}</p>

    </div></div>
{{--<p><strong>Id da Marca</strong>{{ $products->brand_id }}</p>
 finalizana a seção --}}
@endsection
