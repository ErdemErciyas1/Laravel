@extends('layouts.app')


@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class=".col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">

                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['quantity'] }}</span>
                            <strong>{{ $product['item'] ['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle"
                                data-toggle="dropdown">Edit</span></button> 
                                <ul class="dropdown-menu">
                                
                                

                            <input type="number" name="quantity" min="1" max="100">
                            <input type="submit">
                                    
                                </ul>
                                <td> <a href ="/delete/{{ $product->id }}" ><button>Delete</a></td>      
                            </div>
                           
                        </li>
                        
                    @endforeach
                </ul>
           
        </div>
            </div>

        <div class="row">
        <div class=".col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
              <strong style="margin-left: 20px">Total: {{ $totalPrice }}</strong>  
           
            </div>
        </div>
        <hr>
        <div class="row">
      
        </div>
    @else 
    <div class="row">
            <div class=".col-sm-7">
              <h2 style="margin-left: 30px">There are no items in the shoppingcart!</h2>
           
            </div>
        </div>
    @endif
@endsection