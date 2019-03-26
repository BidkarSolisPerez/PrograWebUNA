<!DOCTYPE html>
<!-- file: views/paciente/show.php -->
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
    <form>
     {{#paciente}}
     {{> paciente/detail}}
     {{/paciente}}
     <a class="button button-primary" href="/paciente">Back</a>
    </form>
   </div>
  </div>
</body>