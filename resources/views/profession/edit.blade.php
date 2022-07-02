<form action="/profession/{{$profession ->id}}  " method="POST">
    @csrf
    @method ('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="codigo" name="name" type="text" class="form-control" tabindex="1" value="{{$profession ->name}}">    
  </div>
  
  <a href="/profession" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>