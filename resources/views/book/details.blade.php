@extends('layouts/layouts')

@section('title')
    Details
@endsection

@section('body')
    <div class="container-xl">
        <div class="row text-danger">
            <div class="col-12 col-md-5">
                <img class="card-img-top " src="{{$book->image}}" alt="image" style="width:100%">
            </div>
            <div class="col-12 col-md-6 text-center text-md-start">
                <h4 class="h1 fw-normal pb-1">{{$book->name_tm}}</h4>
                <div class=" h3 fw-normal pb-2">{{$book->price}} TMT</div>
                <div class="h5 fw-normal ">@lang('app.barcode'): {{$book->barcode}}</div>
                <div class="h5 fw-normal ">@lang('app.author'): {{$book->author->name}} {{$book->author->surname}}</div>
                <div class="h5 fw-normal">@lang('app.publisher'): {{$book->publisher->name}}</div>
                <div class="h5 fw-normal">@lang('app.category'): {{$book->category->getName()}}</div>

                <div class="h5 fw-normal ">@lang('app.language'):
                    @foreach($book->languages as $language)
                        {{$language->getname()}}{{ $loop->last ? '':','}}
                    @endforeach
                </div>

                <div class="h5 fw-normal">@lang('app.bookcover'): {{$book->bookcover ? 'Paper back' : 'Hard'}}</div>
                <div class="h5 fw-normal">@lang('app.pages'): {{$book->page}}</div>
                <div class="h5 fw-normal pb-2">@lang('app.publish year'): {{$book->year}}</div>
                <div class="h5 fw-normal pb-2">@lang('app.description'): {{$book->description_tm}}</div>
                @auth
                    <div class="h2 pb-2 text-success">{{$book->sold ? 'Sold' : ''}}</div>
                @endauth

                @auth
                    <a href="{{route('details', $book->id)}}" class="btn btn-primary">@lang('app.addtocart')</a>
                @else
                    <a href="{{route('register')}}" class="btn btn-primary">@lang('app.addtocart')</a>
                @endauth

                {{--@auth--}}
                {{--<a href="{{route('reviews')}}" class="btn btn-warning"> Review </a>--}}
                {{--@else--}}
                {{--<a href="{{route('register')}}" class="btn btn-warning"> Review </a>--}}
                {{--@endauth--}}
            </div>
        </div>
    </div>
@endsection