<!-- file: views/paciente/detail.php -->  
 <div class="row">  
  <div class="four columns">  
   <label for="name">Nombre</label>  
   <input class="u-full-width" type="text" min="1500" max="2099"  
     {{#rdnly}} readonly {{/rdnly}}  
     name="name" value="{{name}}">  
  </div>  
  <div class="four columns">  
   <label for="apellidos">Apellidos</label>  
   <input class="u-full-width" type="text" min="0"   
     {{#rdnly}} readonly {{/rdnly}}  
     name="apellidos" value="{{apellidos}}">  
  </div>   
 </div>
 <div class="row">  
  <div class="four columns">  
   <label for="email">Email</label>  
   <input class="u-full-width" type="text" min="1500" max="2099"  
     {{#rdnly}} readonly {{/rdnly}}  
     name="email" value="{{email}}">  
  </div> 
  <div class="four columns">  
   <label for="telefono">Telefono</label>  
   <input class="u-full-width" type="number" min="1500" max="2099"  
     {{#rdnly}} readonly {{/rdnly}}  
     name="telefono" value="{{telefono}}">  
  </div>  
  <div class="four columns">  
   <label for="edad">Edad</label>  
   <input class="u-full-width" type="number" min="0"   
     {{#rdnly}} readonly {{/rdnly}}  
     name="edad" value="{{edad}}">  
  </div>   
 </div>
 <div class="row">
    <table>
      <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Sistole</th>
        <th>Diastole</th>
        <th>Pulso</th>
      </tr>
      {{#registro}}
        <tr><td>{{fecha}}</td>
        <td>{{hora}}</td>
        <td>{{diastole}}</td>
        <td>{{sistole}}</td>
        <td>{{pulso}}</td>
      {{/registro}}
      </tr>
    </table>
    <a href="/registro/{{id}}">Nueva medición</a>
 </div>
