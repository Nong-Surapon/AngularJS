<!DOCTYPE html>
<html ng-app>
<head>
    <meta charset="UTF-8">
    <title>AngularJS</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
    <body ng-init="names=[
        {'name': 'Somsak', 'country': 'Thailand', 'salary': 50000},
        {'name': 'Peter', 'country': 'USA', 'salary': 95000},
        {'name': 'Marry', 'country': 'UK', 'salary': 100000}
    ]">
        <div class="container">
            <h2>AngularJS</h2>
            <h3>Basic Sum</h3>
            <p>{{4 * 5}}</p>
            <br>

            <h3>Two way data binding</h3>
            <input type="text" class="form-control" ng-model="text" placeholder="Your Name">
            <p>Hello word, {{ text }}</p>
            <input type="text" class="form-control" ng-model="text" placeholder="Your Name">
            <br>

            <h3>Sum Price</h3>
            <input type="number" class="form-control" ng-model="price" placeholder="Price">
            <input type="number" class="form-control" ng-model="qty" placeholder="Quantity">
            <p>Total Price: {{ price * qty }}</p>
            <br>

            <h3>Object ng-repeat</h3>
            <ul class="list-group" ng-repeat="n in names">
                <li class="list-group-item">{{ n.country }}</li>
            </ul>
            <br>

            <h3>Filter</h3>
            <input type="text" class="form-control" ng-model="queryString" placeholder="Filter by all">
            <table class="table">
                <tr ng-repeat="n in names | filter:queryString">
                    <td>{{n.name}}</td>
                    <td>{{n.country}}</td>
                    <td>{{n.salary}}</td>
                </tr>
            </table>
            <br>

            <h3>Filter by name</h3>
            <input type="text" class="form-control" ng-model="queryString.name" placeholder="Filter by name">
            <p>Filtered by: {{ queryString }}</p> <!--p for debug-->
            <br>

            <h3>Order By, Sort</h3>
            <input type="radio" value="name" ng-model="sortString"> Sorted by Name
            <input type="radio" value="-name" ng-model="sortString"> Sorted by Name(Descending)
            <input type="radio" value="country" ng-model="sortString"> Sorted by Country
            <p>Sort by: {{sortString}}</p><!--p for debug-->
            <table class="table">
                <tr ng-repeat="n in names | filter:queryString | orderBy:sortString">
                    <td>{{n.name}}</td>
                    <td>{{n.country}}</td>
                    <td>{{n.salary | currency}}</td>
                    <td>{{n.salary | currency:'THB '}}</td>
                </tr>
            </table>


        </div>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/angular.min.js"></script>
    </body>
</html>