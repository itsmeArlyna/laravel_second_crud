<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset('css/welcome.css')}}>
</head>
  <body>
    <div class="container-fluid p-0">
      <ul class="nav">
          <li class="nav-item" id="active">
              <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item"> 
              <a class="nav-link" href="/order">Our Menu</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/update">About Us</a>
          </li>
      </ul>
    </div>
    </div>
    <div class="container pt-5">
        <div class="row text-center mt-5">
            <div class="title">
                <h1 >SpeedyBite <span class="text-dark">Express</span></h1>
                <h5>Fast Food, Faster Service – Taste the Rush!</h5>
            </div>
            <a href="/order">
                <div class="buy">
                    <h1>Order now!</h1>
                </div>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>