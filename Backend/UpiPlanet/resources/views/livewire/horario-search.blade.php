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
            <button class="btn btn-danger" onclick="descargarPDF('{{ $pdfUrl }}')">
                <i class="fas fa-file-pdf"></i> Descargar PDF
            </button>
        </div>
    @endif

    <div class="mt-3 table-responsive">
        <table class="table table-striped table-bordered">
            <tbody>
                @foreach ($capturas as $captura)
                    <tr>
                        <td>
                            <img src="{{ Storage::disk('public')->url($captura) }}" class="img-fluid" alt="Captura">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function descargarPDF(url) {
            fetch(url)
                .then(response => response.blob())
                .then(blob => {
                    const link = document.createElement('a');
                    link.href = URL.createObjectURL(blob);
                    link.download = 'horario.pdf';
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                });
        }
    </script>
</div>
