<div class="row">
    <a href="{{ route('category.edit', $row->id) }}">
        <p>Update</p>
    </a>
    &nbsp;&nbsp;
    <a href="{{ route('category.delete', $row->id) }}">
        <p>Delete</p>
    </a>
</div>
