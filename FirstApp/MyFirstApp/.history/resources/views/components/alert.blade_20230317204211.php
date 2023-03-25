{{-- add default attributes then if we want to override them we'll pass it as
parameters in where the component is called
--}}
<div {{ $attributes->class(['text-success bg-primary'])
    ->merge([
        'style' => 'border: 1px solid black;',
        'joe' => 'hello'
        ]) }}>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    {{-- {{ $slot }} --}}
    {{-- in order to use public method from component class you need to treat it as variable --}}
    <h5 class="bg-{{ $type }}">{{ $showMessage($message) }}</h5>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @elseif (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
    @endif
</div>
