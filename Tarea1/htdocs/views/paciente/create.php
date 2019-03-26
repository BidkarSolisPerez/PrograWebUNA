<!DOCTYPE html>
<!-- file: views/paciente/create.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{title}}</title>
{{> header}}
</head>
<body>
 {{> navbar}}
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
    <h2>{{title}}</h2>
    <form action="/paciente" method="post">
     {{#paciente}}
        {{> paciente/detail}}
     {{/paciente}}
     <input class="button-primary" type="submit" value="Create">
    </form>
   </div>
  </div>
 </div>
</body>