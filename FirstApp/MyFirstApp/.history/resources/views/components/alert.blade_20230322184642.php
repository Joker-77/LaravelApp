@php
$classes = ($active ?? false) ? 'bg-success col-4 text-center' : 'bg-danger'
@endphp

<div>
    {{ $message }}
</div>