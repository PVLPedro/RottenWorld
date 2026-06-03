<div class="h-8/10 max-w-120 w-full p-1 sm:p-4 rounded-lg bg-bg-primary">
    <div class="flex gap-2 *:flex-1 *:flex *:justify-center *:py-4 *:first:bg-bg-secondary *:last:bg-bg-secondary-variant *:rounded-t-sm">
        <a href="/login" class="relative text-light-gray before:absolute before:bottom-0 before:h-0.5 before:w-full before:bg-dark-gray">Entrar</a>
        <span class="relative font-medium before:absolute before:bottom-0 before:h-0.5 before:w-full before:bg-highlight-primary">Cadastrar-se</span>
    </div>

    <h1 class="my-4 text-lg text-center">Crie uma conta para jogar Rotten World!</h1>

    <form method="POST" action="{{ route('insert-account') }}"
        class="flex flex-col gap-8 *:[div]:flex *:[div]:flex-col **:[input]:p-2 **:[input]:bg-bg-tertiary
        @if(session('status'))
            *:[div]:*:[input]:border-2 *:[div]:*:[input]:border-alert
            *:[div]:*:[span]:border-2 *:[div]:*:[span]:border-alert
        @endif">
        @csrf

        <div>
            <label for="role" class="text-md">Nome de Usuário</label>
            <input
                type="text"
                name="name"
                id="name"
                placeholder="Insira um Nome de Usuário"
                value="{{ old('name') }}"
                autocomplete="off"
                class="rounded-sm {{ $errors->has('name') ? 'border-2 border-alert' : 'border border-dark-gray focus:border-gray' }} "/>
            @error('name')
                <label for="name" class="text-sm font-medium text-alert">
                    {{ $message }}
                </label>
            @enderror
        </div>

        <div>
            <label for="role" class="text-md">Selecione o tipo de usuário</label>
            <select name="role" id="role" class="p-2 rounded-sm bg-bg-tertiary">
                <option value="jogador">Jogador</option>
                <option value="mestre">Mestre</option>
            </select>
            <input type="hidden" name="session" value="00000">
        </div>

        <div class="relative">
            <label for="role" class="text-md">Senha</label>
            <span class="flex rounded-sm">
                <input
                    type="text"
                    name="password"
                    id="password"
                    placeholder="Insira uma Senha"
                    value="{{ old('password') }}"
                    autocomplete="off"
                    class="w-full rounded-l-sm {{ $errors->has('password') ? 'border-2 border-alert' : 'border border-dark-gray focus:border-gray' }} " />
                <label for="role" id="show-password" class="w-10 flex justify-center items-center p-2 rounded-r-sm bg-bg-secondary hover:bg-bg-secondary-hover *:last:hidden *:first:block {{ $errors->has('password') ? 'border-2 border-l-0 border-alert' : 'border border-l-0 border-dark-gray focus:border-gray' }}">
                    <x-lucide-eye class="h-full w-8" />
                    <x-lucide-eye-off class="h-full w-8" />
                </label>
            </span>
            @error('password')
                <label for="name" class="text-sm font-medium text-alert">
                    {{ $message }}
                </label>
            @enderror
            <span class="block mt-1 p-1 rounded-sm bg-bg-secondary text-sm text-light-gray text-center">
                A Senha deve conter entre 6 e 20 dígitos
            </span>
        </div>

        <button type="submit" class="p-2 rounded-sm text-darker-gray font-bold bg-highlight-primary">Criar Conta</button>
    </form>

    <p class="mt-4 text-center">
        Já possui uma conta?
        <a href="/login" class="whitespace-nowrap border-b-2 border-highlight-primary">
            Entrar
            <x-lucide-external-link class="inline size-4" />
        </a>
    </p>
</div>

@push('scripts')

<script>

const passwordInput = document.getElementById('password');
const togglePasswordBtn = document.getElementById('show-password');

let isVisible = false;
let realPassword = '';
let maskTimeout;

togglePasswordBtn.addEventListener('click', togglePasswordVisibility);
passwordInput.addEventListener('input', handlePasswordInput);

function handlePasswordInput(event) {

    if (isVisible) {
        realPassword = event.target.value;
        return;
    }

    const inputValue = event.target.value;

    if (inputValue.length > realPassword.length) {
        realPassword += inputValue.slice(-1);
    } else {
        realPassword = realPassword.slice(0, inputValue.length);
    }

    renderTemporaryMask();

    clearTimeout(maskTimeout);

    maskTimeout = setTimeout(() => {

        if (!isVisible) {
            renderFullMask();
        }

    }, 1000);
}

function renderTemporaryMask() {

    if (!realPassword.length) {
        passwordInput.value = '';
        return;
    }

    passwordInput.value =
        '•'.repeat(realPassword.length - 1) +
        realPassword.slice(-1);
}

function renderFullMask() {
    passwordInput.value = '•'.repeat(realPassword.length);
}

function togglePasswordVisibility() {

    isVisible = !isVisible;

    clearTimeout(maskTimeout);

    if (isVisible) {

        passwordInput.type = 'text';
        passwordInput.value = realPassword;

        togglePasswordBtn.classList.remove('*:last:hidden', '*:first:block');
        togglePasswordBtn.classList.add('*:first:hidden', '*:last:block');

        return;
    }

    passwordInput.type = 'text';
    renderFullMask();

    togglePasswordBtn.classList.remove('*:first:hidden', '*:last:block');
    togglePasswordBtn.classList.add('*:last:hidden', '*:first:block');
}

const loginForm = document.querySelector('form');

loginForm.addEventListener('submit', () => {
    passwordInput.value = realPassword;
});

</script>

@endpush