@php
$classes = (session()->get('data') ?? false) ? (session()->get('data'))
@endphp

@if (session()->has('data'))
<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        <h5>{{ session()->get('message') }}</h5>
    </div>
</div>
@else
@endif