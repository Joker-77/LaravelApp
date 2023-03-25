@php
$classes = ($active ?? false) ? 'bg-success' : 'bg-danger';
@endphp

<div class="row">
    <div {{ $attributes->class([$classes])
        ->merge([
        'class'=>'card col-4 offset-4 text-center'
        ]) }}>
        @if (isset($message))
           <h5> {{ $message }}</h5>
        @else
        
        @endif
    </div>
</div>