@php
$classes = ($active ?? false) ? 'bg-success col-4 text-center' : 'bg-danger col-4 text-center';
@endphp

<div class="row">
    <div {{ $attributes->class([$classes]) }}>
        {{ $message }}
    </div>
</div>