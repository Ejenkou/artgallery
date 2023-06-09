@include('\layouts\header')
<body>


<div class="container text-center">
<h1>Topics</h1>
@if(Auth::check() &&(Auth::user()->role == 'admin'))
          <a href="{{route('category.create')}}" type="button" class="btn btn-success" > Create </a></li>
@endif
</div>

<div class="container text-center">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($categories as $category)
  <div class="col">
    <div class="card h-200" style="width: 18rem, h">
      <img src="{{ asset('storage/images/categoryimg/'.$category->img)}}" class="card-img-top"  alt="...">
      <div class="card-body">
      <a href="{{route('sort.category', ['categoryId' => $category->id]) }}" class="btn btn-primary">{{$category->name}}</a>
      @if(Auth::Check() && Auth::user()->role == 'admin')
        <form action="{{ route('category.destroy', $category->id, ) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger"> Delete Category </button> 
        </form>
      @endif
      </div>
    </div>
  </div>
    @endforeach
  </div>
 
</div>
    <div class="container text-center">
        <h2>Content</h2>
    </div>

   <div class="container text-center">
  <div class="row">

  @foreach ($content as $cont)
    <div class="col">
    <a href="{{route('content.details', ['id' => $cont->id]) }}"><img src="{{asset('storage/images/contentimg/'.$cont->img)}}" class="img-fluid" alt="Responsive image"></a>
    </div>
    @endforeach
  </div>
</div>

</body>