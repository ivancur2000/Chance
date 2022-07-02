<x-person-layout>
    <form class="p-6" action="{{ route('curriculum.store') }}" method="POST" novalidate>
        @csrf
        <div class="p-3">
            <x-jet-label for="description" value="Descripcion" />
            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required
                autofocus  />
            @error('description')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="p-3">
            <x-jet-label for="salary_aspiration" value="Aspiracion Salarial" />
            <x-jet-input id="salary_aspiration" class="block mt-1 w-full" type="number" name="salary_aspiration" :value="old('salary_aspiration')" required
                autofocus  />
            @error('salary_aspiration')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mx-2 mt-1">
            <x-jet-label for="modality" value="Modalidad de trabajo" />
            <select class="form-input" name="modality" id="modality">
                <option value=""></option>
                <option value="Presencial">Presencial</option>
                <option value="Remoto">Remoto</option>
            </select>
        @error('modality')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
        </div>
        <div class="mx-2 mt-1">
            <x-jet-label for="type_job" value="Tipo de trabajo buscado" />
            <select class="form-input" name="type_job" id="type_job">
                <option value=""></option>
                <option value="Tiempo completo">Tiempo completo</option>
                <option value="Medio tiempo">Medio tiempo</option>
            </select>
            @error('type_job')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mx-2 mt-1">
            <x-jet-label for="profession_id" value="Profesion" />
            <select class="form-input" name="profession_id" id="profession_id">
                <option value=""></option>
                @foreach($professions as $profession)
                    <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                @endforeach
            </select>
            @error('profession_id')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <hr>
        <div class="flex flex-row justify-end flex-wrap mt-5">
            <button class="uppercase ml-4 text-white bg-indigo-600 p-3 rounded shadow hover:bg-indigo-700" type="submit">
                Registrar
            </button>
        </div>
    </form>
</x-person-layout>
