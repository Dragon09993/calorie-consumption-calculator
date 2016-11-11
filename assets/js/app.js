var calconcalc=angular.module('cc-calc',[]);

calconcalc.controller("calculator",['$scope',function($scope){
	$scope.weight=0;
	$scope.feet=0;
	$scope.inches=0;
	$scope.gender=true;
	
	$scope.age=0;
	setInterval(function(){
		$scope.height=parseInt($scope.feet*12)+parseInt($scope.inches);
		if($scope.gender){
		$scope.calorie_consumption= 66 + parseInt( 6.2 * $scope.weight ) + parseInt( 12.7 * $scope.height ) - parseInt( 6.76 * $scope.age );	
		console.log($scope.height);
		}
		if(!$scope.gender){
		$scope.calorie_consumption=  655.1 + parseInt( 4.35 * $scope.weight ) + parseInt( 4.7 * $scope.height ) - parseInt( 4.7 * $scope.age );
		console.log($scope.height);
		}	

 $scope.$apply();
	},500);


	

}]);