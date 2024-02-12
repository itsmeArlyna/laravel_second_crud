<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/upload_products.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
    body {
        background: url('/img/SBExpress.png') !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
    }
    table{
        margin-top: 10%;
        background: rgba(255, 255, 255, 0);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(0px);
        -webkit-backdrop-filter: blur(0px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    </style>
</head>
  <body>
    <div class="container-fluid p-0">
        <ul class="nav">
            <li id="logo">
                <img src={{asset('/img/logo.png')}} alt="">
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/view">My Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/upload">List new Product</a>
            </li>
            <li class="nav-item" id="active">
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
        <table class="table table-hover text-center">
            <thead class="table" >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
        </thead>
            <tbody class="table-group-divider">
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 100px;">
                    @else
                        No image available
                    @endif
                </td>
                <td>{{$product->qty}}</td>
                <td>$ {{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td class="text-center" id="action">
                    <a href={{route('seller.edit',['product'=>$product])}}><i class="fas fa-edit"></i></a>
                </td>
                <td class="text-center">
                    <form action="{{ route('seller.destroy', ['product' => $product['id']]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('delete')
                
                        <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;">
                            <i class="fas fa-trash" style="color: red;"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>  
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

   
