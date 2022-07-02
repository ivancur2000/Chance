<?php

namespace App\Http\Livewire\Person;

use App\Models\Curriculum;
use App\Models\Profession;
use Livewire\Component;
use Livewire\WithPagination;

class CurriculumIndex extends Component
{
    use WithPagination;

    public $profession;

    public function render()
    {
        $curriculums = Curriculum::where('user_id', auth()->user()->id)
                                ->latest('id')
                                ->paginate(8);
        return view('livewire.person.curriculum-index', compact('curriculums'));
    }
    public function clearPage()
    {
        $this->reset('page');
    }
}
