<div class="row">

    <form action= "{{ route('thought.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea class="form-control @error('idea') is-invalid @enderror" name="idea" id="idea" rows="2"
                placeholder="🤔 Type your thoughts here..."></textarea>
            @error('idea')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div class="">
            <button type="submit" class="btn btn-success"> Share </button>
        </div>
    </form>

</div>
