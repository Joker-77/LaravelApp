@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/todo/create" class="form">
        @csrf
        <div class="row form-group">
            <div class="col-4">
                <input type="text" name="title" class="form-control" />
                <div class="col-2 text-center">
                    <input type="submit" value="submit" class="btn btn-primary">
                </div>
            </div>
            
        </div>
    </form>
</div>

@endsection