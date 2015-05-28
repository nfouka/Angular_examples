<!doctype html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <title>GitHub Repos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="bootstrap.css" rel="stylesheet">
    <link href="bootstrap-responsive.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>

  <body class="col-md-10">
 
    <div class="container" ng-controller="GitHubReposController">
      
   
  <div class="col-md-2"> 

    <h1>GitHub Repos 1 </h1>
  <li ng-repeat="repo in repos | orderBy:sort:reverse">
   <b>Adresse</b>  : <i>{{ repo.node.adress }}</i>
   <b>Content</b>  : <i>{{ repo.node.Corps }} </i>

 </li> 
</div>

  <div class="col-md-2"> 
    <h1>GitHub Repos 2</h1>
  <li ng-repeat="repo in repos | orderBy:sort:reverse">
   <b>Adresse</b>  : <i>{{ repo.node.adress }}</i>
   <b>Content</b>  : <i>{{ repo.node.Corps }} </i>

 </li> 
</div>



  <div class="col-md-4">
  <h1>GitHub Repos 3</h1> 
  <li ng-repeat="repo in repos | orderBy:sort:reverse">
   <b>Adresse</b>  : <i>{{ repo.node.adress }}</i>
   <b>Content</b>  : <i>{{ repo.node.Corps }} </i>

 </li> 
</div>

  </div>
  </div>
  <script src="http://localhost/drupal-7.34/sites/all/modules/mymodule/repos.js"></script>
  
  </body>
</html>
