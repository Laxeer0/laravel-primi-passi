  
@extends("layout.layout")
@section("title","Home")


@section("main")

@foreach ($dischi as $key )
    <div class="col d-flex container mb-2">
      <div class="card" style="width: 22rem;">
        <img class="card-img-top" src="{{$key['poster']}}" alt="Card image cap">
        <div class="card-body">
          <h5>{{$key['title']}}</h5>
          <p class="card-text">{{$key['author']}} <br> {{$key['year']}} <br> {{$key['genre']}}</p>
        </div>
      </div>
    </div>
  @endforeach

@endsection