@extends('main_layout')
@section('content')
    
<h1 class="display-5 mt-5" >Lista de Produtos</h1>

<hr>
@if ($products)

           

<div class="table3 mb-5">
    <table class="table table-striped mb-5">
    <tr>
        <th>Codigo</th>
        <th>Nome</th>
       {{-- <th>Descrição</th>--}}
        <th>Categoria</th>
        
        
        <th>Marca</th>
        <th></th>
        <th></th> 
        <th></th>
    </tr>
    @foreach ($products as $p)
    
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->name }}</td>
       {{-- <td>{{ $b->descricao }}</td>--}}
        <td>{{ $p->categoria }}</td>
        {{--<td>{{ $p->brand_name}}</td>--}}
        <td>{{ $p->brand_id }}</td>
        
       {{-- 
        @isset($brands)
        @foreach ($brands as $b)
        @isset($brands)
        @foreach ($brands as $b)
        <td>{{ $brand->product->nome }}</td>
        @endforeach
        @endisset
        @endforeach
        @endisset--}}

       {{-- @foreach ($brands as $b)
        
        <td>{{ $b->name}}</td>
        @endforeach
        @foreach($itens->documentacoes as $documentacao)
            <tr>
                <th> {{$documentacao->item_da_documentacao}} </th>
            </tr>
@endforeach


$produto= Produto::where('id', $id)->first();


<td>{{ $p->brands->name}}</td>--}}
        
        
        <td><button type="button" class="btn btn-info"><a href="{{ route('product.show', $p->id) }}" id="botao">Visualizar</a></button></td>
        <td><button type="button" class="btn btn-warning"><a href="{{ route('product.edit', $p->id) }}" id="botao">Editar</a></button> </td>
        <td><form method="post" action="{{ route('product.destroy', $p->id) }}">
            @csrf
            @method('DELETE')
            <input type="button" class="btn btn-danger" id="botao" type="submit" value="Excluir ">
            </form> </td>
        
    </tr>
        
    @endforeach
    

       
</table>

</div>
@else 

<h3>Nao a marcas cadastradas</h3>
@endif


@endsection