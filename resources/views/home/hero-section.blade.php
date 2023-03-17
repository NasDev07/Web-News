<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Welcome to <span>Yumari Aceh</span></h2>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque
                    eum quaerat.</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ route('dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                            @else
                                {{-- <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline btn-get-started btn-sm">Login</a> --}}
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn-get-started fw-bold">Join
                                        Member</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    {{-- <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-telephone"></i><span>Hubungi Kami</span></a> --}}
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets_user/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out"
                    data-aos-delay="100">
            </div>
        </div>
    </div>
</section>
