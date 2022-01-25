<header class="d-flex align-items-center">
  <div class="container">
    <div class="menu d-flex justify-content-between align-items-center">
      <div class="left-menu d-flex">
        <div class="logo mx-4">
          <img src="https://ciaologo.com/timthumb.php?src=1412&query=1&h=500&w=800&wm=1&zc=2&b=10" alt="">
        </div>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'destinazioni') ? 'active' : '' }}" href="#">Destinazioni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'offerte') ? 'active' : '' }}" href="#">Offerte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'servizi') ? 'active' : '' }}" href="#">Servizi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (Route::currentRouteName() === 'contatti') ? 'active' : '' }}" href="#">Contatti</a>
          </li>
        </ul>
      </div>
    <div class="right-menu d-flex align-items-center">
      <i class="fas fa-search "></i>
      <div class="user mx-2">
        <i class="fas fa-user "></i>
      </div>
      <h6 class="my-0">Salvatore <i class="fas fa-sort-down"></i></h6>
    </div>
    </div>
  </div>
</header>
