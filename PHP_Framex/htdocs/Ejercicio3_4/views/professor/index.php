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
     <h2><?php echo $title ?></h2>
     <table><thead>
      <tr><th>Name</th><th>Degree</th>
          <th>Email</th><th>Phone</th></tr>
      </thead><tbody>
	  {{#professors}}
      <tr><td><a href="professor/{{id}}"/>
          {{name}}</a></td>
      <td>{{degree}}</td>
      <td>{{email}}</td>
      <td>{{phone}}</td></tr>
	  {{/professors}}</tbody>
     </table>
    </div>
   </div>
 </div>
</body>