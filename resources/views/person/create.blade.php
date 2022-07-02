<x-person-layout>
    <form class="p-6" action="{{ route('person.store') }}" method="POST" novalidate>
        @csrf
        <label class="text-xl">Datos Perfil</label>
        <div class="p-3">
            <x-jet-label for="life_motto" value="Lema de vida" />
            <x-jet-input id="life_motto" class="block mt-1 w-full" type="text" name="life_motto" :value="old('life_motto')" required
                autofocus  />
            @error('life_motto')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="p-3">
            <x-jet-label for="description" value="Descripcion" />
            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required
                autofocus  />
            @error('description')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
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
                    />
                    <input wire:model="phone_country" type="hidden" id="phone_country" name="phone_country">
                </div>
            @error('phone')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="date_birth" value="Fecha de Nacimiento" />
                <x-jet-input id="date_birth" class="block mt-1 w-full" type="date" name="date_birth" :value="old('date_birth')" required
                    autofocus  />
            @error('date_birth')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
            </div>
            <div class="flex-initial w-full sm:w-64">
                <x-jet-label for="civil_status" value="Estado civil" />
                <select class="form-input" name="civil_status" id="civil_status">
                    <option value=""></option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudo">Viudo</option>
                </select>
                @error('civil_status')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <label class="text-xl">Redes Sociales</label>
        <div class="p-3 flex flex-row flex-wrap">
            <div class="flex-initial w-full sm:w-60 sm:mr-4">
                <x-jet-label for="facebook" value="Facebook" />
                <x-jet-input id="facebook" class="block mt-1 w-full" type="text" name="facebook" :value="old('facebook')" required
                    autofocus   />
                @error('facebook')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-60 sm:mr-4">
                <x-jet-label for="linkedin" value="Linkedln" />
                <x-jet-input id="linkedin" class="block mt-1 w-full" type="text" name="linkedin" :value="old('linkedin')" required
                    autofocus   />
                @error('linkedin')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-60 sm:mr-4">
                <x-jet-label for="twitter" value="Twitter" />
                <x-jet-input id="twitter" class="block mt-1 w-full" type="text" name="twitter" :value="old('twitter')" required
                    autofocus  />
                @error('twitter')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-60 sm:mr-4">
                <x-jet-label for="TikTok" value="Tik Tok" />
                <x-jet-input id="tiktok" class="block mt-1 w-full" type="text" name="tiktok" :value="old('tiktok')" required
                    autofocus   />
                @error('tiktok')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-60 sm:mr-4">
                <x-jet-label for="web_site" value="Sitio web" />
                <x-jet-input id="web_site" class="block mt-1 w-full" type="text" name="web_site" :value="old('web_site')" required
                    autofocus   />
                @error('web_site')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <label class="text-xl">Ubicacion</label>
        <div class="p-3 flex flex-row flex-wrap">
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="country" value="Pais" />
                <select class="form-input" name="country" id="country" onchange="getDataApiCountries(getCity)">
                    <option value=""></option>
                </select>
                @error('country')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="city" value="Ciudad" />
                <select class="form-input" name="city" id="city">
                    <option value=""></option>
                </select>
                @error('city')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="zone" value="Zona" />
                <x-jet-input id="zone" class="block mt-1 w-full" type="text" name="zone" :value="old('zone')" required
                    autofocus  />
                @error('zone')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="street" value="Calle" />
                <x-jet-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required
                    autofocus  />
                @error('street')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex-initial w-full sm:w-64 sm:mr-4">
                <x-jet-label for="number" value="Numero" />
                <x-jet-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required
                    autofocus  />
                @error('number')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <hr>
        <div class="flex flex-row justify-end flex-wrap mt-5">
            <button class="uppercase ml-4 text-white bg-indigo-600 p-3 rounded shadow hover:bg-indigo-700" type="submit">
                Registrar
            </button>
        </div>
    </form>
    <script src="{{ asset('js/country.js') }}"></script>
</x-person-layout>
