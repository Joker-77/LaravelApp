@php
$classes = ($success ?? false) ? 'bg-success' : 'bg-danger';
@endphp

@if (isset($message) && $message !== '')
<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>

    </div>
</div>
@else
@endif