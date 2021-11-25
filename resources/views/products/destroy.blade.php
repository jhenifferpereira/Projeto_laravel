@extends('main_layout')
@section('content')
    
<h1 class="display-5 mt-5">Lista de Produtos</h1>
<hr>
@if ($products)
            


<table border="1">
    <tr>
        <th>Nome</th>
       {{-- <th>Descrição</th>--}}
        <th>Categoria</th>
        <th colspan="3">comandos</th>
    </tr>
    @foreach ($products as $p)
    <tr>
        <td>{{ $p->name }}</td>
        <td>{{ $p->categoria }}</td>
        <td>{{ $p->marca }}</td>
        <td><button><a href="{{ route('product.show', $p->id) }}">Visualizar</a></button></td>
        <td><button><a href="{{ route('product.edit', $p->id) }}">Editar</a></button> </td>
        <td><form method="post" action="{{ route('product.destroy', $p->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir ">
            </form></td>
        
    </tr>
        
    @endforeach

       
</table>


@else 
<h3>Nao a produtos cadastradas</h3>
@endif

@endsection