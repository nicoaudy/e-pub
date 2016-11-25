<header>
    <nav class="navbar navbar-dark primary-color-dark">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>
        <div class="container">
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <a class="navbar-brand" href="/">E-Pub Wanna Be</a>
                <ul class="nav navbar-nav pull-right">
                    @if(!Auth::user())
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/auth/register">Signup</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/order">My Order <span class="fa fa-briefcase"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">Cart <span class="fa fa-shopping-cart"></span></a>
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