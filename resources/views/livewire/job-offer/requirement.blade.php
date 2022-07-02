<div class="mb-3">
  <label for="" class="form-label">Profesión</label>
  <select wire:model="selected">
   <option value="" select>==PROFESIONES==</option>
    @foreach($p as $profession)
      <option value="{{$profession->id}}">{{$profession->name}} </option>
      
    @endforeach
    
  </select> <br> 

  @if(!is_null($pa))
  <label class="form-label">Profesión</label>
  <select wire:model="selected2">
   <option value="" select>==Puestos==</option>
    @foreach($pa as $j)
      <option value="{{$j->id}}">{{$j->name}} </option>
      
    @endforeach
  </select> <br>
  
  @endif
</div>