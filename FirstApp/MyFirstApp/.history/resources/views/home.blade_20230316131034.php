@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                {{-- <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
            </div>
            @endif
            {{ __('You are logged in!') }}
        </div> --}}
        <div class="card-body">
            @section('alert-message')
            @show
            <form action="/upload" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" />
                <input type="submit" value="upload" />
            </form>
        </div>
    </div>
</div>
@endsection


@section('message')
<h1>message</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@elseif (session()->has('error'))
<div class="alert alert-danger">
    {{ session()->get('error') }}
</div>
@endif
@endsection
{{--
@section('test1')
@parent !!show conent in the layout in addition to this test 1
<p>Hello</p>
@endsection --}}

{{-- {{ $hello }}{{ $name }}. --}}
