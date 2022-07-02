<?php

namespace App\Http\Livewire\Curriculum;

use App\Models\AcademicTraining as ModelsAcademicTraining;
use App\Models\Curriculum;
use Livewire\Component;

class AcademicTraining extends Component
{

    public $curriculum;

    public function mount(Curriculum $curriculum){
        $this->curriculum = $curriculum;
    }

    public function render()
    {
        $academiTraining = $this->curriculum->academiTranings;
        return view('livewire.curriculum.academic-training', compact('academiTraining'));
    }
}
