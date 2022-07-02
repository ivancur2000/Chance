<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil Profesional
            @livewire('navbar-person')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{ $slot }}
                @if(session('create') == 'ok')
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Elemento creado exitosamente',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                @endif
                @if(session('edit') == 'ok')
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Elemento actualizado exitosamente',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                @endif
                <script>
                    let form = document.getElementById('form-delete');
                    form.addEventListener('submit',(e)=>{
                        e.preventDefault();

                        Swal.fire({
                            title: '¿Estas seguro de eliminar elemento?',
                            text: "¡Esta accion no se puede revertir!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Si, borrar',
                            denyButtonText: 'No, cancelar',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            } else if (result.dismiss === Swal.DismissReason.cancel) {
                                Swal.fire(
                                    'Cancelado',
                                    'Tus datos estan a salvo de momento',
                                    'error'
                                )
                            }
                        })
                    },false);
                </script>
            </div>
        </div>
    </div>
</x-app-layout>
