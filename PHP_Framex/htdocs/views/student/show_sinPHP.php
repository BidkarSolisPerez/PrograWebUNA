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
    <form>
		{{#student}}
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" readonly
          id="name" value="{{name}}">
      </div>
      <div class="six columns">
       <label for="degreeInput">Address</label>
       <input class="u-full-width" type="text" readonly
          id="degree" value="{{address}}">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="emailInput">Phone</label>
       <input class="u-full-width" type="email" readonly
          id="email" value="{{phone}}">
      </div>
      <div class="six columns">
       <label for="phoneInput">Age</label>
       <input class="u-full-width" type="tel" readonly
         id="phone" value="{{edad}}">
      </div>
	  </div>
	  <div class="row">
	  <div class="six columns">
       <label for="phoneInput">Email</label>
       <input class="u-full-width" type="tel" readonly
         id="phone" value="{{email}}">
      </div>
	  <div class="six columns">
       <label for="phoneInput">Major</label>
       <input class="u-full-width" type="tel" readonly
         id="phone" value="{{major}}">
      </div>
     <a class="button button-primary" href="/student">Back</a>
     </div>
	 {{/student}}
    </form>
   </div>
  </div>
 </div>
</body>