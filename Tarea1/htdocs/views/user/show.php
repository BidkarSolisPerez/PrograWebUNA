<!DOCTYPE html>
<!-- file: views/student/show.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{title}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
    <h2>{{title}}</h2>
    <form>
     {{#user}}
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" readonly
          name="name" value="{{name}}">
      </div>
	        <div class="six columns">
       <label for="nameInput">Apellidos</label>
       <input class="u-full-width" type="text" readonly
          name="apellidos" value="{{apellidos}}">
      </div>
	        <div class="six columns">
       <label for="nameInput">Email</label>
       <input class="u-full-width" type="text" readonly
          name="email" value="{{email}}">
      </div>
      <div class="six columns">
       <label for="degreeInput">Telefono</label>
       <input class="u-full-width" type="text" readonly
          name="telefono" value="{{telefono}}">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="emailInput">Edad</label>
       <input class="u-full-width" type="email" readonly
          name="age" value="{{age}}">
      </div>
      <a class="button button-primary" href="/user">Back</a>
     </div>
     {{/user}}
    </form>
   </div>
  </div>
 </div>
</body>