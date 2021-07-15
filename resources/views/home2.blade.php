@extends('main2')

@section('title','User Interface')

<main id="main">
  @section('articles')
      <section id="artikel" class="services">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Articles</h2>
            <h3>Check our <span>Articles</span></h3>
            {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
          </div>
          <div class="row">
            @foreach ($articles as $item)
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4><a href="{{ url('frontends/artikel/'.$item->id) }}">{{ $item->judul }}</a></h4>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
  @endsection
  
  @section('maps')
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Maps</h2>
            <h3>Lokasi <span>Kantor</span></h3>
            <!-- <p>Jika ada yang ingin dibantu terkait</p> -->
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 ">
              <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.7576012750046!2d116.085640714518!3d-8.619254789965982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfa83d611f21%3A0x44ee41db6062236d!2sBADAN%20NARKOTIKA%20NASIONAL%20PROVINSI%20NUSA%20TENGGARA%20BARAT!5e0!3m2!1sen!2sid!4v1626104780230!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
            </div>
          </div>
      </section>
  @endsection
</main>

@section('footer')
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Bnnp Ntb<span>.</span></h3>
            <p>
              Jln. Dr. Soedjono Lingkar Selatan<br>
              Mataram, NTB 83361<br>
              Indonesia <br><br>
              <strong>Call Center:</strong> 184<br>
              <strong>Phone:</strong> (370) 617-7418<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Bnnpntb</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection


