
var app = angular.module("themeapp", [ 'ngRoute' , 'ngSanitize' ])
.controller("themecontroller", function($scope, $http , $location, $routeParams ) {
	$scope.goto = function(path){
		$location.path(path);
	}
	$scope.load = function() {
		$scope.pages = [];
		$http.get(siteUrl + '/wp-json/pages/').success(function(data) {
			// jQuery('body').css('background','blue');
			for (i = 0; i < data.length; i++) { 
				$scope.pages.push(data[i]);
			}	
		});
	}
	$scope.$watch($routeParams.slug, function(newVal , oldVal){
		$scope.current = [];
		for (var i = $scope.pages.length - 1; i >= 0; i--) {
			if ($scope.pages[i].slug == $routeParams.slug) {
				$scope.current = $scope.pages[i];
			}
		}
	});
})
.config(function($routeProvider , $locationProvider){
	$routeProvider.when('/:slug',
	{
		controller: 'themecontroller',
		templateUrl: templateUrl + '/template/page.html',
	})
	.otherwise({
		redirectTo: '/'
	});
});
