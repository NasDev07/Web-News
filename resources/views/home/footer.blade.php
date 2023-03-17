<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">About Formad</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem
                        deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis
                        qui aliquid blanditiis omnis quae. Explicabo?</p>
                    <p><a href="about.html" class="footer-link-more">Learn More</a></p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Navigation</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href="" {{ url('/') }}"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="#"><i class="bi bi-chevron-right"></i> Blog</a></li>
                        <li><a href="{{ url('about') }}"><i class="bi bi-chevron-right"></i> About us</a></li>
                        <li><a href="{{ url('/contact') }}"><i class="bi bi-chevron-right"></i> Contact</a></li>
                        <li>
                            @if (Route::has('login'))
                            @auth
                            <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500"><i
                                    class="bi bi-chevron-right"></i> Dashboard</a>
                            @else
                            <a href="{{ route('login') }}"
                                class="text-sm text-gray-700 dark:text-gray-500 underline btn-get-started btn-sm"><i
                                    class="bi bi-chevron-right"></i> Login</a>

                            @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn-get-started fw-bold">Join
                                Member</a> --}}
                            @endif
                            @endauth

                            @endif
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3 class="footer-heading">Recent Posts</h3>

                    <ul class="footer-links footer-blog-entry list-unstyled">
                        @foreach ($footerPosts as $item)
                        <li>
                            <a href="{{ route('post.show', $item->id) }}" class="d-flex align-items-center">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">{{ $item->author->name }}</span>
                                        <span class="mx-1">&bullet;</span> <span>{{ $item->created_at->format('M j, Y')
                                            }}</span>
                                    </div>
                                    <span>{{ $item->title }}</span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Copyright <strong><span>Formad</span></strong>. 2023 - <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </div>

                    <div class="credits">
                        Designed by <a href="{{ url('/') }}">Formad</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>