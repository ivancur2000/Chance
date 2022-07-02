<div>
    @if($workExperiences->count())
    <x-table-responsive title="Formacion academica">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Cargo</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Empresa</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Periodo</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @foreach ($workExperiences as $workExperience)
                    <tr>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ $workExperience->rol }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{ $workExperience->company }}</div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left">{{
                                date('d-M-y',strtotime($academi->start_date)) }} -
                                @if($academi->end_date)
                                    {{ date('d-M-y', strtotime($academi->end_date)) }}
                                @else
                                    Presente
                                @endif
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap flex">
                            <a href="{{ route('academi-training.edit', $academi) }}" class="btn btn-success ">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('academi-training.destroy', $academi) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-table-responsive>
    @else
        <h1 class="text-2xl font-bold">Formacion academica</h1>
        <span>No se encontraron datos</span>
    @endif
    <div class="flex justify-center">
        <a class="btn btn-primary my-2" href="">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
</div>
