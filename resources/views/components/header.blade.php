<header class="flex items-center justify-between h-15 px-4 bg-highlight-primary">
    <ul class="flex items-center text-black text-2xl font-bold h-full">
        <img src="/imgs/RottenWorld.png" class="h-12">
    </ul>
    <ul class="flex items-center *:flex *:items-center text-black h-full *:h-full">
        <li>
            <ul class="flex items-center justify-center *:items-center *:justify-center *:px-4 h-full *:h-full  *:hover:bg-highlight-transparent-hover">
                <button class="flex" id="start-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"/></svg>
                </button>
                <button class="hidden" id="pause-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="14" y="3" width="5" height="18" rx="1"/><rect x="5" y="3" width="5" height="18" rx="1"/></svg>
                </button>
                <button class="hidden" id="resume-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z"/></svg>
                </button>
            </ul>
        </li>
        <li>
            <ul class="flex items-center justify-center *:flex *:items-center *:justify-center gap-2 px-2 font-bold min-w-50 border-b-2 border-b-highlight-transparent">
                <span class="flex-1" id="hours">00</span>
                <span class="min-w-5">h</span>
                <span class="flex-1" id="minutes">00</span>
                <span class="min-w-5">m</span>
                <span class="flex-1" id="seconds">00</span>
                <span class="min-w-5">s</span>
            </ul>
        </li>
        <li>
            <ul class="flex items-center justify-center *:flex *:items-center *:justify-center *:px-4 h-full *:h-full *:hover:bg-highlight-transparent-hover">
                <button class="flex" id="reset-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                </button>
            </ul>
        </li>
    </ul>
</header>
<nav class="flex items-center h-15 bg-bg-primary list-none *:flex-1 *:h-full">
    <li class="nav-link {{ request()->routeIs('home') ? 'bg-bg-primary-hover' : '' }} flex items-center justify-center *:h-full *:w-full *:flex *:items-center *:justify-center *:gap-2 hover:bg-bg-primary-hover">
        <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-airplay-icon lucide-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><path d="m12 15 5 6H7Z"/></svg>
            <span>Sessão</span>
        </a>
    </li>
    <li class="nav-link {{ request()->routeIs('sheets*') ? 'bg-bg-primary-hover' : '' }} flex items-center justify-center *:h-full *:w-full *:flex *:items-center *:justify-center *:gap-2 hover:bg-bg-primary-hover">
        <a href="/sheets">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scroll-text-icon lucide-scroll-text"><path d="M15 12h-5"/><path d="M15 8h-5"/><path d="M19 17V5a2 2 0 0 0-2-2H4"/><path d="M8 21h12a2 2 0 0 0 2-2v-1a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1v1a2 2 0 1 1-4 0V5a2 2 0 1 0-4 0v2a1 1 0 0 0 1 1h3"/></svg>
            <span>Fichas</span>
        </a>
    </li>
    <li class="nav-link {{ request()->routeIs('rules') ? 'bg-bg-primary-hover' : '' }} flex items-center justify-center *:h-full *:w-full *:flex *:items-center *:justify-center *:gap-2 hover:bg-bg-primary-hover">
        <a href="/rules">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale-icon lucide-scale"><path d="M12 3v18"/><path d="m19 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M3 7h1a17 17 0 0 0 8-2 17 17 0 0 0 8 2h1"/><path d="m5 8 3 8a5 5 0 0 1-6 0zV7"/><path d="M7 21h10"/></svg>
            <span>Regras</span>
        </a>
    </li>
</nav>