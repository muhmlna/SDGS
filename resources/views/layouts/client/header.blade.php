<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{ route('beranda') }}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{ route('beranda') }}">Home</a></li>
          <li class="dropdown"><a href="#"><span>ABOUT US</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('profile') }}" class="dropdown-item">Profile</a></li>
              <li><a href="{{ route('ourteam') }}" class="dropdown-item">Our Team</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>PUBLICATION</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('article.index') }}" class="dropdown-item">Article</a></li>
              <li><a href="{{ route('journal') }}" class="dropdown-item">Journal</a></li>
              <li><a href="{{ route('galery') }}" class="dropdown-item">Galery</a></li>
            </ul>
          </li>
          <li><a href="{{ route('event') }}">EVENT</a></li>
          <li><a href="{{ route('archive') }}">ARCHIVE</a></li>
          <div>
            <form class="search-form">
              <input type="text" placeholder="Search" />
            </form>
          </div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->