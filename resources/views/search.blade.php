@extends ('master')
@section ("content")
<div class="container custom-product ">
<div class="col-m-3">
<a href="">Filter</a>
</div>

<div class="col-m-9">
<div class="trending-wrapper">
  <h3>Results:</h3>
  @foreach ($products as $item)
  <div class="trending-item">
  <a href="detail/{{$item['id']}}">
  <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
  </a>
  <h3>{{$item['name']}}</h3>
  <h6>{{$item['descreption']}}</h6>
  </div>
  @endforeach
</div>
</div>
</div>
@endsection