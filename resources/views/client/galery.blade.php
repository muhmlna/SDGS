@extends('layouts.client.app')

@section('title', 'Galery')
 

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <h1 class="mt-3">Gallery</h1>

        @foreach ($galeries as $galery)    
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="course-item">
            <div class="course-content">
            <div class="text-center"><img class="img img-fluid" src="{{ asset('assets/galery') }}/{{ $galery->gambar }}" alt=""></div>
            </div>
          </div>
        </div> <!-- End Course Item-->
        @endforeach

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main>

@endsection
