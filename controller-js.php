<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AngularJS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div ng-app="myApp" ng-controller="myCtrl">
{{ firstName + " " + lastName }}
<input type="text" class="form-control" ng-model="firstName">
<input type="text" class="form-control" ng-model="lastName">
</div>
<script type="text/javascript" src="js/angular.min1.js"></script>
<script>
var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
});
</script>


<!-- ระวัง g-app="myApp" เพราะปกติอยุ่ที่ <html ng-app>-->
<br>
<a href="index.php">HOME</a>
</body>
</html>