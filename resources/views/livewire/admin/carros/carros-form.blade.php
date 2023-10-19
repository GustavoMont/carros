<div>
    <h1 class="text-2xl text-amber-500 font-medium">Carros - Formulário</h1>

    <form class="mt-4 flex flex-col space-y-4" wire:submit.prevent="salvar">

        {{-- Placa --}}
        <label>
            <span class="text-gray-700">Placa</span>
            <x-admin.input wire:model="form.placa" type="text" />
            @error('form.placa')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Marca --}}
        <label>
            <span class="text-gray-700">Marca</span>
            <x-admin.input wire:model="form.marca" type="text" />
            @error('form.marca')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Modelo --}}
        <label>
            <span class="text-gray-700">Modelo</span>
            <x-admin.input wire:model="form.modelo" type="text" />
            @error('form.modelo')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Ano --}}
        <label>
            <span class="text-gray-700">Ano</span>
            <x-admin.input wire:model="form.ano" type="number" />
            @error('form.ano')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Cor --}}
        <label>
            <span class="text-gray-700">Cor</span>
            <x-admin.input wire:model="form.cor" type="text" />
            @error('form.cor')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Chassi --}}
        <label>
            <span class="text-gray-700">Chassi</span>
            <x-admin.input wire:model="form.chassi" type="text" />
            @error('form.chassi')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Diária --}}
        <label>
            <span class="text-gray-700">Valor da Diária</span>
            <x-admin.input wire:model="form.diaria" type="number" step="any" min="0" />
            @error('form.diaria')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Descricao --}}
        <label>
            <span class="text-gray-700">Descrição</span>
            <x-admin.textarea wire:model="form.descricao" />
            @error('form.descricao')
                <span class="text-red-500">
                    <small>
                        {{ $message }}
                    </small>
                </span>
            @enderror
        </label>

        {{-- Botao Salvar --}}
        <div class="self-end">
            <x-admin.button-submit />
        </div>

    </form>
</div>
