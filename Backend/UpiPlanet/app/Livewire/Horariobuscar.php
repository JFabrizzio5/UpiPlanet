<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

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

        // Imprimir las rutas para depuración
        $pdfDir = Storage::disk('public')->path('pdfs');
        $capturasDir = Storage::disk('public')->path('capturas');

        // Verificar y crear directorios si no existen
        if (!is_dir($pdfDir)) {
            mkdir($pdfDir, 0775, true);  // Crear pdfs
        }
        if (!is_dir($capturasDir)) {
            mkdir($capturasDir, 0775, true);  // Crear capturas
        }

        // Imprimir las rutas y comprobar si existen los archivos
        dd([
            'script_path' => base_path('app/Http/Controllers/PythonControllers/GeneradorDePDF.py'),
            'pdf_directory' => $pdfDir,
            'capturas_directory' => $capturasDir,
            'venv_path' => base_path('app/Http/Controllers/PythonControllers/venv/bin/python3'),
            'exists_script' => file_exists(base_path('app/Http/Controllers/PythonControllers/GeneradorDePDF.py')),
            'exists_pdf' => file_exists($pdfDir . '/horarios_periodo_2025_1.pdf'),
            'exists_capturas' => is_dir($capturasDir)
        ]);

        try {
            // Comando para ejecutar el script en el entorno virtual
            $command = sprintf(
                'source %s/venv/bin/activate && python3 %s/GeneradorDePDF.py "%s" "%s" "%s" 2>&1',
                base_path('app/Http/Controllers/PythonControllers'),
                base_path('app/Http/Controllers/PythonControllers'),
                $this->texto,
                Storage::disk('public')->path('pdfs'),
                Storage::disk('public')->path('capturas')
            );

            // Ejecutar el comando usando shell_exec
            $result = shell_exec($command);

            // Capturar salida
            dd($result);
            // Verificar si la ejecución fue exitosa
            if ($result === null) {
                throw new \Exception("Error procesando el PDF.");
            }

            // Imprimir el resultado del script para depuración


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
}
