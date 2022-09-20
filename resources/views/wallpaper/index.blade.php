@extends('layouts.app')
@section('content')
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Wallpaper</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ route('wallpaper.create') }}">
                    <button class="btn btn-primary"> Add Wallpaper </button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <livewire:wallpaper-table/>
    </div>
</section>
@endsection