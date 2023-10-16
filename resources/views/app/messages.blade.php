@auth
    <div class="col-8 text-center">
        <a class="h3 text-danger text-decoration-none" href="{{route('messages')}}">
            All messages
        </a>
        @foreach($data as $el)
            <div class="row justify-content-center   py-3">
                <div class="border text-danger rounded-4 col-6">
                    <div class="fw-normal h4">
                        <b>@lang('name'):</b> {{auth()->user()->name}}
                    </div>
                    <div class="fw-normal h5">
                        <b>Message:</b> {{$el->message}}
                    </div>
                    <p>
                        {{$el->created_at}}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endauth