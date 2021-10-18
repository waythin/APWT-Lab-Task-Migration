@extends('layouts.app')

@section('content')
<table class="table table-borded">
    <tr>
        <th>id</th>
        <th>p_name</th>
        <th>p_desc</th>
        <th>p_category</th>
        <th>p_price</th>
        <th>p_stock_date</th>
        <th>p_purchased</th>

    </tr>
    @foreach($products as $product)
    <tr>
        
    <td>{{$product->id}}</th>
        <td>{{$product->p_name}}</td>
        <td>{{$product->p_desc}}</td>
        <td>{{$product->p_category}}</td>
        <td>{{$product->p_price}}</td>
        <td>{{$product->p_stock_date}}</td>
        <td>{{$product->p_purchased}}</td>
        
    </tr>
    @endforeach
</table>

@endsection 