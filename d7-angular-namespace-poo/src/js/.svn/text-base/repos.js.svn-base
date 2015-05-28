/**
 * 
 */


var app = angular.module('myApp', [] );
app.controller("GitHubReposController", function($scope,$http) {
	// Initialisation du tableau rÃƒÂ©pertoires
	$scope.repos = [];
	
	// On va chercher dans l'API github pour peupler le tableau
	$http.get('http://localhost/drupal-7.36/?q=drupal/getJobCompany').success(function(data) {
		$scope.repos = data.records;
	});
});


