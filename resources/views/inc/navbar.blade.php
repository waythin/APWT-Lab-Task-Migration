
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">


    <ul class="nav navbar-nav">
      <li><a href="{{route('home') }}">HOME</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="{{route('list') }}">PRODUCT LIST</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href= "{{route('details') }}"> PRODUCT DETAILS</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li ><a href="{{route('add') }}">PRODUCT ADD</a></li>
    </ul>


  </div>
</nav>

</body>
</html>
