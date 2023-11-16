@extends('layouts.client.app')

@section('title', 'Article')
 

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
    </section><!-- End Courses Section -->

  </main>

@endsection
