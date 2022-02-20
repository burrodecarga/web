
    <section>
        <div class="grid grid-cols-2 gap-2">
        @if (!is_null($countries))
            <select name="country" wire:model="seleccionado" class="rounded" required>
                <option value="">Seleccione País</option>
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        @endif
        @if (!is_null($states))
            <select name="state" wire:model="stateselect" class="rounded" required>
                <option value="">Seleccione Estado</option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        @endif
        </div>
    </section>
