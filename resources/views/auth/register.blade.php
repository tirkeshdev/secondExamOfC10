@extends('layouts/layouts')

@section('body')

    <main class=" text-danger w-100 m-auto" style="max-width: 330px;padding: 1rem">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="text-center">
                <i class="bi bi-person-add h1 border rounded-pill py-2 px-3"></i>
                <div class="h3 mb-3 fw-normal pt-3">@lang('app.register')</div>
            </div>

            <div class="form-floating pb-3">
                <input type="text" class="form-control" id="name" placeholder="name" name="name" required>
                <label for="name"class="text-black">@lang('app.name')</label>
            </div>

            <div class="form-floating pb-3">
                <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                <label for="username"class="text-black">@lang('app.username')</label>
            </div>
            <div class="form-floating pb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
                <label for="email"class="text-black">@lang('app.email')</label>
            </div>
            <div class="form-floating pb-3">
                <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
                <label for="Password" class="text-black">@lang('app.password')</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">@lang('app.register')</button>
        </form>
    </main>
@endsection
