<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage</title>
  
  

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"; integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"; integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"; integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('/css/css.css') }}"/>

</head>

<body>

    
  @extends('layouts.app')

@section('content')
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
          <h1 class="my-4">Erci Webshop</h1>
          <div class= "list-group">
          <h3><a href="\category" class="my-4">Categories</h3>
       </div>
    </div>
      
          
       

        
      
      
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="https://d37slghchgusxj.cloudfront.net/hero_banners/images/000/006/771/large/Screen_Shot_2018-04-02_at_12.40.35_PM.jpg?1522698239" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://www.harryrosen.com/medias/sys_master/images/images/hcb/h51/8920168595486/Les-Cours-Store-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="https://d37slghchgusxj.cloudfront.net/hero_banners/images/000/005/936/large/BLANKLABEL-4.jpg?1514500795" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        

        



        @foreach ($products->chunk(3) as $productChunk)
        <div class="row">
        @foreach($productChunk as $product)
       

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{ $product->imagePath }}" style="max-height:300px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="category">{{ $product->title }}</a>
                </h4>
                <h5>€{{ $product->price }}</h5>
                <p class="card-text">{{ $product->description }}</p>
              </div>
              
              <div class="card-footer">
              
                 
              <a href="{{route('cart.create', ['id' => $product->id])}}"><button type="button" class="btn btn-primary">add to cart</button></a>
              </div>
            </div>
            
          </div>
        @endforeach
          
        @endforeach
         

  </div>
  <!-- /.container -->
                                    
@endsection

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
