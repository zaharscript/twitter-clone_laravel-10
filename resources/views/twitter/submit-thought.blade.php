<h4> Express your thoughts 🤔</h4>
<div class="row">

    <form action= "{{ route('thought.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <textarea class="form-control" name="idea" id="idea" rows="5"></textarea>
        </div>
        <div class="">
            <button type="submit" class="btn btn-success"> Share </button>
        </div>
    </form>

</div>
