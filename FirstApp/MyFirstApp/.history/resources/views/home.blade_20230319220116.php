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
                    {{-- @include('layouts.message') --}}
                    <x-alert :message="$message" type="border" :active='false' style="border: 2px solid black"
                        message="Hii" class="text-danger" joe="hey joe">
                        <h4>Here's a response from component</h4>
                    </x-alert>
                    <x-form.input />
                    <x-form.input-button />
                    {{--
                    <x-link /> inline component --}}
                    {{--
                    <x-button :message="$message" /> anonymous component --}}
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" />
                        <input type="submit" value="upload" />
                    </form>
                    @foreach ($users as $user )
                    <h3>{{ $user->name }}</h3>
                    <h3>{{ $user->address->country ?? '' }}</h3>
                    @endforeach
                </div>
            </div>
        </div>
        @endsection
        {{--
        @section('test1')
        @parent !!show conent in the layout in addition to this test 1
        <p>Hello</p>
        @endsection --}}

        {{-- {{ $hello }}{{ $name }}. --}}