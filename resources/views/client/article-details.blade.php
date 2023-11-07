@extends('layouts.client.app')

@section('title', 'Detail Article')
 

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Article Details</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-12">
          <div class="text-center"><img class="img img-fluid" src="{{ asset('assets/article') }}/{{ $article->gambar }}" alt=""></div>
          <h3>{{ $article->nama }}</h3>
            <p>{{ $article->isi }}</p>
          </div>
        </div>

      </div>
    </section>

  </main>

@endsection
