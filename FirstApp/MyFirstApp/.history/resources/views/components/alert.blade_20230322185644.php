@php
$classes = ($active ?? false) ? 'bg-success' : 'bg-danger';
@endphp

<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        @if (isset($message))
            
        @else
            
        @endif
    </div>
</div>