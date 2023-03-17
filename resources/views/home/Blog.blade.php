@extends('welcome')

@section('content')

<br><br>
<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider mt-5">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        @foreach ($slider as $item)
                        <div class="swiper-slide">
                            <a href="{{ route('post.show', $dataList[0]->id) }}" class="img-bg d-flex align-items-end"
                                style="background-image: url('{{ asset('storage/' . $item->image) }}');">
                                <div class="img-bg-inner">
                                    <h2>{{ $item->title }}</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Hero Slider Section -->

<!-- ======= Home ======= -->
{{-- @include('home') --}}

<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
    <div class="container">
        <div class="row g-5">
            @if ($dataList->count())
            <div class="col-lg-5">
                <div class="post-entry-1 lg">
                    <a href="single-post.html"><img src="{{ asset('storage/' . $dataList[0]->image) }}" alt=""
                            class="img-fluid"></a>
                    <div class="post-meta"><span class="date">{{ $dataList[0]->category->name }}</span> <span
                            class="mx-1">&bullet;</span>
                        <span>{{ $dataList[0]->created_at->format('M j, Y') }}</span>
                    </div>
                    <h2><a href="{{ route('post.show', $dataList[0]->id) }}">{{ $dataList[0]->title }}</a></h2>
                    <p class="mb-4 d-block">{{ $dataList[0]->excerpt }}</p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="row g-5">
                    <div class="col-lg-6 border-start custom-border">
                        @foreach ($dataList->skip(1) as $item)
                        <div class="post-entry-1">
                            <a href="single-post.html"><img src="{{ asset('storage/' . $item->image) }}" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $item->created_at->format('M j, Y') }}</span>
                            </div>
                            <h2><a href="{{ route('post.show', $item->id) }}">{{ $item->title }}</a></h2>
                        </div>
                        @endforeach
                    </div>
                    <!-- Trending Section -->
                    <div class="col-lg-6">

                        <div class="trending">
                            <h3>Trending</h3>
                            <ul class="trending-post">
                                @foreach ($dataList as $item)
                                <li>
                                    <a href="{{ route('post.show', $item->id) }}">
                                        <h3>{{ $item->title }}</h3>
                                        <span class="author"> {{ $item->created_at->format('M j, Y') }}</span>
                                        <span class="author mb-3 d-block">{{ $item->author->name }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>
            @else
            <p class="text-center fs-4">No Post Found.</p>
            @endif

        </div> <!-- End .row -->
    </div>
</section> <!-- End Post Grid Section -->

@endsection