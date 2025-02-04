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

        try {
            // Comando para ejecutar el script en el entorno virtual
            $command = sprintf(
                'source %s/venv/bin/activate && python3 %s/GeneradorDePDF.py "%s" "%s" "%s"',
                base_path('app/Http/Controllers/PythonControllers'), // Ruta del entorno virtual
                base_path('app/Http/Controllers/PythonControllers'), // Ruta donde está el script Python
                $this->texto,
                Storage::disk('public')->path('pdfs'),
                Storage::disk('public')->path('capturas')
            );

            // Ejecutar el comando usando shell_exec
            $result = shell_exec($command);

            // Verificar si la ejecución fue exitosa
            if ($result === null) {
                throw new \Exception("Error procesando el PDF.");
            }

            // Imprimir el resultado del script para depuración
            dd($result);

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
