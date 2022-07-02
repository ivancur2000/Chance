<x-person-layout>
    <div class="p-6">
        <label class="text-xl">Datos Perfil</label>
        <div class="p-3">
            <x-jet-label for="life_motto" value="Lema de vida" />
            <x-jet-input id="life_motto" class="block mt-1 w-full" type="text" name="life_motto" :value="old('life_motto')" required
                autofocus disabled value="{{ $person->life_motto }}" />
        </div>
        <div class="p-3">
            <x-jet-label for="description" value="Descripcion" />
            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required
                autofocus disabled value="{{ $person->description }}" />
        </div>
        <label class="text-xl">Datos Personales</label>
        <div class="p-3 flex flex-row flex-wrap">
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="phone" value="Numero" />
                <div class="mt-1">
                    <x-tel-input
                        wire:model="phone"
                        id="phone"
                        name="phone"
                        class="form-input"
                        value="{{ $person->phone }}"
                        disabled
                    />
                    <input wire:model="phone_country" type="hidden" id="phone_country"  name="phone_country">
                </div>
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="date_birth" value="Fecha de Nacimiento" />
                <x-jet-input id="date_birth" class="block mt-1 w-full" type="date" name="date_birth" :value="old('date_birth')" required
                    autofocus disabled value="{{ $person->date_birth }}" />
            </div>
            <div class="flex-initial w-full sm:w-64">
                <x-jet-label for="civil_status" value="Estado civil" />
                <x-jet-input id="civil_status" class="block mt-1 w-full" type="text" name="civil_status" :value="old('civil_status')" required
                    autofocus disabled value="{{ $person->civil_status }}" />
            </div>
        </div>
        <label class="text-xl">Redes Sociales</label>
        <div class="p-3 flex flex-row flex-wrap">
            <div class="flex-initial sm:mr-4">
                <x-jet-label for="facebook" value="Facebook" />
                <a target="_blank" class="mr-2 text-indigo-700 text-sm hover:underline hover:text-indigo-800" href="{{ $person->facebook }}">{{ $person->facebook }}</a>
            </div>
            <div class="flex-initial sm:mr-4">
                <x-jet-label for="linkedin" value="Linkedln" />
                <a target="_blank" class="mr-2 text-indigo-700 text-sm hover:underline hover:text-indigo-800" href="{{ $person->linkedin }}">{{ $person->linkedin }}</a>
            </div>
            <div class="flex-initial sm:mr-4">
                <x-jet-label for="twitter" value="Twitter" />
                <a target="_blank" class="mr-2 text-indigo-700 text-sm hover:underline hover:text-indigo-800" href="{{ $person->twitter }}">{{ $person->twitter }}</a>
            </div>
            <div class="flex-initial sm:mr-4">
                <x-jet-label for="TikTok" value="Tik Tok" />
                <a class="mr-2 text-indigo-700 text-sm hover:underline hover:text-indigo-800" href="{{ $person->titok }}">{{ $person->tiktok }}</a>
            </div>
            <div class="flex-initial sm:mr-4">
                <x-jet-label for="web-site" value="Sitio web" />
                <a target="_blank" class="mr-2 text-indigo-700 text-sm hover:underline hover:text-indigo-800" href="{{ $person->web_site }}">{{ $person->web_site }}</a>
            </div>
        </div>
        <label class="text-xl">Ubicacion</label>
        <div class="p-3 flex flex-row flex-wrap">
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="country" value="Pais" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required
                    autofocus disabled value="{{ $user->country }}" />
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="city" value="Ciudad" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required
                    autofocus disabled value="{{ $user->city }}" />
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="zone" value="Zona" />
                <x-jet-input id="zone" class="block mt-1 w-full" type="text" name="zone" :value="old('zone')" required
                    autofocus disabled value="{{ $person->zone }}" />
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="street" value="Calle" />
                <x-jet-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required
                    autofocus disabled value="{{ $person->street }}" />
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="number" value="Numero" />
                <x-jet-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required
                    autofocus disabled value="{{ $person->number }}" />
            </div>
        </div>
        <hr>
        <div class="flex flex-row justify-end flex-wrap mt-5">
            <a class="btn btn-primary" href="{{ route('person.edit', $person) }}">
                Editar
            </a>
            <form id="form-delete" action="{{ route('person.destroy', $person) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar perfil</button>
            </form>
        </div>
    </div>
</x-person-layout>
