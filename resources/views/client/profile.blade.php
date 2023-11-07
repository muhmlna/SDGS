@extends('layouts.client.app')

@section('title', 'Profile')
 

@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>SDGS Center ITERA adalah pusat inovasi yang didedikasikan untuk menciptakan perubahan positif melalui penelitian, pendidikan, dan pengabdian. 
          Kami berkomitmen untuk mewujudkan Tujuan Pembangunan Berkelanjutan (SDGs) 
          dan memberikan dampak yang berkelanjutan bagi masyarakat dan lingkungan.</p>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/logo.2(1).png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>PROFILE</h3>
            @foreach ($profiles as $profile)
            <p>
                {{$profile->isi}}
            </p>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main>

@endsection
