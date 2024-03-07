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
      <a class="nav-link text-light" href="/">Product</a>
    </li>
   <!--  <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li> -->
  </ul>

</nav>
	<div class="container">
		<div class="text-right">
			<a href="products/create" class="btn btn-dark mt-2">Add Product</a>
		</div>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($product as $product)
      <tr>
        <td>{{$loop->index+1}}</td>
        <td><a href="products/{{$product->id}}/show" class="text-dark">{{$product->name}}</a></td>
        <td>
        	<img src="products/{{$product->image}}" class="rounded-circle" height="30px" width="30px" />
        </td>
        	<td>
        		<a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
        		<a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
        	</td>
      </tr>
    @endforeach
    </tbody>
</table>
        
	</div>

</body>
</html>