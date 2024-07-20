<x-uknow.layout>
    <div class="flex-center-container">
        <div class="rounded">

            @if ($game == 1)
                @include('includes.FastMath.index')
            @elseif ($game == 2)
                @include('includes.Slowka.index')
            @endif

        </div>
    </div>
</x-uknow.layout>
