<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
     <h2>{{title}}</h2>
     <table>
	 <thead>
      <tr>
		<th>Name</th><th>Address</th>
        <th>Phone</th><th>Age</th>
		<th>Email</th><th>Major</th>
	  </tr>
	  </thead>
	  <tbody>
	  {{#students}}
      <tr>
		<td><a href="student/{{id}}"/>{{name}}</a></td>
		<td>{{address}}</td>
        <td>{{phone}}</td>
        <td>{{edad}}</td>
		<td>{{email}}</td>
		<td>{{email}}</td>
	  </tr>
       {{/students}}</tbody>
     </table>
    </div>
   </div>
 </div>
</body>