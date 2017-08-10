//Declara o nome do Modulo	
angular.module("cynAtom", []);

//Declara os Scopes
angular.module("cynAtom").controller('cynAtomCtrl', function($scope, $http){
	//Nome da Aplicação
	$scope.app = "CynAtom";
	$scope.style = "styles";
	//Dados da Aplicação
	$scope.contatos = [
		{nome: "Gabriel", telefone: "99909-1800"}
	];

})