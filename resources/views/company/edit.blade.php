

    <form action="/companies/{{$companies ->id}}  " method="POST">
        @csrf
        @method ('PUT')
      <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="codigo" name="name" type="text" class="form-control" tabindex="1" value="{{$companies ->name}}">    
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input value="{{$companies ->description}}"id="descripcion" name="description" type="text" class="form-control" tabindex="2">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Sitio web</label>
        <input value="{{$companies ->web_site}}" id="cantidad" name="web_site" type="text" class="form-control" tabindex="3">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Facebook</label>
        <input id="precio" value="{{$companies ->facebook}}" name="facebook" type="text" step="any"class="form-control" tabindex="3">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Linkedin</label>
        <input id="precio" value="{{$companies ->linkedin}}" name="linkedin" type="text" step="any"class="form-control" tabindex="3">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Twitter</label>
        <input id="precio" value="{{$companies ->twitter}}" name="twitter" type="text" step="any"class="form-control" tabindex="3">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Numero de empleados</label>
        <input id="precio" value="{{$companies ->employes}}" name="employes" type="number" step="any"  class="form-control" tabindex="3">
      </div>
      <a href="/companies" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
