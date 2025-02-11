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
    <div class="mt-4 overflow-auto">

        @php
            $capturas = collect($capturas);
        @endphp
        @if ($capturas->count() > 0)
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ESTRUCTURA</th>
                        <th class="px-4 py-2">PROGRAMA ACADEMICO</th>
                        <th class="px-4 py-2">PLAN ESTD</th>
                        <th class="px-4 py-2">TURNO</th>
                        <th class="px-4 py-2">SECUENCIA</th>
                        <th class="px-4 py-2">UNIDAD DE APRENDIZAJE</th>
                        <th class="px-4 py-2">ACADEMIA</th>
                        <th class="px-4 py-2">DOCENTE</th>
                        <th class="px-4 py-2">LUNES</th>
                        <th class="px-4 py-2">SALÓN LUNES</th>
                        <th class="px-4 py-2">MARTES</th>
                        <th class="px-4 py-2">SALÓN MARTES</th>
                        <th class="px-4 py-2">MIÉRCOLES</th>
                        <th class="px-4 py-2">SALÓN MIÉRCOLES</th>
                        <th class="px-4 py-2">JUEVES</th>
                        <th class="px-4 py-2">SALÓN JUEVES</th>
                        <th class="px-4 py-2">VIERNES</th>
                        <th class="px-4 py-2">SALÓN VIERNES</th>
                        <th class="px-4 py-2">EDIFICIO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($capturas as $captura)
                        <tr>
                            <td class="px-4 py-2">{{ $captura->estructura }}</td>
                            <td class="px-4 py-2">{{ $captura->programa_academico }}</td>
                            <td class="px-4 py-2">{{ $captura->plan_estd }}</td>
                            <td class="px-4 py-2">{{ $captura->turno }}</td>
                            <td class="px-4 py-2">{{ $captura->secuencia }}</td>
                            <td class="px-4 py-2">{{ $captura->unidad_aprendizaje }}</td>
                            <td class="px-4 py-2">{{ $captura->academia }}</td>
                            <td class="px-4 py-2">{{ $captura->docente }}</td>
                            <td class="px-4 py-2">{{ $captura->lunes }}</td>
                            <td class="px-4 py-2">{{ $captura->salon_lunes }}</td>
                            <td class="px-4 py-2">{{ $captura->martes }}</td>
                            <td class="px-4 py-2">{{ $captura->salon_martes }}</td>
                            <td class="px-4 py-2">{{ $captura->miercoles }}</td>
                            <td class="px-4 py-2">{{ $captura->salon_miercoles }}</td>
                            <td class="px-4 py-2">{{ $captura->jueves }}</td>
                            <td class="px-4 py-2">{{ $captura->salon_jueves }}</td>
                            <td class="px-4 py-2">{{ $captura->viernes }}</td>
                            <td class="px-4 py-2">{{ $captura->salon_viernes }}</td>
                            <td class="px-4 py-2">{{ $captura->edificio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button wire:click="downloadPdf"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
                Descargar PDF
            </button>
        @else
            <div class="text-center">
                <p class="font-medium text-red-500">BÚSQUEDA NO VÁLIDA. INTENTA CON MAYÚSCULAS Y REVISANDO TU BÚSQUEDA.
                </p>
            </div>
        @endif
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
