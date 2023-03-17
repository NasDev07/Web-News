@extends('welcome')

@section('title', 'Sigle Blog')

@section('content')
<br><br>
<section class="single-post-content mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9 post-content">
                <h2 class="mb-2">{{ $post['title'] }}</h2>

                <p>By. <span style="color: blue; font-weight: 700;"> {{$post->author->name }}</span> in <span
                        style="color: blue; font-weight: 700;">{{
                        $post->category->name}}</span>
                </p>

                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3"
                        alt="{{ $post->category->name }}" class="img-fluid ">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3"
                    alt="{{ $post->category->name }}" class="img-fluid ">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>


            <div class="col-md-3">
                <!-- ======= Sidebar ======= -->
                <div class="aside-block">

                    <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending"
                                aria-selected="false">Trending</button>
                            <hr>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <!-- Popular -->
                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                            aria-labelledby="pills-popular-tab">
                            @foreach ($silderpost as $item )
                            <div class="post-entry-1 border-bottom">
                                <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                        class="mx-1">&bullet;</span>
                                    <span>{{ $item->created_at->format('M j, Y') }}</span>
                                </div>
                                <h2 class="mb-2"><a href="{{ route('post.show', $item->id) }}">{{ $item->title }}</a>
                                </h2>
                                <span class="author mb-3 d-block">{{ $item->author->name }}</span>
                            </div>
                            @endforeach
                        </div> <!-- End Popular -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection