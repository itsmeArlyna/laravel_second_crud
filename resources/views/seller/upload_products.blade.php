<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seller</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/upload_products.css')}}>
    <style>
    body {
        background: url('/img/SB.png') !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
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
            <li class="nav-item" id="active">
                <a class="nav-link" href="/upload">List new Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/update">Update Products</a>
            </li>
        </ul>
    </div>
    <div class="container-fluid pt-5">
        <div class="row mt-3">
           <div class="col-6">
            <div>
                @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
            </div>
            <div class="card p-3 update">
                <div class="card-body">
                    <h1>List new Product</h1>
                    <form action= {{ route('upload_products.store') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label" for="name">Product Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Enter product name">
                            </div>
                            <div class="col-6">
                                <label for="formFile" class="form-label">Product Image</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label class="form-label" for="name">Product Quantity</label>
                                <input class="form-control" type="text" id="name" name="quantity" placeholder="Enter product quantity">
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="name">Product Price</label>
                                <input class="form-control" type="text" id="name" name="price" placeholder="Enter product price">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label class="form-label" for="name">Product Description</label>
                                <input class="form-control" type="text" id="name" name="description" placeholder="Enter product description">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger">Upload now!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

   
