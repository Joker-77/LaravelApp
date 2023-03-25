@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/todo/create" class="form">
        @csrf
        <div class="row form-group">
            <div class="form-row col-3 p-0">
                <label class="label">Title:</label>
                <input type="text" name="title" class="form-control" />
            </div>
            <div class="col-1 px-1">
                <input type="submit" value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

@endsection