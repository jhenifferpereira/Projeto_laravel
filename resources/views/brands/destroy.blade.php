@extends('main_layout')
@section('content')
    
<h1 class="display-5 mt-5">Lista de Marcas</h1>
<hr>
@if ($brands)
            


<table border="1">
    <tr>
        <th>Nome</th>
       {{-- <th>Descrição</th>--}}
        <th>Pais</th>
        <th colspan="3">comandos</th>
    </tr>
    @foreach ($brands as $b)
    <tr>
        <td>{{ $b->name }}</td>
       {{-- <td>{{ $b->descricao }}</td>--}}
        <td>{{ $b->country }}</td>
        <td><button><a href="{{ route('brand.show', $b->id) }}">Visualizar</a></button></td>
        <td><button><a href="{{ route('brand.edit', $b->id) }}">Editar</a></button> </td>
        <td><form method="post" action="{{ route('brand.destroy', $b->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Excluir ">
            </form></td>
        
    </tr>
        
    @endforeach

       
</table>


@else 
<h3>Nao a marcas cadastradas</h3>
@endif

@endsection