@extends('welcome')

@section('title', 'Blog Post')

<style>
    #fixed-image {
        max-width: 100%;
        height: auto;
    }
</style>
@section('content')
<br><br>
<!-- ======= Blog Section ======= -->
<section id="hero-slider" class="hero-slider mt-5">
    <div class="container-md">
        <div class="row">
            @foreach ($dataitem as $item)
            <div class="col-md-4 col-sm-6">
                <div class="card mb-4">
                    <a href="{{ route('post.show', $item->id) }}">
                        <img id="fixed-image" src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                            alt="{{ $item->title }}">
                        <div class="card-body">
                            <a href="{{ route('post.show', $item->id) }}" class="card-title" style="color: black">{{
                                $item->title }}</a>
                            <div class="post-meta"><span class="date">{{ $item->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $item->created_at->format('M j, Y') }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="mt-3">
                {{ $dataitem->links() }}
            </div>
        </div>
    </div>

</section>
<!-- End Blog Section -->
@endsection