@extends('layouts.app')



@section('content')



    @if(isset($cart))

        <div class="card_content">

            @foreach($cart as $id=>$amount)
    

            <table id="cart" class="table table-striped">

            <thead class="thead-dark">

                <tr>

                    <th style="width:30%" scope="col">Product</th>

                    <th style="width:8%" scope="col">Price</th>

                    <th style="width:5%" scope="col">Quantity</th>

                    <th style="width:15%" class="text-center">Total</th>

                    <th style="width:10%"></th>

                </tr>
                </thead>

                

                <tbody>

                    <tr>

                        <td data-th="Product">

                            <div class="row">

                                <div class="col-sm-2 hidden-xs"><img src="https://imgplaceholder.com/100x80/cccccc/757575/glyphicon-gift" alt="..." class="img-responsive"/></div>

                                <div class="col-sm-10">

                                    <h4 class="nomargin">{{$product[$id]->name}}</h4>

                                    <p>{{$product[$id]->description}}</p>

                                </div>

                            </div>

                        </td>

                        <td data-th="Price">€{{$product[$id]->price}}</td>

                        <td data-th="Quantity">

                            <form method="post" action="{{route('cart.update', ['id' => $id])}}">

                                @csrf

                                <input type="number" class="form-control text-center" name='quantity' value="{{$amount}}">

                                <input class="btn btn-info btn-sm" step="1" type="submit" value="submit">

                            </form>

                        </td>

                        <td data-th="Subtotal" class="text-center">€{{$product[$id]->price * $amount}}</td>

                        <td class="actions" data-th="">

                            <form action="{{ route('cart.delete', [$id]) }}" method="POST">

                                @method('DELETE')

                                @csrf

                                <button class="btn btn-danger"><i class="fa fa-trash-o">delete</i></button>

                            </form>

                        </td>

                    </tr>

                </tbody>

            @endforeach

    @else

        {{'Cart is empty'}}


    @endif

            <tfoot>

            <tr class="visible-xs">

                

            </tr>

            <tr>

                <td><a href="{{route('product.index')}}" class="btn btn-secondary"><i class="fa fa-angle-left"></i> Go back to shopping</a></td>

                <td colspan="2" class="hidden-xs"></td>

                

               

            </tr>

            </tfoot>

        </table>

    </div>







@endsection



