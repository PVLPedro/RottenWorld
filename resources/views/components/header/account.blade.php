<section id="account-component" popover class="relative top-1/2 left-1/2 -translate-1/2 w-dvw max-w-250 min-h-100 px-1 py-4 md:px-4 md:p-4 flex-col items-center gap-10 bg-bg-primary rounded-lg border-2 border-border-primary text-white **:[svg]:size-6">

    @error('*')
        <script>
            const accountPopover = document.getElementById('account-component');
            accountPopover?.showPopover()
        </script>
    @enderror

    <x-close-btn target="account-component"/>
    <section class="flex py-2 gap-1 justify-center items-center">
        <span class="text-lg">Usuário</span>
        <span class="text-lg font-medium"> {{ auth()->user()->name }} </span>
    </section>
    <form method="POST" action="{{ route('profile.update') }}"
        class="flex flex-col gap-8 *:[div]:flex *:[div]:flex-col **:[input]:p-2 **:[input]:bg-bg-tertiary
        @if(session('status'))
            *:[div]:*:[input]:border-2 *:[div]:*:[input]:border-alert
            *:[div]:*:[span]:border-2 *:[div]:*:[span]:border-alert
        @endif">
        @csrf
        @method('PUT')

        <div>
            <label for="role" class="text-md">Nome de Usuário</label>
            <input
                type="text"
                name="name"
                id="name"
                placeholder="Digie seu Nome de Usuário"
                value="{{ auth()->user()->name }}"
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
                <option value="jogador" {{ auth()->user()->role == 'jogador' ? 'selected' : '' }} >Jogador</option>
                <option value="mestre" {{ auth()->user()->role == 'jogador' ? 'mestre' : '' }}>Mestre</option>
            </select>
            <input type="hidden" name="session" value="00000">
        </div>

        <div class="relative">
            <label for="role" class="text-md">Redefinir Senha</label>
            <span class="flex rounded-sm">
                <input
                    type="text"
                    name="password"
                    id="password"
                    autocomplete="off"
                    class="flex-1 rounded-l-sm {{ $errors->has('password') ? 'border-2 border-alert' : 'border border-dark-gray focus:border-gray' }} " />
                <label for="role" id="show-password" class="w-10 flex justify-center items-center p-2 rounded-r-sm bg-bg-secondary hover:bg-bg-secondary-hover *:last:hidden *:first:block {{ $errors->has('password') ? 'border-2 border-l-0 border-alert' : 'border border-l-0 border-dark-gray focus:border-gray' }}">
                    <x-lucide-eye class="h-full w-8" />
                    <x-lucide-eye-off class="h-full w-8" />
                </label>
            </span>
            <label for="role" class="text-md">Confirmar Senha</label>
            <span class="flex rounded-sm">
                <input
                    type="text"
                    name="password_confirmation"
                    id="password_confirmation"
                    autocomplete="off"
                    class="flex-1 rounded-l-sm {{ $errors->has('password') ? 'border-2 border-alert' : 'border border-dark-gray focus:border-gray' }} " />
                <label for="role" id="show-password-confirmation" class="w-10 flex justify-center items-center p-2 rounded-r-sm bg-bg-secondary hover:bg-bg-secondary-hover *:last:hidden *:first:block {{ $errors->has('password') ? 'border-2 border-l-0 border-alert' : 'border border-l-0 border-dark-gray focus:border-gray' }}">
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

        <button type="submit" class="p-2 rounded-sm text-darker-gray font-bold bg-highlight-primary">Confirmar Edição</button>
    </form>
    <form method="POST" action="{{ route('logout') }}" class="">
        @csrf
        <button type="submit" class="p-2 rounded-sm text-darker-gray font-bold bg-alert">Desconectar-se</button>
    </form>
</section>

@push('scripts')

<script>

initializePasswordField('password', 'show-password');
initializePasswordField('password_confirmation', 'show-password-confirmation');

function initializePasswordField(inputId, buttonId) {

    const passwordInput = document.getElementById(inputId);
    const toggleButton = document.getElementById(buttonId);

    let isVisible = false;
    let realPassword = '';
    let maskTimeout;

    toggleButton.addEventListener('click', toggleVisibility);

    passwordInput.addEventListener('input', handleInput);

    function handleInput(event) {

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

    function toggleVisibility() {

        isVisible = !isVisible;

        clearTimeout(maskTimeout);

        if (isVisible) {

            passwordInput.value = realPassword;

            toggleButton.classList.remove(
                '*:last:hidden',
                '*:first:block'
            );

            toggleButton.classList.add(
                '*:first:hidden',
                '*:last:block'
            );

            return;
        }

        renderFullMask();

        toggleButton.classList.remove(
            '*:first:hidden',
            '*:last:block'
        );

        toggleButton.classList.add(
            '*:last:hidden',
            '*:first:block'
        );
    }

    passwordInput.form?.addEventListener('submit', () => {
        passwordInput.value = realPassword;
    });
}

</script>
    
@endpush