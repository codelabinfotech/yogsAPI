@extends('layouts.app')
@section('content')
<section class="mt-5">
    <div class="container">
        <h1>Edit Days</h1>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('category.update', $day->id) }}">
                            @csrf
                            <div class="form-group">
                                <label>Days :-</label>
                                <input type="text" class="form-control" name="days" placeholder="Enter days" value="{{ $day->days }}">
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