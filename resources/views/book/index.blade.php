@extends('layouts.layouts')

@section('title')
    Search
@endsection
@section('body')
    <div class="container-xl py-4">
        <div class="row g-4 justify-content-sm-center">
            <div class="col-md-4 col-xl-3">
                @include('app.filter')
            </div>
            <div class="col">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4">
                    @foreach($books as $book)
                        <div class="col">
                            <a href="{{route('details', $book->id)}}" class="text-decoration-none link-danger">
                                <div class="card bg-dark text-danger border-danger" style="width:20rem;margin:20px 0 24px 0">
                                    <img class="img-fluid bg-secondary-subtle" src="{{$book->image}}" alt="image">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$book->name_tm}}</h4>
                                        <div class="card-text pb-3">{{$book->price}} TMT</div>
                                        @auth
                                            <form action=" {{$book->sold ? '/' : '/add_to_cart'}}" method="{{$book->sold ? 'get' : 'post'}}">
                                                @csrf
                                                <input type="hidden" name="book_id" value="{{$book['id']}}">
                                                <button class=" {{$book->sold ? 'btn btn-danger bi bi-check-lg' : 'btn btn-primary'}}">{{$book->sold ? 'Sold' : 'Add to cart'}}</button>
                                            </form>
                                        @else
                                            <a href="{{route('register')}}" class="btn btn-primary">Add to card</a>
                                        @endauth
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{ $books->links() }}
            </div>
        </div>
    </div>
@endsection