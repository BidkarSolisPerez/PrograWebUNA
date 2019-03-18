<!DOCTYPE html>
<!-- file: views/professor/index.php -->
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
   <div style="margin-top: 10%">
     <h2>{{title}}</h2>
     <table><thead>
      <tr><th>Name</th><th>Appelidos</th><th>Email</th>
	  <th>Telefono</th><th>Edad</th><th>Actions</th></th></tr>
      </thead><tbody>
      {{#users}}
      <tr><td>{{name}}</td>
	  <td>{{apellidos}}</td>
	  <td>{{email}}</td>
      <td>{{telefono}}</td>
      <td>{{age}}</td>
      <td>
      <a class="button" href="user/{{id}}">Show</a>
      <a class="button" href="user/{{id}}/edit">Edit</a>
      <a class="button" href="user/{{id}}/delete">Erase</a>
	  <a class="button" href="user/{{id}}/log">Datos Presión Arterial</a>
      </td>
      </tr>
      {{/users}}</tbody>
     </table>
     <a class="button button-primary" href="/user/create">New</a>
    </div>
   </div>
 </div>
</body>