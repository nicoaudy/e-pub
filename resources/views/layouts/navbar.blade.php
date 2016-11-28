<header>
    <nav class="navbar navbar-dark primary-color-dark">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <a class="navbar-brand" href="/">Ebook</a>
                <ul class="nav navbar-nav pull-right">
                    @if(!Auth::user())
                        <li class="nav-item">
                            <a class="nav-link" href="/login"> Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/auth/register"> Daftar</a>
                        </li>
                    @elseif(Auth::user()->role->name == 'Customer')
                        <li class="nav-item">
                            <a class="nav-link" href="/order">Histori Pembelian <span class="fa fa-briefcase"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Keranjang Belanja <span class="fa fa-shopping-cart"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Keluar {{ Auth::user()->name}}</a>
                        </li>
                    @elseif(Auth::user()->role->name == 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="admin/products">Products <span class="fa fa-briefcase"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout {{ Auth::user()->name}}</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>