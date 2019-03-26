<!DOCTYPE html>
<!-- file: views/paciente/edit.php -->
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
    {{#paciente}}
    <form action="/paciente/{{id}}/update" method="POST">
     {{> paciente/detail}}
     <input class="button-primary" type="submit" value="Update">
    </form>
    {{/paciente}}
   </div>
  </div>
 </div>
</body>