@extends('layouts')
@section('content')

<main>
    <div class="container py-4">
      <header class="pb-3 mb-4 border-bottom">
        <a class="d-flex align-items-center text-dark text-decoration-none">
          <span class="fs-4">Article {{$id}}</span>
        </a>
      </header>
  
      <div class="row align-items-md-stretch">
        <div class="col-md-12 mt-4">
          <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>{{$article->title}}</h2>
            <p>{{$article->description}}</p>
            <p>{{$article->content}}</p>
          </div>
        </div>
      </div>
    </div>
</main>
@stop