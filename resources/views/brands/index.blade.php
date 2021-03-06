@extends('main_layout')
@section('content')


    
<h1 class="mt-5">Lista de Marcas</h1>
<hr>
@if ($brands)
            

<div class="table3 mb-5">
<table class="table table-striped mb-5">
   
    <tr>
        <th>Codigo</th>
    
        <th>Nome</th>
       
        <th>Pais</th>
        
        
        <th></th>
        <th></th> 
        <th></th>
        
    </tr>
    @foreach ($brands as $b)
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->name }}</td>
       
        <td>{{ $b->country }}</td>
        
        
        <td><button type="button" class="btn btn-info"><a href="{{ route('brand.show', $b->id) }}" id="botao">Visualizar</a></button></td>
        <td><button type="button" class="btn btn-warning"><a href="{{ route('brand.edit', $b->id) }}" id="botao">Editar</a></button> </td>
        <td><form method="post" action="{{ route('brand.destroy', $b->id) }}">
            @csrf
            @method('DELETE')
         <input class="btn btn-danger" id="botao" type="submit" value="Excluir ">
            </form> </td>
        
    </tr>
    @endforeach
    
</table>

        
    
    
    

</div>



@else 
<h3>Nao a marcas cadastradas</h3>
@endif

@endsection