<?php

namespace App\Http\Livewire\Curriculum;

use App\Models\Curriculum;
use Livewire\Component;

class JobExperience extends Component
{

    protected $curriculum;

    public function mount(Curriculum $curriculum)
    {
        $this->curriculum = $curriculum;
    }

    public function render()
    {
        $workExperiences = $this->curriculum->workExperiences;
        return view('livewire.curriculum.job-experience', compact('workExperience'));
    }
}
