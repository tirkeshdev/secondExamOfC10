<div class="container-xl">
    <header class="bg-dark d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{route('index')}}" class="text-decoration-none h4 link-danger">
            <span class="h4 text-danger pe-2"> TGbookstore <i class="bi bi-book h4 text-danger"></i></span>
        </a>
        <a href="{{route('book.index')}}" class="px-3 d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis nav-link">
            <span class="h5 text-danger  fw-normal{{request()->routeIs('book.index') ? ' text-dark bg-danger p-1 rounded-4' : ''}}"> Search <i class="bi bi-search h5 text-danger {{request()->routeIs('book.index') ? 'text-dark' : ''}}"></i></span>
        </a>

        <ul class="nav nav-pills">
            @auth
                <li class="nav-item pt-2 px-2">
                    <a href="{{route('register')}}" class="text-decoration-none link-warning">Cart()</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-danger dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle"></i> {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end"><li>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                <i class="bi-box-arrow-right"></i> Logout
                            </a>
                    </ul>
                    <form id="logout" action="{{ route('logout') }}" method="post" class="d-none">
                        @csrf
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link link-warning" href="{{ route('login') }}">
                        <i class="bi-box-arrow-in-right"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-warning" href="{{ route('register') }}">
                        <i class="bi-person-add"></i> Register
                    </a>
                </li>
            @endauth
        </ul>
    </header>
</div>