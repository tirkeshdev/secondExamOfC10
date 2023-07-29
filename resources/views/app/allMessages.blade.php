@extends('layouts.layouts')

@section('title')
    All messages
@endsection

@section('body')
    @auth
        @foreach($data as $el)
            <div class="row justify-content-center py-3">
                <div class="text-danger border rounded-4 col-8">
                    <div class="h4 fw-lighter">
                        UserName : {{auth()->user()->username}}
                    </div>
                    <div class="py-1 h4 fw-lighter">
                        Email: {{auth()->user()->email}}
                    </div>
                    <div class="h5 fw-light pb-2">
                        Message: {{$el->message}}
                    </div>
                    <p>
                        {{$el->created_at}}
                    </p>
                </div>
            </div>
        @endforeach
    @endauth
@endsection