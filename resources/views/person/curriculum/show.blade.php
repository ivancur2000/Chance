<x-person-layout>
    <div class="p-6">
        <div class="p-3">
            <x-jet-label for="description" value="Descripcion" />
            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required
                autofocus value="{{ $curriculum->description }}" disabled />
        </div>
        <div class="p-3">
            <x-jet-label for="salary_aspiration" value="Aspiracion Salarial" />
            <x-jet-input id="salary_aspiration" class="block mt-1 w-full" type="number" name="salary_aspiration" :value="old('salary_aspiration')" required
                autofocus value="{{ $curriculum->salary_aspiration }}" disabled />
        </div>
        <div class="mx-2 mt-1">
            <x-jet-label for="modality" value="Modalidad de trabajo" />
            <x-jet-input id="modality" class="block mt-1 w-full" type="text" name="modality" :value="old('modality')" required
                autofocus value="{{ $curriculum->modality }}" disabled />
        </div>
        <div class="mx-2 mt-1">
            <x-jet-label for="type_job" value="Tipo de trabajo buscado" />
            <x-jet-input id="type_job" class="block mt-1 w-full" type="text" name="type_job" :value="old('type_job')" required
                autofocus value="{{ $curriculum->type_job }}" disabled />
        </div>
        <div class="mx-2 mt-1">
            <x-jet-label for="profession_id" value="Profesion" />
            <x-jet-input id="profession_id" class="block mt-1 w-full" type="text" name="profession_id" :value="old('profession_id')" required
                autofocus value="{{ $curriculum->profession->name }}" disabled />
        </div>
        <div class="flex flex-col">
            @livewire('curriculum.academic-training', ['curriculum' => $curriculum], key($curriculum->id))
            @livewire('curriculum.job-experience', ['curriculum' => $curriculum], key($curriculum->id))
        </div>
        <hr class="my-2">
        <div class="flex flex-row justify-end flex-wrap mt-5">
            <button class="uppercase ml-4 text-white bg-indigo-600 p-3 rounded shadow hover:bg-indigo-700" type="submit">
                Editar
            </button>
        </div>
    </div>
</x-person-layout>
