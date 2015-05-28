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

<style type="text/css">

  img{

      width: 300px ; 
      height: 300px ; 
  }

</style>

  </head>

  <body>

    <div class="container" ng-controller="GitHubReposController">
      <h1>GitHub Repos</h1>
      <li ng-repeat="repo in repos">
        {{repo.node.Corps}}
        <img src="{{repo.node.Chemin.src}}">
        <br/>
         <strong style='font-size:35px;'> Prix : 
        {{repo.node.Prix}} €
               </strong>
      </li>

  </div>
    
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.min.js"></script>
  <script src="./sites/all/modules/hello/Controller/repos.js"></script>
  
  </body>
</html>