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
                <div class="h5 fw-normal ">barcode: {{$book->barcode}}</div>
                <div class="h5 fw-normal ">author: {{$book->author->name}} {{$book->author->surname}}</div>
                <div class="h5 fw-normal">publisher: {{$book->publisher->name}}</div>
                <div class="h5 fw-normal">category: {{$book->category->name}}</div>
                <div class="h5 fw-normal">language: {{$book->language ? 'English' : 'Russian'}}</div>
                <div class="h5 fw-normal">bookcover: {{$book->bookcover ? 'Paper back' : 'Hard'}}</div>
                <div class="h5 fw-normal">pages: {{$book->page}}</div>
                <div class="h5 fw-normal pb-2">publish year: {{$book->year}}</div>
                <div class="h5 fw-normal pb-2">Description: {{$book->description_tm}}</div>
                @auth
                    <div class="h2 pb-2 text-success">{{$book->sold ? 'Sold' : ''}}</div>
                @endauth

                @auth
                    <form action="/add_to_cart" method="post">
                        @csrf
                        <input type="hidden" name="book_id" value="{{$book['id']}}">
                        <button class="btn btn-primary">Add to cart</button>
                    </form>
                @else
                    <a href="{{route('register')}}" class="btn btn-primary">Add to card</a>
                @endauth

                @auth
                    <a href="{{route('reviews')}}" class="btn btn-warning"> Review </a>
                @else
                    <a href="{{route('register')}}" class="btn btn-warning"> Review </a>
                @endauth
            </div>
        </div>
    </div>
@endsection