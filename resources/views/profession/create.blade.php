<form action="/profession/" method="POST">
    @csrf
    
  <div class="mb-3">
    <label for="" class="form-label">Profesion</label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1">    
  </div>
     
  <div class="mb-3">
    <label for="" class="form-label">Puesto</label>
    <input id="codigo" name="name1" type="text" class="form-control" tabindex="1">    
  </div>
  <a href="/profession" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>