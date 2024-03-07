<!DOCTYPE html>
<html>
<head>
	<title>laravel CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-light" href="/">BACK</a>
    </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li> -->
  </ul>

</nav>

@if($message = Session::get('success'))
<div class="alert alert success alert-block">
<strong>{{ $message}}</strong>
</div>
@endif

<div class="countainer">
  <div class="row justify-content-center">
    <div class="col-sm-8 mt-4">
      <div class="card p-4">
        <p>Name: <b>{{$product->name}}</b></p>
        <p>Description: <b>{{$product->description}}</b></p>
        <img src="/products/{{$Product->image}}" class="rounded" width="100%">
      </div>
    </div>
  </div>
</div>
