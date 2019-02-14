@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>change password</h1>

        @if($errors->count())
            <div class="alert alert-danger">
            @foreach($errors->all() as $errors)
                {{$errors}}<br>
            @endforeach
            </div>
        @endif

        <form action="{{route('profile.update_password')}}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="">New password</label>
                <input type="password" name="new_password" placeholder="New password" class="form-control"/>
            </div>
            <div class="formgroup">
                <label for="">new password again </label>
                <input type="password" name="new_password_confirmation" placeholder="New password again " class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection