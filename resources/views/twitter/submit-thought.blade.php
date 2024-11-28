<h4> Express your thoughts 🤔</h4>
<div class="row">

    <form action= "{{ route('thought.create') }}" name="fikir" method="post">
        @csrf
        <div class="mb-3">

            <textarea class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button class="btn btn-dark"> Share </button>
        </div>
    </form>

</div>
