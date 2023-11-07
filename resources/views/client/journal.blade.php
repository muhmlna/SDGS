@extends('layouts.client.app')

@section('title', 'Journal')
 

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <h1 class="mt-3">Journal</h1>
        @foreach ($journals as $journal)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="course-item">
                <div class="course-content">
                  <h3><a href="{{ $journal->link }}">{{ $journal->nama }}</a></h3>
                  <p>{{ $journal->isi }}</p>
                  <a href="{{ $journal->link }}" class="btn rounded text-light" style="background-color: #0A6F8F;">Download</a>
                </div>
              </div>
            </div> <!-- End Course Item-->
        @endforeach

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main>

@endsection
