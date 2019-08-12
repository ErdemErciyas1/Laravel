@extends('layouts.app')



@section('content')



    @if(isset($cart))

        <div class="card_content">

            @foreach($cart as $id=>$amount)

            <table id="cart" class="table table-hover table-condensed">

                <thead>

                <tr>

                    <th style="width:50%">Product</th>

                    <th style="width:10%">Price</th>

                    <th style="width:8%">Quantity</th>

                    <th style="width:22%" class="text-center">Subtotal</th>

                    <th style="width:10%"></th>

                </tr>

                </thead>

                <tbody>

                    <tr>

                        <td data-th="Product">

                            <div class="row">

                                <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>

                                <div class="col-sm-10">

                                    <h4 class="nomargin">{{$product[$id]->name}}</h4>

                                    <p>{{$product[$id]->description}}</p>

                                </div>

                            </div>

                        </td>








@endsection



