@extends('layouts.app')

@section('content')
<form action="/todo/create" class="form">
    @csrf
    <div class="form-group">
        <div class="row col-4">

            <input type="text" name="title" class="form-control" />
            <input type="submit" value="Submit" />
        </div>
    </div>
</form>

@endsection