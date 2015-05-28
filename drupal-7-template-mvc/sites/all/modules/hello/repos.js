// Création du controller
function GitHubReposController($scope, $http) {
	
	// Initialisation du tableau répertoires
	$scope.repos = [];
	
	// On va chercher dans l'API github pour peupler le tableau
	$http.get('/tout-les-oiseaux').success(function(data) {
		$scope.repos = data.nodes;
	});

}