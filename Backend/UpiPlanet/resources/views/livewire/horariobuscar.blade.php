<div>
    <form wire:submit.prevent="buscar">
        <div class="form-group">
            <input type="text" class="form-control" wire:model="texto" placeholder="Ingrese el texto a buscar..."
                required>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
            wire:loading.attr="disabled">
            <span wire:loading.remove>Buscar y Capturar</span>
            <span wire:loading>
                <span class="spinner-border spinner-border-sm" role="status"></span>
                Procesando...
            </span>
        </button>
    </form>

    @error('error')
        <div class="mt-3 alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="flex flex-col mt-4 space-y-4 overflow-auto">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ESTRUCTURA</th>
                    <th>PROGRAMA ACADEMICO</th>
                    <th>PLAN ESTD</th>
                    <th>TURNO</th>
                    <th>SECUENCIA</th>
                    <th>UNIDAD DE APRENDIZAJE</th>
                    <th>ACADEMIA</th>
                    <th>DOCENTE</th>
                    <th>LUNES</th>
                    <th>SALÓN LUNES</th>
                    <th>MARTES</th>
                    <th>SALÓN MARTES</th>
                    <th>MIÉRCOLES</th>
                    <th>SALÓN MIÉRCOLES</th>
                    <th>JUEVES</th>
                    <th>SALÓN JUEVES</th>
                    <th>VIERNES</th>
                    <th>SALÓN VIERNES</th>
                    <th>EDIFICIO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($capturas as $captura)
                    <tr>
                        <td colspan="19">
                            <img src="{{ Storage::disk('public')->url($captura) }}" class="img-fluid" alt="Captura">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button wire:click="downloadPdf"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
            Descargar PDF
        </button>
    </div>

    <div class="mt-3">
        <span class="text-xl font-semibold text-gray-700">Resultados:</span>
        <div class="flex mt-4 space-x-4 overflow-auto">
            @foreach ($capturas as $captura)
                <div class="flex-shrink-0">
                    <img src="{{ Storage::disk('public')->url($captura) }}" class="img-fluid" alt="Captura">
                </div>
            @endforeach


        </div>
    </div>

    <div class="mt-4">

    </div>
    @if (empty($capturas) && !$isLoading)
        <div class="mt-3 alert alert-warning">No se encontraron resultados.</div>
    @endif
</div>
