@extends('main_layout')

@section('content')
<h1>Cadastrar Produtos</h1>
<div class="container-fluid">
    
<form action="{{ route('product.store')}}" method="post">
    @csrf
    <div class="row justify-content-md-center" >
        <div class="col col-lg-3">
<label for="name" class="form-label">Nome:</label>
<input type="text" name="name" class="form-control" id="name" required>
        </div></div>
        <div class="row justify-content-md-center" >
            <div class="col col-lg-3">
<label for="categoria" class="form-label">Categoria</label>
<input type="text" name="categoria" class="form-control" id="categoria" required>
            </div></div>
            <div class="row justify-content-md-center" >
                <div class="col col-lg-3">
                    <label for="brand_id" class="form-label">Marca</label>
                    
                  
                    
                    <select name="brand_id" class="form-control" id="brand_id">
                        @isset($brands)
                            
                        
                        @foreach ($brands as $b)
                            
                        
                        
                        
                        <option value="{{$b->id}}">{{$b->name}}</option>
                   
                   
                       
        @endforeach
        @endisset
    </select>
</div></div>  


                
                <div class="d-grid gap-2 col-1 mx-auto mb-5">
<input type="submit" class="btn btn-primary mt-3" name="command" value="Salvar">
<input type="reset" class="btn btn-primary" value="Limpar">
                </div>


</form>
</div>
@endsection
