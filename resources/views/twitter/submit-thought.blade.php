<h4> Express your thoughts 🤔</h4>
<div class="row">

    <form action= "{{ route('thought.create') }}" method="post">

        <div class="mb-3">
            @csrf
            <textarea class="form-control" name="think" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button type="submit" class="btn btn-dark"> Share </button>
        </div>
    </form>

</div>
