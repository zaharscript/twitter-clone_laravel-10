<h4> Express your thoughts 🤔</h4>
<div class="row">

    <form action= "{{ route('thought.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" @error('idea') is-invalid @enderror name="idea" id="idea"
                placeholder="Type your thoughts here...">{{ old('idea') }}</textarea>
            @error('idea')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>
        <div class="">
            <button type="submit" class="btn btn-success"> Share </button>
        </div>
    </form>

</div>
