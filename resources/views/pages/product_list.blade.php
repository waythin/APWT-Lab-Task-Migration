@extends('layouts.app')

@section('content')
<table class="table table-borded">
    <tr>
        <th>id</th>
        <th>p_name</th>
        <th>p_code</th>
        <th>p_desc</th>
        <th>p_category</th>
        <th>p_price</th>
        <th>p_quantity</th>
        <th>p_stock_date</th>
        <th>p_rating</th>
        <th>p_purchased</th>

    </tr>
    @foreach($products as $product)
    <tr>
        
    <td>{{$product->id}}</th>
        <td>{{$product->p_name}}</td>
        <td>{{$product->p_code}}</td>
        <td>{{$product->p_desc}}</td>
        <td>{{$product->p_category}}</td>
        <td>{{$product->p_price}}</td>
        <td>{{$product->p_quantity}}</td>
        <td>{{$product->p_stock_date}}</td>
        <td>{{$product->p_rating}}</td>
        <td>{{$product->p_purchased}}</td>
        <td><a href="/product_edit/{{$product->id}}/{{$product->p_name}}">Edit</a></td>
        <td><a href="/product_delete/{{$product->id}}/{{$product->p_name}}">Delete</a></td>
        
    </tr>
    @endforeach
</table>

@endsection 