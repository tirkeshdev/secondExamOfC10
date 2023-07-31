<div class="container-xl">
    <header class="bg-dark d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{route('index')}}" class="text-decoration-none h4 link-danger">
            <span class="h4 text-danger pe-2"> TGbookstore <i class="bi bi-book h4 text-danger"></i></span>
        </a>
        <a href="{{route('book.index')}}" class="px-3 d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis nav-link">
            <span class="h5 text-danger  fw-normal{{request()->routeIs('book.index') ? ' text-dark bg-danger py-1 px-2 rounded-4' : ''}}"> @lang('app.search') <i class="bi bi-search h5 text-danger {{request()->routeIs('book.index') ? 'text-dark' : ''}}"></i></span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale', 'tm') }}">Türkmen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale', 'en') }}">English</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('locale', 'ru') }}">Russian</a>
            </li>
            @auth
                <li class="nav-item pt-2 px-2">
                    <a href="{{route('reviews')}}" class="text-decoration-none link-warning {{request()->routeIs('reviews') ? 'link-dark text-decoration-none bg-warning py-1 px-2 rounded-4': ''}}">Review</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle"></i> {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end"><li>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                <i class="bi-box-arrow-right"></i> @lang('app.logout')
                            </a>
                    </ul>
                    <form id="logout" action="{{ route('logout') }}" method="post" class="d-none">
                        @csrf
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link link-warning {{request()->routeIs('login') ? 'nav-link link-dark bg-warning py-1 px-2' : ''}}" href="{{ route('login') }}">
                        <i class="bi-box-arrow-in-right"></i> @lang('app.login')
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-warning {{request()->routeIs('register') ? 'nav-link link-dark bg-warning py-1 px-2' : ''}}" href="{{ route('register') }}">
                        <i class="bi-person-add"></i> @lang('app.register')
                    </a>
                </li>
            @endauth
        </ul>
    </header>
</div>