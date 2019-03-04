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
      <tr><th>Name</th><th>Address</th>
          <th>Phone</th><th>Age</th>
		  <th>Email</th><th>Major</th></tr>
       <?php foreach ($students as $stud) { ?>
      <tr><td><a href="student/<?php echo $stud['id'] ?>"/>
          <?php echo $stud['name'] ?></a></td>
      <td><?php echo $stud['address'] ?></td>
          <td><?php echo $stud['phone'] ?></td>
          <td><?php echo $stud['edad'] ?></td>
		  <td><?php echo $stud['email'] ?></td>
		  <td><?php echo $stud['major'] ?></td></tr>
       <?php } ?></tbody>
     </table>
    </div>
   </div>
 </div>
</body>