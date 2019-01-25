@extends('layouts.layout')

@section('posts')

    <div class="container">
    <h1 class="text-center">contact as</h1>
        <form method="post" action="{{ route('contact') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="sait">Sait</label>
                <input type="text" class="form-control" id="sait" name="sait" placeholder="Sait">
            </div>

            <div class="form-group">
                <label for="text">Example textarea</label>
                <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>

    </div>
@endsection