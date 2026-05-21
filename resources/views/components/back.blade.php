<a href="{{ url()->previous() }}" class="z-1 sticky top-2 lg:top-4 float-left self-start bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg flex gap-2 border-2 border-gray">
    <x-lucide-arrow-left />
    <span> {{ $slot }} </span>
</a>