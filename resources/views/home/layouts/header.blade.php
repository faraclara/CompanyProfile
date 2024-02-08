<style>
    .menu-active{
      color: black!important;
      font-weight:bold;
    }
</style>

<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow">

  <div class="container">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/')? 'menu-active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('about')? 'menu-active' : ''}}" href="/about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('services')? 'menu-active' : ''}}" href="/services">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog*')? 'menu-active' : ''}}" href="/blog">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('contact')? 'menu-active' : ''}}" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          @auth
          <a href="/admin/dashboard" class="btn btn-primary"><i class="fas fa-user"></i> Dashboard</a>
          @else
          <a href="/login" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</a>
          @endauth


        </form>
      </div>
    </div>
  </nav>
</header>