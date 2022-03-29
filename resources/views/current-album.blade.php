@extends('layouts.base')

@section('pageTitle', 'DC-COMICS')

@section('content')

  
  <div class="main-item-active">
    <div class="img-container-jumbo">
        <img src="{{asset('img/jumbotron.jpg')}}">
    </div>

    <div class="box-img-activ">
      <div class="box-img">
        <img src="{{$albums['thumb']}}" alt="">
      </div>
    </div>

    <div class="box-text">
      <h2 id="title">{{$albums['title']}}</h2>

      <div  class="box-description">
        <div class="top-info">
          <div>U.S. Price: <span>{{$albums['price']}}</span></div>
          <div class="disponibility">
            <span>AVAILABLE</span>
            Check Availability
          </div>
        </div>

        <p>{{$albums['description']}}</p>
        <img id="publicita-img" src="{{asset('img/adv.jpg')}}">
      </div>
    </div>
    
  </div>
<section id="details">
  <div class="details-container">
    <div class="box-details">
      <h3>Talent</h3>
      <div class="text-details p-20">
        <h6>Art By</h6>
  
        @foreach ($albums["artists"] as $artist)
          @if($loop->last)
            <span>{{$artist}}</span>
          @else
          <span>{{$artist}},</span>
          @endif

        @endforeach
        
      </div>

      <div class="text-details p-20">
        <h6>Written by:</h6>
        @foreach ($albums["writers"] as $writer)
        @if($loop->last)
          <span>{{$writer}}</span>
        @else
        <span>{{$writer}},</span>
        @endif
        
        @endforeach
        
      </div>
    </div>

    <div class="box-details details-price">
      <h3>Specs</h3>
      <div class="text-details p-10">
        <h6>Series:</h6>

        <p>{{$albums['series']}}</p>
        

      </div>
      
      <div class="text-details p-10">
        <h6>U.S. Price:</h6>
        <p>{{$albums['price']}}</p>
      </div>
      <div class="text-details p-10">
        <h6>On Sale Date:</h6>
        <p>{{$albums['sale_date']}}</p>
      </div>
    </div>

  </div>
  
</section>

<section class="shop-white">
  <div class="container">
    <div class="img-shop">
      <img src="{{asset('img/cta-icons.png')}}">
     
    </div>
    
   
  </div>
</section>
  
 
   
@endsection
