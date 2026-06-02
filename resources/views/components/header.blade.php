<header class="flex items-center justify-between h-15 px-4 bg-highlight-primary">
    <ul class="flex items-center text-black text-2xl font-bold h-full">
        <img src="/image/RottenWorldGreen.png" class="h-6 sm:h-12">
    </ul>
    <button popovertarget="account-component" class="flex gap-2 p-2 rounded-lg bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer">
        <x-lucide-user-round />
        <span> {{ auth()->user()->name }} </span>
    </button>
</header>
<nav class="flex items-center h-15 bg-bg-primary list-none *:flex-1 *:h-full">
    <li class="nav-link {{ request()->routeIs('inicio') ? 'bg-bg-primary-hover' : '' }} flex items-center justify-center *:h-full *:w-full *:flex *:items-center *:justify-center *:gap-2 hover:bg-bg-primary-hover">
        <a href="/inicio">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-airplay-icon lucide-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><path d="m12 15 5 6H7Z"/></svg>
            <span>Sessão</span>
        </a>
    </li>
    <li class="nav-link {{ request()->routeIs('fichas*') ? 'bg-bg-primary-hover' : '' }} flex items-center justify-center *:h-full *:w-full *:flex *:items-center *:justify-center *:gap-2 hover:bg-bg-primary-hover">
        <a href="/fichas">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text-icon lucide-scroll-text"><path d="M15 12h-5"/><path d="M15 8h-5"/><path d="M19 17V5a2 2 0 0 0-2-2H4"/><path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3"/></svg>
            <span>Ficha</span>
        </a>
    </li>
    <li class="nav-link {{ request()->routeIs('regras') ? 'bg-bg-primary-hover' : '' }} flex items-center justify-center *:h-full *:w-full *:flex *:items-center *:justify-center *:gap-2 hover:bg-bg-primary-hover">
        <a href="/regras">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale-icon lucide-scale"><path d="M12 3v18"/><path d="m19 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M3 7h1a17 17 0 0 0 8-2 17 17 0 0 0 8 2h1"/><path d="m5 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M7 21h10"/></svg>
            <span>Regras</span>
        </a>
    </li>
</nav>

@include('components.header.account')