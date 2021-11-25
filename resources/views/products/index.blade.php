@extends('main_layout')
@section('content')
    
<h1 class="display-5 mt-5" >Lista de Produtos</h1>
<hr>
@if ($products)

            

<div class="table3">
    <table class="table table-striped ">
    <tr>
        <th>Nome</th>
       {{-- <th>Descrição</th>--}}
        <th>Categoria</th>
        <th>Id da Marca</th>
        <th></th>
        <th></th> 
        <th></th>
    </tr>
    @foreach ($products as $p)
    
    <tr>
        <td>{{ $p->name }}</td>
       {{-- <td>{{ $b->descricao }}</td>--}}
        <td>{{ $p->categoria }}</td>
        {{--<td>{{ $p->brand_name}}</td>--}}
        <td>{{ $p->marca}}</td>
        
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