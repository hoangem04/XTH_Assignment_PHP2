<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="index.html">
                <img class="img-fluid" width="50px" src="{{ asset('assets/uploads/logo.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('') }}"> Trang Chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ asset('products') }}">
                            Sản phẩm <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ asset('products/small/1') }}">Túi cỡ nhỏ</a>
                            <a class="dropdown-item" href="{{ asset('products/medium/2') }}">Túi cỡ trung</a>
                            <a class="dropdown-item" href="{{ asset('products/big/3') }}">Túi cỡ lớn</a>
                            <a class="dropdown-item" href="{{ asset('products/wallet/4') }}">Ví</a>
                            <a class="dropdown-item" href="{{ asset('products/backpack/5') }}">Balo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('products/contact') }}">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('products/about') }}">Giới thiệu</a>
                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Tìm kiếm ...">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
                <div class="d-flex align-items-center ml-3">
                    <a href="" class="mr-3"><img src="{{ asset('assets/uploads/cart.png') }}" width="30px"
                            alt=""></a>

                </div>
                <div class="col-1 mt-2">
                    @if (isset($_SESSION['user']))
                        @if ($_SESSION['user']['role'] == 1)
                            <a href="{{ url('admin/users') }}">{{ $_SESSION['user']['name'] }}</a>
                            <a href="{{ url('logout') }}">Đăng xuất</a>
                        @else
                            <a href="{{ url('') }}">{{ $_SESSION['user']['name'] }}</a>
                            <a href="{{ url('logout') }}">Đăng xuất</a>
                        @endif
                    @else
                        <a href="{{ url('login') }}">
                            <img src="{{ asset('assets/uploads/iconpeople.png') }}" width="30px" alt="">
                        </a>
                    @endif
                </div>
                </a>
            </div>
    </div>
    </nav>
    </div>
</header>
