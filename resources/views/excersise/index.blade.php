@extends('layouts.app')
@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1>Excercise</h1>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('excercise.create') }}">
                        <button class="btn btn-primary"> Add Excercise</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <livewire:excersice-table/>
        </div>
    </section>
@endsection