@extends('layouts')
@section('content')
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Articles</span>
      </a>
    </header>
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Article</h1>
        <p class="col-md-8 fs-4">Custom Jambotron</p>
        <p class="col-md-8 fs-4">Random Description</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      @foreach ($articles as $article)        
      <div class="col-md-4 mt-4">
        <div class="h-100 p-5 text-bg-dark rounded-3">
          <h2>{{$article->title}}</h2>
          <p>{{$article->description}}</p>
          <a class="btn btn-outline-light" href="articles/article/{{$article->id}}">Read more</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>
@stop