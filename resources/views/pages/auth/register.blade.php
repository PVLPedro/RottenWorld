@extends('layouts.account')

@section('account')

<header class="flex items-center justify-center h-15 px-4 bg-highlight-primary">
    <ul class="flex items-center text-black text-2xl font-bold h-full">
        <img src="/image/RottenWorldGreen.png" class="h-12">
    </ul>
</header>

<main class="relative bg-bg-secondary h-[calc(100dvh-60px)] p-1 lg:p-4 flex justify-center items-center gap-4 overflow-hidden">
    @include('components.auth.register')
</main>

@endsection