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

    {{-- content end --}}
@endsection
