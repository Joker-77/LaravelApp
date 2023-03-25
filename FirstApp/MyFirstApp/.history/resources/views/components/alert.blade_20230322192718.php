@php
$classes = (session()->get('data') ?? false) ? 
@endphp

@if (session()->has('data'))
<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        <h5>{{ session()->get('message') }}</h5>
        {{ dd(session()->get('data')['message']) }}

    </div>
</div>
@else
@endif