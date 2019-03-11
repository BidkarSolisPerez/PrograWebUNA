<!DOCTYPE html>
<!-- file: views/student/show.php -->
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
    <form>
     {{#student}}
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" readonly
          name="name" value="{{name}}">
      </div>
	        <div class="six columns">
       <label for="nameInput">Address</label>
       <input class="u-full-width" type="text" readonly
          name="name" value="{{address}}">
      </div>
	        <div class="six columns">
       <label for="nameInput">Age</label>
       <input class="u-full-width" type="text" readonly
          name="name" value="{{edad}}">
      </div>
      <div class="six columns">
       <label for="degreeInput">Major</label>
       <input class="u-full-width" type="text" readonly
          name="degree" value="{{major}}">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="emailInput">Email</label>
       <input class="u-full-width" type="email" readonly
          name="email" value="{{email}}">
      </div>
      <div class="six columns">
       <label for="phoneInput">Phone</label>
       <input class="u-full-width" type="tel" readonly
         name="phone" value="{{phone}}">
      </div>
      <a class="button button-primary" href="/student">Back</a>
     </div>
     {{/student}}
    </form>
   </div>
  </div>
 </div>
</body>