@extends('layouts.app')

@section('content')
    <main id="main-form" class="relative bg-bg-secondary min-h-[calc(100dvh-120px)] p-4 flex justify-center items-center gap-4">
        <section class="relative flex flex-col gap-4 bg-bg-primary flex-1 max-h-[calc(100dvh-160px)] max-w-250 rounded-lg p-4 overflow-y-auto [&_h1]:text-2xl [&_h2]:text-xl [&_h1,h2]:font-bold [&_h1]:text-center [&_h2,input,textarea]:py-2 [&_h2]:px-2 [&_input,textarea]:px-4 [&_input,textarea]:bg-bg-tertiary [&_input,textarea]:rounded-lg [&_input,textarea]:w-full [&_input,textarea]:outline-0">
            <form method="POST" action="{{ route('sheets.update', $sheet) }}">
            @csrf
            @method('PUT')
                <a href="{{ url()->previous() }}" class="absolute top-4 left-4 bg-bg-tertiary hover:bg-bg-tertiary-hover cursor-pointer p-2 rounded-lg flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
                    <span>Voltar</span>
                </a>
                <h1 class="mb-8">Edição de Personagem</h1>
                <h2>Tipo</h2>
                <select required name="tipo" class="w-50 p-2 bg-bg-tertiary rounded-lg">
                    <option value="1" {{ old('tipo', $sheet->tipo) == 1 ? 'selected' : '' }}>Jogador</option>
                    <option value="2" {{ old('tipo', $sheet->tipo) == 2 ? 'selected' : '' }}>NPC</option>
                    <option value="3" {{ old('tipo', $sheet->tipo) == 3 ? 'selected' : '' }}>Putrefato</option>
                </select>
                <h2>Nome e Sobrenome</h2>
                <input required name="nome" type="text" placeholder="Nome e Sobrenome"
                    value="{{ old('name', $sheet->nome) }}"
                >
                <h2>Idade</h2>
                <input required name="idade" type="text" placeholder="Idade"
                    value="{{ old('name', $sheet->idade) }}"
                >
                <h2>Aniversário</h2>
                <input required name="aniversario" type="text" placeholder="Aniversário"
                    value="{{ old('name', $sheet->aniversario) }}"
                >
                <h2>Alcunha</h2>
                <input name="alcunha" type="text" placeholder="Alcunha"
                    value="{{ old('name', $sheet->alcunha) }}"
                >
                <h2>Profissão Atual</h2>
                <input required name="profissao_atual" type="text" placeholder="Profissão Atual"
                    value="{{ old('name', $sheet->profissao_atual) }}"
                >
                <h2>Ex-Profissões</h2>
                <input required name="ex_profissoes" type="text" placeholder="Ex-Profissões"
                    value="{{ old('name', $sheet->ex_profissoes) }}"
                >
                <h2>Experiências</h2>
                <input required name="experiencias" type="text" placeholder="Experiências"
                    value="{{ old('name', $sheet->experiencias) }}"
                >
                <h2>Hobbies</h2>
                <input required name="hobbies" type="text" placeholder="Hobbies"
                    value="{{ old('name', $sheet->hobbies) }}"
                >
                <h2>Aparência</h2>
                <input required name="aparencia" type="text" placeholder="Aparência"
                    value="{{ old('name', $sheet->aparencia) }}"
                >
                <h2>Resumo</h2>
                <input required name="resumo" type="text" placeholder="Resumo"
                    value="{{ old('name', $sheet->resumo) }}"
                >
                <h2>História</h2>
                <textarea required name="historia" placeholder="História" class="h-20 text-wrap resize-none">{{ old('name', $sheet->historia) }}</textarea>
                <h2>Habilidade Primária</h2>
                <textarea required name="habilidade_um" placeholder="História" class="h-20 text-wrap resize-none">{{ old('name', $sheet->habilidade_um) }}</textarea>
                <h2>Habilidade Secundária</h2>
                <textarea required name="habilidade_dois" placeholder="História" class="h-20 text-wrap resize-none">{{ old('name', $sheet->habilidade_dois) }}</textarea>
                <hr class="border border-bg-tertiary mt-6 mb-8">
                <section class="flex gap-4 *:flex-1 *:p-2 *:rounded-lg *:cursor-pointer *:flex *:gap-4 *:justify-center">
                    <button type="button" popovertarget="popover-confirm-delete" class="bg-alert hover:bg-alert-hover" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2-icon lucide-trash-2"><path d="M10 11v6"/><path d="M14 11v6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        Excluir
                    </button>
                    <button type="reset" class="bg-attention hover:bg-attention-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-broom-icon lucide-broom"><path d="m13 11 9-9"/><path d="M14.6 12.6c.8.8.9 2.1.2 3L10 22l-8-8 6.4-4.8c.9-.7 2.2-.6 3 .2Z"/><path d="m6.8 10.4 6.8 6.8"/><path d="m5 17 1.4-1.4"/></svg>
                        Formatar
                    </button>
                    <button type="submit" class="bg-bg-tertiary hover:bg-bg-tertiary-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send-icon lucide-send"><path d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z"/><path d="m21.854 2.147-10.94 10.939"/></svg>
                        Enviar
                    </button>
                </section>
            </form>
            </form>
            <form id="popover-confirm-delete" popover method="POST" action="{{ route('sheets.delete', $sheet) }}" class="absolute top-1/2 left-1/2 -translate-1/2 w-120 p-4 flex-col justify-center bg-bg-primary rounded-lg border-2 border-border-primary text-white">
                @csrf
                @method('DELETE')
                <section class="flex-1px-4 py-2 text-lg text-center">
                    <p>Deseja mesmo excluir o Personagem</p>
                    <p class="font-bold">{{ $sheet->nome }}?</p>
                    <p>Essa ação é irreversível</p>
                </section>
                <section class="flex gap-4 *:flex-1 *:p-2 *:rounded-lg *:cursor-pointer *:flex *:gap-4 *:justify-center">
                    <button type="button" popovertarget="popover-confirm-delete" class="bg-bg-tertiary hover:bg-bg-tertiary-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x-icon lucide-circle-x"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                        Cancelar
                    </button>
                    <button type="submit" class="bg-alert hover:bg-alert-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash2-icon lucide-trash-2"><path d="M10 11v6"/><path d="M14 11v6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6"/><path d="M3 6h18"/><path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        Excluir
                    </button>
                </section>
            </form>
        </section>
    </main>
@endsection