@extends('welcome')

@section('title', 'Contact')

@section('content')

<main id="main">
    <section id="contact" class="contact mb-5">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Contact us</h1>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item info-item-borders">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855" style="color: blue">+1 5589 55488 55</a></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com" style="color: blue">info@example.com</a></p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="form mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bady">
                            <div class="card">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127154.35839753844!2d97.03759471531396!3d5.172057177256837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304778e967f2b613%3A0x3039d80b220cc20!2sLhokseumawe%2C%20Lhokseumawe%20City%2C%20Aceh!5e0!3m2!1sen!2sid!4v1679046403690!5m2!1sen!2sid"
                                    width="1114" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Contact Form -->

        </div>
    </section>

</main><!-- End #main -->
@endsection