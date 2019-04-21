<h1>

    <h1>
        {{$greeting or 'Hello ' }} {{ $name or '' }}
        {{--

        --}}
    </h1>

    @if($itemCount = count($items))
        <p>{{ $itemCount }} 종류의 과일이 있습니다.</p>
    @else
        <p>엥~ 아무것도 없는데요!</p>
    @endif

    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    <ul>
        @forelse($items as $item)
            <li>{{ $item }}</li>
        @empty
            <li>엥~ 아무것도 없는데요!</li>
        @endforelse
    </ul>
</h1>