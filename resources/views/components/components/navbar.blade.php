
<nav class="navbar navbar-expand-lg pcolor p-1">
    <div class="container">
      <a class="navbar-brand fs-2 fw-bold text-white" href="/">Happy<span class="text-warning">Mart</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li> --}}

          @guest
          <li class="nav-item">
            <a class="nav-link text-white fs-5 " href="/login"><i class="fa-solid fa-user me-2"></i>login</a>
          </li>
            @else
            <li class="nav-item">
                @if ($cartCount>0)
                    <a class="nav-link text-white fs-5" href="/cart">
                        <i class="fa badge" style="font-size:24px"  value={{ $cartCount }}>&#xf07a;</i>
                    </a>
                @else
                <a class="nav-link text-white fs-5" href="/cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                @endif
            </li>
            <li class="nav-item">
                <a class="nav-link text-white fs-5 "><i class="fa-solid fa-user me-2"></i></a>
            </li>
            <a class="dropdown-item text-white fs-5" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
