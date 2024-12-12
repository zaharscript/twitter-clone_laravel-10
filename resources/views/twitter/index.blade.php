@extends('layouts.layouts')

@section('content')
    {{-- content --}}
    @include('twitter.success-message')
    {{-- submission form --}}
    @include('twitter.submit-thought')

    <hr>
    @foreach ($thoughts as $thought)
        <div class="mt-3">
            @include('twitter.thought-cards')
        </div>
    @endforeach

    {{-- pagination link --}}
    {{-- <div class="d-flex justify-content-center">
        {{ $thoughts->links() }}
    </div> --}}

    {{-- content end --}}
@endsection
