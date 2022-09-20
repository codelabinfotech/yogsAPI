@extends('layouts.app')
@section('content')
<section class="mt-5">
    <div class="container">
        <h1>Edit Yoga</h1>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('yoga.update', $yoga->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title :-</label>
                                <input type="text" class="form-control" value="{{ $yoga->title }}" name="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label>Image :-</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Description :-</label>
                                <textarea name="description" class="form-control">
                                    {{ $yoga->description }}
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection