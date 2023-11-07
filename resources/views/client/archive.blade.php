@extends('layouts.client.app')

@section('title', 'Archive')
 

@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Archive</h2>
        <p>Dalam archive tahunan kami, Anda akan menemukan jejak perubahan yang telah kami ciptakan dalam mendukung Tujuan Pembangunan Berkelanjutan (SDGs).</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Archive Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">
        @foreach ($archives as $archive)
          <div class="col-md-4">
            <div class="box">
              <ul>
                <li>{{$archive->tahun}}</li>
                <li>Sustainability Report</li>
              </ul>
              <div class="btn-wrap">
                <a href="{{$archive->link}}" class="btn-buy">DOWNLOAD</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        
      </div>
    </section><!-- End Pricing Section -->

  </main>

@endsection
