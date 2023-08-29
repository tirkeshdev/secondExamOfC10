<div class="container-xl">
    <header class="bg-dark d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{route('index')}}" class="text-decoration-none h4 link-danger">
            <span class="h4 text-danger pe-2"> TGbookstore <i class="bi bi-book h4 text-danger"></i></span>
        </a>

        <div  class="px-3 d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis nav-link">
            <form action="{{ route('book.index') }}" class="px-2" role="search">
                <input class="form-control" style="font-family: bootstrap-icons" type="search" name="q" value="{{ isset($q) ? $q : old('q') }}" placeholder="&#xF52A @lang('app.search')" aria-label="Search">
            </form>
        </div>

        <ul class="nav nav-pills">
            <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true">@lang('app.category')</a>
            <ul class="dropdown-menu bg-dark">
                @foreach($categories as $category)
                    <li class="dropdown-item ps-0">
                        <a class="nav-link link-danger" href="{{ route('book.index', ['categories' => [$category->id]] ) }}">{{$category->getname()}}</a>
                    </li>
                @endforeach
            </ul>

            <a class="nav-link dropdown-toggle link-info" href="#" data-bs-toggle="dropdown" aria-expanded="false">@lang('app.languages')</a>
            <ul class="dropdown-menu">
                <li class="dropdown-item">
                    <a class="nav-link link-success" href="{{ route('locale', 'tm') }}">Türkmen</a>
                </li>
                <li class="dropdown-item">
                    <a class="nav-link link-danger" href="{{ route('locale', 'en') }}">English</a>
                </li>
                <li class="dropdown-item">
                    <a class="nav-link link-primary" href="{{ route('locale', 'ru') }}">Русский</a>
                </li>
            </ul>



            @auth
                <li class="nav-item pt-2 px-2">
                    <a href="{{route('reviews')}}" class="text-decoration-none link-warning {{request()->routeIs('reviews') ? 'link-dark text-decoration-none bg-warning py-1 px-2 rounded-4': ''}}">@lang('app.review')</a>
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