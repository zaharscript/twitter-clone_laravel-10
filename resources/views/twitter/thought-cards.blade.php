<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                <div>
                    <h5 class="card-title mb-0"><a href="#"> Mario
                        </a></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="fs-6 fw-light text-muted">
            {{ $thought->content }}
        </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <div>
                    <a href="#" class="fw-light nav-link fs-6 mx-2"> <span class="fa-solid fa-thumbs-up">
                        </span> {{ $thought->likes }} </a>
                </div>
                <div>
                    <a href="#" class="fw-light nav-link fs-6 mx-2"> <span class="fa-solid fa-thumbs-down">
                        </span>{{ $thought->dislikes }}</a>
                </div>
            </div>

            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $thought->created_at }} </span>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <textarea class="fs-6 form-control" rows="1"></textarea>
            </div>
            <div>
                <button class="btn btn-primary btn-sm"> Post Comment </button>
            </div>

            <hr>
            {{-- <div class="d-flex align-items-start">
                <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
                <div class="w-100">
                    <div class="d-flex justify-content-between">
                        <h6 class="">Luigi
                        </h6>
                        <small class="fs-6 fw-light text-muted"> 3 hour
                            ago</small>
                    </div>
                    <p class="fs-6 mt-3 fw-light">
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                        Evil)
                        by
                        Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                        very
                        popular during the Renaissan
                    </p>

                </div>
            </div> --}}
        </div>
    </div>
</div>
