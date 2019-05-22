
@extends('layouts.app')

@section('content')

@foreach ($categories as $category)
      
        

        
            
              
              <div class="card-body">
                <h4 class="card-title">
                <li><a href="{{ url('category/'.$category['id'])}}">{{$category->name}}</a></li>
                </h4>
                
              </div>
          
        @endforeach
        @endsection

        




     