<div class="row">
    <a href="{{ route('excercise.edit', $row->id) }}">
        <p>Update</p>
    </a>
    &nbsp;&nbsp;
    <a href="{{ route('excercise.delete', $row->id) }}">
        <p>Delete</p>
    </a>
</div>
