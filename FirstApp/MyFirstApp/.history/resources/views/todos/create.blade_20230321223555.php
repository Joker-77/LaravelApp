@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/todo/create" class="form">
        @csrf
        <div class="row form-group">
            <div class="col-3">
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="col-1 ml-n5">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

@endsection