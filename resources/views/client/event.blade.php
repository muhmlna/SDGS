@extends('layouts.client.app')

@section('title', 'Event')
 

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>"Terhubung, Terinspirasi, Terlibat: Event SDGS Center ITERA"</h2>
        <p>Sambut event kami yang menghubungkan, memberi inspirasi, dan mengajak Anda untuk terlibat dalam perjalanan pembangunan berkelanjutan. 
          Temukan pengalaman yang memotivasi dan bertemu dengan para pemimpin perubahan di event kami.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row text-center">
        @foreach ($events as $event)
        <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img ">
                <img src="{{ asset('assets/event') }}/{{ $event->gambar }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ $event->link }}">{{ $event->nama }}</a></h5>
                <p class="fst-italic text-center">{{ $event->tgl_event }}</p>
                <p class="card-text">{{ $event->isi }}</p>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Events Section -->

  </main>

@endsection
