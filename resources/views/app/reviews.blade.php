@extends('layouts.layouts')


@section('title')
    Reviews
@endsection


@section('body')
   @auth
       <div class="container-xl">
           <div class="row">
               <div class="col-4">
                   <form action="{{route('reviews_submit')}}" method="post">
                       @csrf
                       <div>{{auth()->user()->name}}</div>
                       <div class="form-group">
                           <label for="message" class="text-danger h4 py-3">Message</label>
                           <textarea name="message" placeholder="Enter your message" id="message " class="form-control" rows="5"></textarea>
                       </div>
                       <div class="pt-3">
                           <button class="btn btn-outline-danger btn-lg" type="submit">Submit</button>
                       </div>
                   </form>
               </div>
               @include('app.messages')
           </div>
       </div>
   @endauth
@endsection