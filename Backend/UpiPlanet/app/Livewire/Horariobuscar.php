<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Process;
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
        dd("holaaa");
        $this->validate();
        $this->resetResults();
        $this->isLoading = true;

        try {
            // Ejecutar script Python
            $result = Process::run(
                sprintf(
                    'python3 %s "%s" "%s" "%s"',
                    base_path('resources/python/pdf_processor.py'),
                    $this->texto,
                    Storage::disk('public')->path('pdfs'),
                    Storage::disk('public')->path('capturas')
                )
            );
            dd($result);
            if (!$result->successful()) {
                throw new \Exception("Error procesando el PDF: " . $result->errorOutput());
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
        dd("holaaa");
        $this->capturas = [];
        $this->pdfUrl = null;
        $this->error = null;
    }
    public function render()
    {

        return view('livewire.horariobuscar');
    }
}
