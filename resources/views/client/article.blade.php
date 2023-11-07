@extends('layouts.client.app')

@section('title', 'Article')

@section('textHome', 'text-success')

@section('content')

<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Article</h2>
        <p>Ikuti kisah inspiratif SDGS Center ITERA dalam upaya kita untuk mencapai pembangunan berkelanjutan. 
          Kita adalah para pemimpi dan pejuang yang merajut harapan melalui penelitian, pendidikan, dan pengabdian. 
          Temukan perjalanan kita dalam artikel ini menuju masa depan yang lebih baik dan berkelanjutan untuk semua.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Pendidikan</h4>
                </div>

                <h3><a href="article-details.html">Workshop Pendidikan Berkelanjutan</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Penelitian</h4>
                </div>

                <h3><a href="article-details.html">Studi Kasus Kemiskinan di Daerah Pedesaan</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Pengabdian</h4>
                </div>

                <h3><a href="article-details.html">Pelatihan Kewirausahaan untuk Masyarakat Lokal</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main>

@endsection
