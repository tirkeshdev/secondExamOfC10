@extends('layouts.layouts')

@section('title')
    TGbookstore
@endsection

@section('body')
    @include('app.carousel')
    @foreach($categoryBooks as $categoryBook)
        <div class="container-xl">
            <div class="display-4 text-danger pt-5">
                <a href="{{ route('book.index', ['categories' => [$categoryBook['category']->id]]) }}" class="link-danger text-decoration-none">
                    {{ $categoryBook['category']->name }}
                </a>
                <span class="text-warning h4 fw-normal">({{$categoryBook['category']->books_count}} @lang('app.books'))</span>
            </div>


            <div class="row align-items-center py-4 justify-content-center">
                @foreach($categoryBook['books'] as $book)
                    <div class="col-md-6 col-xxl-3 col-sm-12 col-lg-4">
                        <a href="{{route('details', $book->id)}}" class="text-decoration-none link-danger">
                            <div class="card bg-dark text-danger border-danger" style="width:20rem;margin:20px 0 24px 0">
                                <img class="img-fluid bg-secondary-subtle" src="{{$book->image}}" alt="image">
                                <div class="card-body">
                                    <h4 class="card-title">{{$book->name_tm}}</h4>
                                    <div class="card-text pb-3">{{$book->price}} TMT</div>
                                    @auth
                                        <a href="{{route('index')}}" class="btn btn-primary">@lang('app.addtocart')</a>
                                    @else
                                        <a href="{{route('register')}}" class="btn btn-primary">@lang('app.addtocart')</a>
                                    @endauth
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection