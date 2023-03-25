@php
$classes = ($active ?? false) ? 'bg-success col-4 text-center' : 'bg-danger col-4 text-center';
@endphp

<div {{ $attributes->class([$classes]) }}>
    {{ $message }}
</div>