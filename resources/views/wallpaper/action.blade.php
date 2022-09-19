<div class="row">
    <a href="{{ route('wallpaper.edit', $row->id) }}">
        <p>Update</p>
    </a>
    &nbsp;&nbsp;
    <a href="{{ route('wallpaper.delete', $row->id) }}">
        <p>Delete</p>
    </a>
</div>
