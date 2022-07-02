<?php

namespace App\Http\Livewire\JobOffer;

use Livewire\Component;
use App\Models\Profession;
use App\Models\JobPosition;

class Requirement extends Component
{
   
   
    public $selected=null, $selected2=null;
    public $pa=null;
    

    public function render()
    {
        
        return view('livewire.job-offer.requirement', [
            'p'=> Profession::all()
        ]);
    }

    public function selected($profession_id)
    {
        $this->$pa= JobPosition::where('profession_id',$profession_id)->get();
    }
 
    
    
   
}
