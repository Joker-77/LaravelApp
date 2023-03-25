@extends('layouts.app')

@section('content')
<x-alert :message='$message ?? ""' />
{{ $data['message'] }}
@endsection