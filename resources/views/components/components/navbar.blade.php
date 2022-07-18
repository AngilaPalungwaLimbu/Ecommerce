<div class="container my-2">
    <div class="row row  ">
        <div class="col-md-3  ps-0">
            <a href="/" >
                <img src="https://wosiwosi.co.uk/wp-content/uploads/2017/11/WosiWosi-Header-Logo.jpg" width="65%"
                    alt=""></a>
        </div>
        <div class="col-md-4 my-4   offset-2 ">
            <form action="" class=" ">
                <div class="input-group">
                    <input type="text" class="form-control form-control-md" placeholder="Search Here">
                    <button type="submit" class="input-group-text "><i
                            class="fa-solid fa-magnifying-glass text-success"></i></button>
                </div>
            </form>
        </div>
        <div class="col-md-3 my-4 d-flex justify-content-end">
            @guest

                <a class="  fs-5  text-success ms-4" style="text-decoration: none !important; " href="/login"><i
                        class="fa-solid fa-user me-2"></i>Login</a>
            @else
                @if ($cartCount > 0)
                    <a class="fs-5" href="/cart">
                        <i class="fa badge text-secondary fs-5 p-0" value={{ $cartCount }}>&#xf07a;</i>
                    </a>
                @else
                    <a class=" fs-5" href="/cart">
                        <i class="fa-solid fa-cart-shopping fs-5 text-secondary"></i>
                    </a>
                @endif

                <a class=" fs-5 me-0" href="/user">
                    <i class="fa-solid fa-user mx-4  text-secondary"></i>
                </a>

                <a class="fs-5 w-100% text-secondary" href="{{ route('logout') }}"
                    style="text-decoration: none !important; "
                    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg pcolor p-1">
    <div class="container">
        {{-- <a class="navbar-brand fs-2 fw-bold text-white" href="/">Product Categories</a> --}}
        <a class="navbar-brand dropdown-toggle fs-5 fw-bold text-white" href="#" id="navbarDropdownMenuLink"
            role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
{{--
            @foreach ($category as $item)

            <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
            @endforeach --}}
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNav">
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">Delivery Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white  fw-bold me-3" aria-current="page" href="#">Shop</a>
                </li>



            </ul>
        </div>
    </div>
</nav>
