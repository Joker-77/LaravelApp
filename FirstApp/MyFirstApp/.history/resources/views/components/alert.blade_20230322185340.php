@php
$classes = ($active ?? false) ? 'bg-success' : 'bg-danger';
@endphp

<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>' col-4 text-center'
        ]) }}>
        {{ $message }}
    </div>
</div>