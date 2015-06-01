<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="UTF-8">
    <title>AngularJS - ng-repeat</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
    <body ng-init="    
    customers=[
    {'name': 'John', 'age': 50, 'country': 'USA'},
    {'name': 'Peter', 'age': 28, 'country': 'UK'},
    {'name': 'Somchai', 'age': 42, 'country': 'Thailand'},
    {'name': 'Yang', 'age': 30, 'country': 'China'}
    ];
    suppliers=[]
    
    ">
        <div class="container">
            <h2>AngularJS - ng-repeat</h2>
            <p>ng-repeat คือ แสดงผลแบบวนลูป</p>
                

            <p>customers.length = {{ customers.length }}</p>
            <p><b>ng-if="customers.length > 0"</b></p>
            <div ng-if="customers.length > 0">
                <ul class="list-group" ng-repeat="c in customers">
                    <li class="list-group-item">{{ c.name }}</li>
                </ul>
            </div>

            <div ng-if="suppliers.length > 0">
                <ul class="list-group" ng-repeat="s in suppliers">
                    <li class="list-group-item">{{ s.name }}</li>
                </ul>
            </div>
            <div ng-if="suppliers.length == 0">
                There is no suppliers
            </div>

            <p><b>use in table</b></p>
            <table class="table">
                <!--<tr ng-repeat="c in customers">-->
                <!--<tr ng-repeat="c in customers | orderBy:'-name' ">-->
                <!--<tr ng-repeat="c in customers | orderBy:'-name' | filter:'50' ">-->
                <tr ng-repeat="c in customers | orderBy:'-name' | filter:{'country':'U'} ">           
                    <td>{{ c.name }}</td>
                    <td>{{ c.age }}</td>
                    <td>{{ c.country }}</td>
                </tr>
            </table>




            </div>
            <a href="index.php">Home</a>


        </div>
        
        <script type="text/javascript" src="js/angular.min.js"></script>
    </body>
</html>