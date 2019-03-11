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
	{{#professor}}
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" readonly
          id="name" value="{{name}}">
      </div>
      <div class="six columns">
       <label for="degreeInput">Degree</label>
       <input class="u-full-width" type="text" readonly
          id="degree" value="{{degree}}">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="emailInput">Email</label>
       <input class="u-full-width" type="email" readonly
          id="email" value="{{email}}">
      </div>
      <div class="six columns">
       <label for="phoneInput">Phone</label>
       <input class="u-full-width" type="tel" readonly
         id="phone" value="{{phone}}">
      </div>
     <a class="button button-primary" href="/professor">Back</a>
     </div>
	 {{/professor}}
    </form>
   </div>
  </div>
 </div>
</body>