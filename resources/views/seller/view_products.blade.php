<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/upload_products.css')}}>
    <style>
    </style>
</head>
  <body>
    <div class="container-fluid p-0">
        <ul class="nav">
            <li id="logo">
                <img src={{asset('/img/logo.png')}} alt="">
            </li>
            <li class="nav-item" id="active">
                <a class="nav-link" href="/view">My Products</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link" href="/upload">List new Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/update">Update Products</a>
            </li>
        </ul>
    </div>
    <div class="container pt-5">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="row">
            @foreach($products as $product)
                <div class="col-4">
                    <div class="card mb-5 home-card">
                        <div class="justify-content-center d-flex">
                            <img  src={{ asset('storage/' . $product->image) }} class="card-img-top" style="object-fit: cover;" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush bg-dark">
                            <li class="list-group-item text-center text-warning bg-dark"><h5><b>$ {{$product->price}}</b></h5></li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

   
