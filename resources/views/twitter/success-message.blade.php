@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show position-relative" role="alert"
        style="border: none; padding: 0; background: none;">

        {{-- select image base on success message type --}}
        @if (session('success') === 'Thought deleted!')
            <img src="/image/delete_banner.png" alt="Delete Banner" class="img-fluid" style="width: 100%; height: auto;">
        @else
            <img src="/image/success_banner.png" alt="Success Banner" class="img-fluid" style="width: 100%; height: auto;">
        @endif

        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white">
            {{ session('success') }}
        </div>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
