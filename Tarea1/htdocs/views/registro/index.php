<!DOCTYPE html>
<!-- file: views/paciente/index.php -->
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
   <div style="margin-top: 10%">
     <h3>{{title}}</h3>
     <table><thead>
      <tr><th>Fecha</th><th>Hora</th><th>Sistole</th>
          <th>Diastole</th><th>Pulso</th><th>Actions</th></tr>
      </thead><tbody>
      {{#registros}}
      <td>{{fecha}}</td>
      <td>{{hora}}</td>
      <td>{{sistole}}</td>
      <td>{{diastole}}</td>
      <td>{{pulso}}</td>
      <td>
      <a class="button button-icon" href="paciente/{{id}}">
        <img src="/icons/font-eye.png" style="width:15px"></i></a>
      <a class="button button-icon" href="paciente/{{id}}/edit">
        <img src="/icons/font-edit.png" style="width:15px"></i></a>
      <a class="button button-icon" href="paciente/{{id}}/delete">
        <img src="/icons/font-trash.png" style="width:15px"></i></a>
      </td>
      </tr>
      {{/registros}}</tbody>
     </table>
     <a class="button button-primary" href="registro/create">New</a>
    </div>
   </div>
 </div>
</body>