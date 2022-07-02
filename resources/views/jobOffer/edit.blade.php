<form action="/jobOffer/{{$jobOffer ->id}}  " method="POST">
    @csrf
    @method ('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input id="codigo" name="title" type="text" class="form-control" tabindex="1" value="{{$jobOffer ->title}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de trabajo</label>
     <select name="type_job" id="">
        <option value="Tiempo completo" select>Tiempo completo</option>
        <option value="Medio Tiempo">Medio tiempo</option>
        <option value="Indefinido">Indefinido</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Modalidad</label>
    <select name="modality" id="">
        
        <option value="Presencial">Presencial</option>
        <option value="Remoto">Remoto</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Salario</label>
    <input id="precio" value="{{$jobOffer ->salary}}" name="salary" type="number" step="any"class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="precio" value="{{$jobOffer ->description}}" name="description" type="text" step="any"class="form-control" tabindex="3">
  </div>
  
  <a href="/jobOffer" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>