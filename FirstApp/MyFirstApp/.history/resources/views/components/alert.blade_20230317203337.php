<div {{ $attributes->class(['text-success bg-primary'])->merge(['style' => 'border: 1px solid black']) }}>
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
