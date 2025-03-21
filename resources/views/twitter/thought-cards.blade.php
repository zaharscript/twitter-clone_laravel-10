<div class="card">
    @if ($editing ?? false)
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">

                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/9.x/adventurer/svg?seed=Brian" alt="Brian Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#"> Brian
                            </a></h5>
                    </div>

                </div>
                <div style="display: flex; gap: 10px; align-items: center;">

                    <a href="{{ route('twitter.index') }}"><i class="fa-solid fa-square-caret-left fa-bounce fa-lg"
                            style="color: #76ac9c;"></i></a>

                </div>
            </div>
        </div>
    @else
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">

                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="https://api.dicebear.com/9.x/adventurer/svg?seed=Brian" alt="Brian Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#"> Brian
                    </div>

                </div>

                <div style="display: flex; gap: 10px; align-items: center;">
                    {{-- edit thought --}}

                    @csrf
                    <a href="{{ route('thoughts.edit', $thought->id) }}">
                        <img src="/image/edit.png" style="width:20px;height:20px" alt="Edit thought"
                            title="Edit Thought">
                    </a>


                    @if ($readOne ?? false)
                        {{-- back button --}}
                        <a href="{{ route('twitter.index') }}"><i class="fa-solid fa-square-caret-left fa-bounce fa-lg"
                                style="color: #63E6BE;" title="Back to main page"></i></a>
                    @else
                        {{-- view single thought button --}}
                        <form>
                            @csrf
                            <a href="{{ route('thoughts.show', $thought->id) }}"><img src="/image/read.png"
                                    style="width:20px;height:20px" alt="Read thought" title="read single thought"></a>
                        </form>
                    @endif

                    {{-- delete button --}}
                    <form method="POST" action="{{ route('thoughts.destroy', $thought->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" title="Delate thought"
                            onclick="return confirm('really?? 😲')">X</button>

                    </form>
                </div>
            </div>
        </div>
    @endif
    <div class="card-body">
        @if ($editing ?? false)
            <form action= "{{ route('thoughts.update', $thought->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea class="form-control @error('idea') is-invalid @enderror" name="content" id="content" rows="2">{{ $thought->content }}</textarea>
                    @error('content')
                        <span class="invalid-feedback">
                            {{-- {{ $message }} --}}
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
            @include('twitter.comment-form')
            <hr>
        </div>
    </div>
</div>
