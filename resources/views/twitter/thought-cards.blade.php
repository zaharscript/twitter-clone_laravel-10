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

            <div style="display: flex; gap: 10px; align-items: center;">
                {{-- edit thought --}}

                @csrf
                <a href="{{ route('thoughts.edit', $thought->id) }}">edit</a>

                {{-- view single thought button --}}
                <form>
                    @csrf
                    <a href="{{ route('thoughts.show', $thought->id) }}"><img src="/image/read.png"
                            style="width:20px;height:20px" alt="read thought"></a>
                </form>

                {{-- delete button --}}
                <form method="POST" action="{{ route('thoughts.destroy', $thought->id) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('really?? 😲')">X</button>

                </form>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if ($editing ?? false)
            <form action= "{{ route('thoughts.update', $thought->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea class="form-control @error('idea') is-invalid @enderror" name="content" id="content" rows="2">{{ $thought->content }}</textarea>
                    @error('content')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror

                </div>
                <div class="">
                    <button type="submit" class="btn btn-success"> Update </button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{ $thought->content }}
            </p>
        @endif
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

        </div>
    </div>
</div>
