<div>
    <form wire:submit.prevent="buscar">
        <div class="form-group">
            <input type="text" class="form-control" wire:model="texto" placeholder="Ingrese el texto a buscar..."
                required>
        </div>

        <button type="submit" class="btn btn-primary btn-block" wire:loading.attr="disabled">
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

    @if ($pdfUrl)
        <div class="mt-3">
            <button class="btn btn-danger" wire:click="downloadPdf">
                <i class="fas fa-file-pdf"></i> Descargar PDF
            </button>
        </div>
    @elseif ($capturas)
        <div class="mt-3">
            <span class="text-xl font-semibold text-gray-700">Resultados:</span>
            <div class="flex mt-4 space-x-4 overflow-auto">
                @foreach ($capturas as $captura)
                    <div class="flex-shrink-0">
                        <img src="{{ Storage::disk('public')->url($captura) }}"
                            class="object-contain h-48 border-2 border-gray-300 rounded-lg w-72" alt="Captura">
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if (empty($capturas) && !$isLoading)
        <div class="mt-3 alert alert-warning">No se encontraron resultados.</div>
    @endif
</div>
