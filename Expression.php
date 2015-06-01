<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="UTF-8">
    <title>AngularJS - Expression</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
    <body ng-init="price=100;qty=20">
        <div class="container">
            <h2>AngularJS - Expression</h2>

            <p>price: <span ng-bind="price"></span></p>         <!--ng-bind is show value-->
            <p>qty: <span ng-bind="qty"></span></p>             <!--ng-bind is show value-->
            <p>sum in ng-bind: <span ng-bind="price * qty"></span></p>
            <p>sum in ng-bind: <span ng-bind="price * qty |currency"></span></p>
            <p>{{'price * qty'}}<p>                             <!--'' is String -->
            <p>price * qty = {{ price * qty | currency:'THB '}}</p>     <!-- | is insert format currency-->

            <!--######### ng-bind = {{ }} #######-->
            <input type="number" class="form-controal" ng-model="price">



            


        </div>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
    </body>
</html>