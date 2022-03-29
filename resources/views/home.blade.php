@extends('layouts.base')

@section('pageTitle', 'DC-COMICS')

@section('content')

    <div class="main-item">
        <div class="img-container-jumbo">
            <img src="{{asset('img/jumbotron.jpg')}}">
        </div>
        <div class="btn-current">
          <button>CURRENT SERIES</button>
        </div>
        <div class="container">
             
            @foreach($albums as $album) 
                <div class="item-home">
                    <a class="active-album" href="current-album">
                        <img src="{{$album['thumb']}}" alt="{{$album['title']}}">
                    </a>
                        <h3>{{$album['title']}}</h3>
                </div>
            @endforeach
    
        </div>
        <div class="btn-reload">
          <button>LOAD MORE</button>
        </div>

    </div>
    <section class="shop">
        <div class="container">
          <div class="img-shop">
            <img src="{{asset('img/buy-comics-digital-comics.png')}}">
            <div class="img-text">DIGITAL COMICS</div>
          </div>
          <div class="img-shop">
            <img src="{{asset('img/buy-comics-merchandise.png')}}">
            <div class="img-text">DIGITAL COMICS</div>
          </div>
          <div class="img-shop">
            <img src="{{asset('img/buy-comics-subscriptions.png')}}">
            <div class="img-text">DIGITAL COMICS</div>
          </div>
          <div class="img-shop">
            <img src="{{asset('img/buy-comics-shop-locator.png')}}">
            <div class="img-text">DIGITAL COMICS</div>
          </div>
          <div class="img-shop">
            <img src="{{asset('img/buy-dc-power-visa.svg')}}">
            <div class="img-text">DIGITAL COMICS</div>
          </div>
         
        </div>
      </section>
@endsection

