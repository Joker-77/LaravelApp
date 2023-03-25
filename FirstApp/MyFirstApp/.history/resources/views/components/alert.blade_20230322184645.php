@php
$classes = ($active ?? false) ? 'bg-success col-4 text-center' : 'bg-danger col-4'
@endphp

<div>
    {{ $message }}
</div>