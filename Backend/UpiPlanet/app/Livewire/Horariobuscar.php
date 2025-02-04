<?php

namespace App\Livewire;

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Horariobuscar extends Component
{
    public $texto;
    public $capturas = [];
    public $pdfUrl;
    public $isLoading = false;
    public $error;

    protected $rules = [
        'texto' => 'required|min:3|max:50'
    ];

    public function buscar()
    {
        $this->validate();
        $this->resetResults();
        $this->isLoading = true;

        // Directorios de los PDFs y capturas
        $pdfDir = Storage::disk('public')->path('pdfs');
        $capturasDir = Storage::disk('public')->path('capturas');

        // Verificar y crear los directorios si no existen
        if (!is_dir($pdfDir)) {
            mkdir($pdfDir, 0775, true);
        }
        if (!is_dir($capturasDir)) {
            mkdir($capturasDir, 0775, true);
        }

        try {
            // Comando para ejecutar el script en el entorno virtual
            $command = sprintf(
                'bash -c "source %s/venv/bin/activate && python3 %s/GeneradorDePDF.py "%s" "%s" "%s"" 2>&1',
                base_path('app/Http/Controllers/PythonControllers'),
                base_path('app/Http/Controllers/PythonControllers'),
                $this->texto,
                Storage::disk('public')->path('pdfs'),
                Storage::disk('public')->path('capturas')
            );

            // Ejecutar el comando
            $result = shell_exec($command);

            // Verificar si la ejecución fue exitosa
            if ($result === null) {
                throw new \Exception("Error procesando el PDF.");
            }

            // Analizar el resultado
            $resultParts = explode('|', $result);
            if (count($resultParts) < 2) {
                throw new \Exception("Error procesando el PDF: $result");
            }

            // Obtener resultados
            $this->pdfUrl = Storage::disk('public')->url("pdfs/{$this->texto}.pdf");
            $this->capturas = Storage::disk('public')->files("capturas/{$this->texto}");
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }

        $this->isLoading = false;
    }

    private function resetResults()
    {
        $this->capturas = [];
        $this->pdfUrl = null;
        $this->error = null;
    }

    public function render()
    {
        return view('livewire.horariobuscar');
    }

    public function downloadPdf()
    {
        if ($this->pdfUrl) {
            return response()->download(Storage::disk('public')->path("pdfs/{$this->texto}.pdf"));
        }
        return response()->json(['error' => 'PDF no encontrado'], 404);
    }
}
