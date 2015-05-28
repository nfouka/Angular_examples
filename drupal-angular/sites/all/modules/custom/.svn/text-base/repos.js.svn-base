// Création du controller
function GitHubReposController($scope, $http) {
	
	// Initialisation du tableau répertoires
	$scope.repos = [];
	
	// On va chercher dans l'API github pour peupler le tableau
	$http.get('http://127.0.0.1/drupal-7.34/?q=cars').success(function(data) {
		$scope.repos = data.nodes;
	});


	$scope.name = 'nadir fouka' ; 
}