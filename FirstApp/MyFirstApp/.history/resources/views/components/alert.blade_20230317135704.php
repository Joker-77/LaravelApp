<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    {{-- {{ $slot }} --}}
    <h5>{{ $message }}</h5>
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
