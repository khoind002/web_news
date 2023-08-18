@extends('Client.layout')
@section('content')

<div class="main-container container" id="main-container">

      <!-- Content -->
      <div class="row">
            
        <!-- post content -->
        <div class="col-lg-8 blog__content mb-30">
        
          <div class="title-wrap">
          </div>
        
          <div class="row">
        @foreach ($post as $posts)
            <div class="col-md-6">
              <article class="entry">
                <div class="entry__img-holder">
                  <a href="single-post.html">
                    <div class="thumb-container thumb-75">
                      @if ($posts->urlHinh && file_exists(public_path($posts->urlHinh)))
                          <img class="" src="{{asset($posts->urlHinh)}}" alt="ảnh tin">
                      @else
                          <img class="" src="{{asset('images/default.jpg')}}" alt="ảnh tin">
                      @endif
                  </div>
                  </a>
                </div>

                <div class="entry__body">
                  <div class="entry__header">
                    <h2 class="entry__title">
                      <a href="single-post.html">{{$posts->tieuDe}} </a>
                    </h2>
                    <ul class="entry__meta">
                      <li class="entry__meta-author">
                      <i class="fa-solid fa-user"></i>
                        <a href="#">DeoThemes</a>
                      </li>
                      <li class="entry__meta-date">
                        <i class="ui-date"></i>
                        {{$posts->ngayDang}}
                      </li>
                      <li class="entry__meta-comments">
                        <i class="fa-solid fa-comments"></i>
                        <a href="#">115</a>
                      </li>
                    </ul>
                  </div>
                  <div class="entry__excerpt">
                    <p>{{$posts->tomTat}}</p>
                  </div>
                </div>
              </article>
            </div>
            @endforeach
          </div>

          <!-- Pagination -->
          {{ $post->links('Client.post.custom_pagination') }}
        </div> <!-- end col -->
        
     
@endsection
