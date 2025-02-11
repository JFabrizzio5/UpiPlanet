<div>


    <form wire:submit.prevent="buscar" class="p-4 space-y-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="relative">
            <input type="text" wire:model="texto" placeholder="Ingrese el texto a buscar..."
                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:ring-blue-400"
                required>
        </div>

        <button type="submit"
            class="w-full flex items-center justify-center gap-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800"
            wire:loading.attr="disabled">
            <span wire:loading.remove>Buscar y Capturar</span>
            <span wire:loading class="flex items-center gap-2">
                <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 0116 0H4z"></path>
                </svg>
                Procesando...
            </span>
        </button>
        <!-- Botón para abrir el modal -->
        <button data-modal-target="pdfModal" data-modal-toggle="pdfModal"
            class="w-full flex items-center justify-center gap-2 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
            <span>Ver Calendario IPN</span>
        </button>

        <!-- Modal -->
        <div id="pdfModal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 flex items-center justify-center hidden bg-black bg-opacity-50">
            <div class="relative w-full max-w-4xl bg-white rounded-lg shadow-lg">
                <!-- Encabezado del modal -->
                <div class="flex items-center justify-between p-4 border-b">
                    <h3 class="text-lg font-semibold">Documento PDF</h3>
                    <button type="button" class="text-gray-400 hover:text-gray-600" data-modal-hide="pdfModal">
                        ✕
                    </button>
                </div>
                <!-- Contenido del modal con PDF embebido -->
                <div class="p-4">
                    <iframe src="ruta-del-pdf.pdf" class="w-full h-[500px]"></iframe>
                </div>
                <!-- Footer del modal -->
                <div class="flex justify-end p-4 border-t">
                    <button data-modal-hide="pdfModal"
                        class="px-4 py-2 text-white bg-gray-600 rounded-lg hover:bg-gray-700">Cerrar</button>
                </div>
            </div>
        </div>

        <!-- Script de Flowbite (Asegúrate de incluirlo si no lo tienes) -->

    </form>

    @error('error')
        <div class="p-3 mt-3 text-red-700 bg-red-100 border border-red-400 rounded-lg dark:bg-red-900 dark:text-red-200">
            {{ $message }}</div>
    @enderror

    <div class="mt-6 overflow-x-auto">
        <table
            class="w-full text-gray-800 bg-white border border-gray-300 rounded-lg dark:text-white dark:border-gray-700 dark:bg-gray-800">
            <thead class="bg-gray-200 dark:bg-gray-700">
                <tr class="text-sm font-semibold text-left text-gray-600 dark:text-gray-300">
                    <th class="p-2">ESTRUCTURA</th>
                    <th class="p-2">PROGRAMA ACADEMICO</th>
                    <th class="p-2">PLAN ESTD</th>
                    <th class="p-2">TURNO</th>
                    <th class="p-2">SECUENCIA</th>
                    <th class="p-2">UNIDAD DE APRENDIZAJE</th>
                    <th class="p-2">ACADEMIA</th>
                    <th class="p-2">DOCENTE</th>
                    <th class="p-2">LUNES</th>
                    <th class="p-2">SALÓN LUNES</th>
                    <th class="p-2">MARTES</th>
                    <th class="p-2">SALÓN MARTES</th>
                    <th class="p-2">MIÉRCOLES</th>
                    <th class="p-2">SALÓN MIÉRCOLES</th>
                    <th class="p-2">JUEVES</th>
                    <th class="p-2">SALÓN JUEVES</th>
                    <th class="p-2">VIERNES</th>
                    <th class="p-2">SALÓN VIERNES</th>
                    <th class="p-2">EDIFICIO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($capturas as $captura)
                    <tr class="border-t border-gray-300 dark:border-gray-600">
                        <td colspan="19" class="p-3 text-center">
                            <img src="{{ Storage::disk('public')->url($captura) }}"
                                class="h-auto max-w-full rounded-lg shadow-lg" alt="Captura">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button wire:click="downloadPdf"
        class="mt-4 w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">
        Descargar PDF
    </button>

    @if (empty($capturas) && !$isLoading)
        <div
            class="p-3 mt-3 text-yellow-700 bg-yellow-100 border border-yellow-400 rounded-lg dark:bg-yellow-900 dark:text-yellow-200">
            Sin Resultados.
        </div>
    @endif

</div>
