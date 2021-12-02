<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}" >
    
    <title>Projeto laravel</title>
</head>
<body>
    <div class="conteiner">
        
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-5">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Brands</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0 ms-5">
                    
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('brand.index')}}">Marcas</a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link active" href="{{route('brand.create')}}">Cadastrar Marcas</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{route('product.index')}}">Produtos</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link active" href="{{route('product.create')}}">Cadastrar Produtos</a>
                      </li>
                    
                  </ul>
                  
                </div>
              </div>
            </nav>
          </header>
          
        <section class="content">
            @yield('content')
        </section>
        
        <footer class="mastfoot fixed-bottom mt-auto py-3 bg-dark ">
          <div class="inner">
            <p class="text-center text-white-50">Fatec 2021. Jheniffer Carolina Pereira</p>           </div>
        </footer>
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>