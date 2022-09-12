@extends('layouts.app')
@section('content')
<section class="mt-5">
    <div class="container">
        <h1>Add Excercise</h1>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('excercise.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title :-</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label>Image :-</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Days :-</label>
                                <select class="form-control" name="day">
                                    @foreach ($days as $day)
                                        <option value="{{ $day->id }}">{{ $day->days }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Description :-</label>
                                <textarea name="description" class="form-control"></textarea>
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