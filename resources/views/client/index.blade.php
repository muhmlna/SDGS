@extends('layouts.client.app')

@section('title', 'Beranda')
 

@section('content')

<section id="carousel" class="d-flex justify-content-center align-items-center">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
      @foreach ($galeries as $galeri)    
          <div class="carousel-item active">
              <img class="w-100" src="{{ asset('assets/galery') }}/{{ $galeri->gambar }}" alt="Image">
          </div>
      @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row align-items-center">
          <div class="col-md-5" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/logo.2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Welcome to SDGs Center ITERA</h3>
            <p>
              SDGs Center ITERA mempunyai visi untuk "Menjadi Pusat Studi yang mampu memberikan advis dan memandu pembangunan berkelanjutan serta berperan aktif dalam pencapaian Tujuan Pembangunan Berkelanjutan atau SDGs." Untuk mendukung tercapainya visi tersebut, SDGs Center ini memiliki empat misi.
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $event }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $article }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Article</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $journal }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Journal</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="{{ $galery }}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Galery</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ==== Point SDGS ==== -->
    <section class="elementor-section elementor-top-section elementor-element elementor-element-19bb266 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="19bb266" data-element_type="section">
      <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4f164d" data-id="d4f164d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
              <div class="elementor-element elementor-element-ddbb9bf elementor-widget elementor-widget-heading animated fadeInDown" data-id="ddbb9bf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                  <h2 class="elementor-heading-title elementor-size-default">Individuals, innovations, and actions are helping the planet realize the potential and promise of the SDGs.</h2>		</div>
                </div>
                <div class="elementor-element elementor-element-e0ce725 elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider animated fadeInDown" data-id="e0ce725" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="divider.default">
                <div class="elementor-widget-container">
              </div>
            </div>
            <div class="elementor-element elementor-element-8b641a7 gallery-spacing-custom elementor-widget elementor-widget-image-gallery animated fadeInUp" data-id="8b641a7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image-gallery.default">
            <div class="elementor-widget-container">
              <div class="elementor-image-gallery">
                <div class="text-center">
                <?php for($i=1; $i<=17; $i++) { ?>
                    <a href="{{ asset('assets/img/logo-sdgs-'. $i . '.jpg')}}"><img class="img img-fluid" width="200" src="{{ asset('assets/img/logo-sdgs-'. $i . '.jpg')}}" alt=""></a>
                  <?php } ?>
                  <a href="{{ asset('assets/img/TPB-Logo.jpg')}}"><img class="img img-fluid" width="200" src="{{ asset('assets/img/TPB-Logo.jpg')}}" alt=""></a>
                </div>
                
              </div>
      </div>
      </div>
      </div>
        </div>
      </div>
            </div>
      </section>

      <!-- END Point SDGs -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Apa itu SDGs Center ITERA?</h3>
              <p>
                SDGS Center ITERA (Institut Teknologi Sumatera) adalah sebuah lembaga yang berkomitmen kuat untuk mewujudkan Tujuan Pembangunan Berkelanjutan (Sustainable Development Goals). 
                SDGs Center ITERA berperan penting dalam mencapai tujuan-tujuan ini dengan tiga fokus utama: Penelitian, Pendidikan, dan Pengabdian.
              </p>
              <div class="text-center">
                <a href="article" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Pendidikan</h4>
                    <p>Pendidikan adalah pondasi utama untuk mencapai SDGs, dan SDGS Center ITERA memahami pentingnya pendidikan yang berkualitas dalam pembangunan berkelanjutan.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Penelitian</h4>
                    <p>Melalui penelitian, lembaga ini berupaya untuk mengidentifikasi, memahami, dan mencari solusi terhadap berbagai tantangan pembangunan berkelanjutan.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-heart"></i>
                    <h4>Pengabdian</h4>
                    <p>Pengabdian masyarakat adalah komitmen SDGS Center ITERA untuk menerjemahkan hasil penelitian dan pendidikan ke dalam tindakan nyata yang memberikan dampak positif pada masyarakat dan lingkungan sekitarnya.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Publication</h2>
          <p>News Article</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        @foreach ($articles as $article)    
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <div class="text-center"><img class="img img-fluid" src="{{ asset('assets/article') }}/{{ $article->gambar }}" alt=""></div>
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>{{ $article->category->nama }}</h4>
              </div>

              <h3><a href="{{ route('article.show', $article->id) }}">{{ $article->nama }}</a></h3>
              <p>{{ $article->isi }}</p>
            </div>
          </div>
        </div> <!-- End Course Item-->
        @endforeach

        </div>



      </div>
    </section><!-- End Popular Courses Section -->

  </main>

@endsection
