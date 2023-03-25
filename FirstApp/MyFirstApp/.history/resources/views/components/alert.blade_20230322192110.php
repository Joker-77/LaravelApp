@php
$classes = ($success ?? false) ? 'bg-success' : 'bg-danger';
@endphp

@if (session()->has('message'))
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