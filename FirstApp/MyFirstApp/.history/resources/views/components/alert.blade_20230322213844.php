@php
$classes = (session()->has('data') ?? false) ? ((session()->get('data')['success'] ?? false)
? 'bg-success' : 'bg-danger') : ''
@endphp

@if (session()->has('success-msg'))
<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        <h5>{{ session()->get('success-msg')['message']}}</h5>
    </div>
</div>
@else
@endif