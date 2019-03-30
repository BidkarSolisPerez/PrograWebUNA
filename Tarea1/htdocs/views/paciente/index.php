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
      <tr><th>Nombre</th><th>Apellidos</th><th>Email</th>
          <th>Telefono</th><th>Edad</th><th>Actions</th></tr>
      </thead><tbody>
      {{#pacientes}}
      <tr><td>{{name}}</td>
      <td>{{apellidos}}</td>
      <td>{{email}}</td>
      <td>{{telefono}}</td>
      <td>{{edad}}</td>
      <td>
      <a class="button button-icon" href="paciente/{{id}}">
        <img src="/icons/font-eye.png" style="width:15px"></i></a>
      <a class="button button-icon" href="paciente/{{id}}/edit">
        <img src="/icons/font-edit.png" style="width:15px"></i></a>
      <a class="button button-icon" href="paciente/{{id}}/delete">
        <img src="/icons/font-trash.png" style="width:15px"></i></a>
      <a href="/registro">Registro presión</a>
      </td>
      </tr>
      {{/pacientes}}</tbody>
     </table>
     <a class="button button-primary" href="/paciente/create">New</a>
    </div>
   </div>
 </div>
</body>