<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Admin</title>
</head>

<body>

<div class="jumbotron text-center container-fluid">
    <h3 class="font-weight-bold">Xin Chào Admin </h3>
    <h3 class="">
        <a href="{{route('admin.create')}}">Add A Product</a>
    </h3>

</div>

@yield('content')

</body>

</html>
