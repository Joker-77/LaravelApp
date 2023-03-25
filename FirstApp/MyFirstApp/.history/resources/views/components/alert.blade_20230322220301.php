@php
$classes = (session()->has('data') ?? false) ? ((session()->get('data')['success'] ?? false)
? 'bg-success' : 'bg-danger') : ''
@endphp

@if (session()->has('data'))
<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        <h5>{{ session()->get('data')['message']}}</h5>
    </div>
</div>
@endif

@if (isset($msg) && $msg != "")
<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        <h5>{{ $msg }}</h5>
    </div>
</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif