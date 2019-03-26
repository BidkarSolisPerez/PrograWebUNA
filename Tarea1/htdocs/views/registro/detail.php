<!-- file: views/registro/detail.php -->  
 <div class="row">  
  <div class="four columns">  
   <label for="sistole">Sistole</label>  
   <input class="u-full-width" type="text" min="1500" max="2099"  
     {{#rdnly}} readonly {{/rdnly}}  
     name="sistole" value="{{sistole}}">  
  </div> 
  <div class="four columns">  
   <label for="diastole">Diastole</label>  
   <input class="u-full-width" type="number" min="1500" max="2099"  
     {{#rdnly}} readonly {{/rdnly}}  
     name="diastole" value="{{diastole}}">  
  </div>  
  <div class="four columns">  
   <label for="pulso">Pulso</label>  
   <input class="u-full-width" type="number" min="0"   
     {{#rdnly}} readonly {{/rdnly}}  
     name="pulso" value="{{pulso}}">  
  </div>   
 </div>
