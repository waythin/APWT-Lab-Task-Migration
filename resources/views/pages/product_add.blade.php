@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  /* padding: 12px; */
  background-color: white;
}


.textred {
  color: red;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 8px;
  margin: 2px 0 15px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #00b8e6;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="{{route('addS')}}" method="post">
  {{csrf_field()}}

  <div class="container">
    <h3>PRODUCT ADD</h3>
    <hr>

    <label for="p_name"><b>Product Name</b></label>
    <input type="text" placeholder="Enter Product Name" name="p_name" id="p_name" >
    @error('p_name')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_code"><b>Product Code</b></label>
    <input type="text" placeholder="Enter Product Code" name="p_code" id="p_code" >
    @error('p_code')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_desc"><b>Product Description</b></label>
    <input type="text" placeholder="Enter Product Description" name="p_desc" id="p_desc">
    @error('p_desc')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_category"><b>Product Category </b></label><br>
    <input type="text" placeholder="Enter Product Category" name="p_category" id="p_category">
    @error('p_category')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_price"><b>Product Price</b></label><br>
    <input type="text" placeholder="Enter Product Price" name="p_price" id="p_price" >
    @error('p_price')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_quantity"><b>Product Quantity</b></label><br>
    <input type="text" placeholder="Enter Product Quantity" name="p_quantity" id="p_quantity" >
    @error('p_price')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_stock_date"><b>Product Stock_Date</b></label><br>
    <input type="text" placeholder="Enter Product Stock_Date" name="p_stock_date" id="p_stock_date" >
    @error('p_stock_date')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_rating"><b>Product Rating</b></label><br>
    <input type="text" placeholder="Enter Product Rating" name="p_rating" id="p_rating" >
    @error('p_rating')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <label for="p_purchased"><b>Product Purchased</b></label><br>
    <input type="text" placeholder="Enter Product Purchased" name="p_purchased" id="p_purchased" >
    @error('p_purchased')
    <span class="textred"> {{$message}}</span>
    @enderror
    <br>

    <button type="submit" class="registerbtn">ADD</button>
  </div>
  
 
</form>

</body>
</html>
@endsection 
