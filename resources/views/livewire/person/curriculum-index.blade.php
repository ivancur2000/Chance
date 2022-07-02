<x-table-responsive title="Curriculums">
    <div class="p-2 mx-auto flex justify-center">
        <a href="{{ route('curriculum.create') }}" class="btn btn-primary mt-2">Agregar</a>
    </div>
    <div class="overflow-x-auto">
        @if($curriculums->count())
        <table class="table-auto w-full">
            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                <tr>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Profesion</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Aspiracion Salarial</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-left">Modalidad</div>
                    </th>
                    <th class="p-2 whitespace-nowrap">
                        <div class="font-semibold text-center">Tipo de trabajo</div>
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                @foreach ($curriculums as $curriculum)
                <tr>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left">{{ $curriculum->profession->name }}</div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left font-medium text-green-500">${{ $curriculum->salary_aspiration }}</div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-left">{{ $curriculum->modality }}</div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="text-lg text-center">{{ $curriculum->type_job }}</div>
                    </td>
                    <td class="flex">
                        <a href="{{ route('curriculum.show', $curriculum) }}" class="btn btn-success ">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('curriculum.destroy', $curriculum) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger ">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-5 py-4">
            {{ $curriculums->links() }}
        </div>

        @else
        <div class="text-center text-gray-700 font-bold">No se encontraron resultados</div>
        @endif
    </div>
</x-table-responsive>
