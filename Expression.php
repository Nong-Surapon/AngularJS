<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="UTF-8">
    <title>AngularJS - Expression</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
    <body ng-init="
    price=100;qty=20;
    arr=['A','B','C'];
    obj={'name': 'Nong','age':'27'};
    arrObj=[
    {'name': 'AA','age':'10'},
    {'name': 'BB','age':'20'},
    {'name': 'CC','age':'30'},
    ]
    ">
        <div class="container">
            <h2>AngularJS - Expression</h2>
            <br>

            <p>price: <span ng-bind="price"></span></p>         <!--ng-bind is show value-->
            <p>qty: <span ng-bind="qty"></span></p>             <!--ng-bind is show value-->
            <p>sum in ng-bind: <span ng-bind="price * qty"></span></p>
            <p>sum in ng-bind: <span ng-bind="price * qty |currency"></span></p>
            <p>{{'price * qty'}}<p>                             <!--'' is String -->
            <p>price * qty = {{ price * qty | currency:'THB '}}</p>     <!-- | is insert format currency-->

            <!--######### ng-bind = {{ }} #######-->
            <input type="number" class="form-controal" ng-model="price">
            <br>

            <h3>Array</h3>
            {{ arr[0] }}
            <span ng-bind="arr[1]"></span>

            <br>
            <h3>Object</h3>
            <p>Name : {{ obj.name }}</p>
            <p>AGE : {{ obj.age }}</p>

            <br>
            <h3>Array Object</h3>
            <p>arrObj = {{ arrObj }}</p>
            <p>arrObj[0] = {{ arrObj[0] }}</p>
            <p>arrObj[0].name = {{ arrObj[0].name }}</p>



            <a href="index.php">Home</a>


        </div>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
    </body>
</html>