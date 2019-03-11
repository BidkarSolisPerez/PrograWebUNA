<!DOCTYPE html>
<!-- file: views/student/create.php -->
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
   <div class="eleven column" style="margin-top: 10%">
    <h2>{{title}}</h2>
    <form action="/student" method="post">
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" 
          name="name">
      </div>
	  <div class="six columns">
       <label for="nameInput">Address</label>
       <input class="u-full-width" type="text" 
          name="address">
      </div>
	        <div class="six columns">
       <label for="nameInput">Age</label>
       <input class="u-full-width" type="text" 
          name="edad">
      </div>
      <div class="six columns">
       <label for="degreeInput">Major</label>
       <input class="u-full-width" type="text" 
          name="major">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="emailInput">Email</label>
       <input class="u-full-width" type="email" 
          name="email">
      </div>
      <div class="six columns">
       <label for="phoneInput">Phone</label>
       <input class="u-full-width" type="tel"
         name="phone">
      </div>
     </div>
     <input class="button-primary" type="submit" value="Create">
    </form>
   </div>
  </div>
 </div>
</body>