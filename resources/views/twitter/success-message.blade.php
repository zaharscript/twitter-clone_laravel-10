@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show position-relative" role="alert"
        style="border: none; padding: 0; background: none;">
        <img src="/image/banner.png" alt="Background Image" class="img-fluid" style="width: 100%; height: auto;">
        <div class="overlay-text position-absolute top-50 start-50 translate-middle text-center text-white">
            {{ session('success') }}
        </div>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
