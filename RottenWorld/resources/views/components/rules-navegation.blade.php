<section class="flex gap-2">
    @if ($idPrev)
        <x-prev-btn idPrev="{{ $idPrev }}" prev="{{ $prev }}"/>
    {{-- @else
        <x-prev-btn idPrev="introducao" prev="{{ $prev }}"/> --}}
    @endif
    @if ($idNext)
        <x-next-btn idNext="{{ $idNext }}" next="{{ $next }}"/>
    {{-- @else
        <x-next-btn idNext="final" next="{{ $next }}"/> --}}
    @endif
</section>