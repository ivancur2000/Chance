
<form action="/jobOffer" method="POST">
    @csrf
    
  <div class="mb-3">
    <label for="" class="form-label">Titulo</label>
    <input id="codigo" name="title" type="text" class="form-control" tabindex="1">    
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
    <input id="precio" name="salary" type="number" step="any"class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="precio" name="description" type="text" step="any"class="form-control" tabindex="3">
  </div>
 
  
  <label for="" class="form-label">Prestaciones</label>
  
  <div class="mb-3">
    <input type="checkbox" name="vacations" value="1"> Vacaciones
    <input type="checkbox" name="vacation_bonus" value="1"> Prima Vacacional
    <input type="checkbox" name="social_insurance" value="1"> Seguro Social
    <input type="checkbox" name="life_insurance" value="1"> Seguro de Vida
    <input type="checkbox" name="major_expenses_insurance" value="1"> Seguro de gastos mayores
    <input type="checkbox" name="bonus" value="1"> Aguinaldo <br>
    <input type="checkbox" name="food_vouchers" value="1"> Vales de despensa
    <input type="checkbox" name="transportation" value="1"> Transporte
    <input type="checkbox" name="saving_funds" value="1"> Fondo de ahorro
    <input type="checkbox" name="loans" value="1"> Prestamos
    <input type="checkbox" name="dining_room" value="1"> Comedor
    <input type="checkbox" name="commissions" value="1"> Comisiones
  </div>
  
   <livewire:job-offer.requirement/>
   

  <div >
      <label for="" class="form-label">Requerimiento</label>
      <select name="name" id="">
         
          <option value="Formacion Academica" select>Formacion Academica</option>
          <option value="Idiomas">Idiomas</option>
          <option value="Cargo Anterior">Cargo Anterior</option>
          <option value="Otro">Otro</option>
      </select>
  
      <div class="mb-3">
          <label for="" class="form-label">Descripcion</label>
          <input id="precio" name="description" type="text" step="any"class="form-control" tabindex="3">
        </div>
        
        <div class="mb-3">
          <label for="" class="form-label">Prioridad</label>
          <select name="priority" id="">
             
              <option value="Obligatorio">Obligatorio</option>
              <option value="Opcional">Opcional</option>
          </select>
        </div>
      
      
      
      </div>

    
<br>
  <a href="/jobOffer" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

