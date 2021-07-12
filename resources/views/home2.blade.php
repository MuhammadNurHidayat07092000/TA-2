@extends('main2')

@section('title','User Interface')

<main id="main">
  {{-- @section('about')
      <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>About</h2>
            <h3>Find Out More <span>About Us</span></h3>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
          </div>

          <div class="row">
            <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
              <img src="{{ asset('style2/assets/img/about.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="bx bx-store-alt"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="bx bx-images"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
          </div>
        </div>
      </section>
  @endsection
    
  @section('counts')
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">232</span>
                <p>Happy Clients</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">521</span>
                <p>Projects</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-live-support"></i>
                <span data-toggle="counter-up">1,463</span>
                <p>Hours Of Support</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-users-alt-5"></i>
                <span data-toggle="counter-up">15</span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  @endsection
   
  @section('clients')
      <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">
          <div class="row">
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ asset('style2/assets/img/clients/client-1.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ asset('style2/assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ asset('style2/assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ asset('style2/assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ asset('style2/assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{ asset('style2/assets/img/clients/client-6.png') }}" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </section>
  @endsection --}}
   
  @section('services')
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
  
  @section('contact')
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Maps</h2>
            <h3>Lokasi <span>Kantor</span></h3>
            <!-- <p>Jika ada yang ingin dibantu terkait</p> -->
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 ">
              <iframe class="mb-4 mb-lg-0" src="https://goo.gl/maps/CcwTy3CB2bmmaeDfA" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
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


