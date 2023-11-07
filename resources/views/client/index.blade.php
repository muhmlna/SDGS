@extends('layouts.client.app')

@section('title', 'Beranda')
 

@section('content')

<section id="carousel" class="d-flex justify-content-center align-items-center">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="w-100" src="./assets/img/carousel-1.JPG" alt="Image">
          </div>
          <div class="carousel-item">
              <img class="w-100" src="./assets/img/carousel-2.JPG" alt="Image">
              </div>
          </div>
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
              <div id="gallery-1" class="gallery galleryid-143 gallery-columns-6 gallery-size-thumbnail"><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-01" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-01.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-02" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-02.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-03" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-03.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-04" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-04.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-05" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-05.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-06" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-06.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-07" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-07.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-08" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-08.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-09" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-09.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-10" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-10.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-11" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-11.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-12" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-12.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-13" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-13.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-14" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-14.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-15" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-15.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-16" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-16.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="E-WEB-Goal-17" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/E-WEB-Goal-17.png 1500w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure><figure class="gallery-item">
      <div class="gallery-icon landscape">
      <a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="8b641a7" data-elementor-lightbox-title="1200px-Sustainable_Development_Goals_logo.svg" href="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1.png"><img width="150" height="150" src="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1-150x150.png 150w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1-300x300.png 300w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1-1024x1024.png 1024w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1-768x768.png 768w, http://sdgs.itera.ac.id/wp-content/uploads/2021/07/1200px-Sustainable_Development_Goals_logo.svg_-1.png 1200w" sizes="(max-width: 150px) 100vw, 150px"></a>
      </div></figure>
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
                <a href="article.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
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
    </section><!-- End Popular Courses Section -->

  </main>

@endsection
