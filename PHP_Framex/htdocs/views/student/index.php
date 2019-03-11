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
      <tr><th>Name</th><th>Address</th><th>Age</th>
	  <th>Major</th><th>Email</th><th>Phone</th>
	  <th>Actions</th></th></tr>
      </thead><tbody>
      {{#students}}
      <tr><td>{{name}}</td>
	  <td>{{address}}</td>
	  <td>{{edad}}</td>
      <td>{{major}}</td>
      <td>{{email}}</td>
      <td>{{phone}}</td>
      <td>
      <a class="button" href="student/{{id}}">Show</a>
      <a class="button" href="student/{{id}}/edit">Edit</a>
      <a class="button" href="student/{{id}}/delete">Erase</a>
      </td>
      </tr>
      {{/students}}</tbody>
     </table>
     <a class="button button-primary" href="/student/create">New</a>
    </div>
   </div>
 </div>
</body>