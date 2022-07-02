


<form action="/companies" method="POST">
    @csrf
    
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="description" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sitio web</label>
    <input id="cantidad" name="web_site" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Facebook</label>
    <input id="precio" name="facebook" type="text" step="any"class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Linkedin</label>
    <input id="precio" name="linkedin" type="text" step="any"class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Twitter</label>
    <input id="precio" name="twitter" type="text" step="any"class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Numero de empleados</label>
    <input id="precio" name="employes" type="number" step="any"  class="form-control" tabindex="3">
  </div>
  <a href="/companies" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
