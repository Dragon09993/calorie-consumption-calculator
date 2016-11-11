<!doctype html>
<html  lang="" ng-app="cc-calc">
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="assets/js/angular.min.js"></script>
        <script src="assets/js/app.js"></script>
    </head>
    <body>
<div id="calc-men" ng-controller="calculator">
<table id="calc" class="table table-striped table-bordered table-responsive table-hover" >
<tr>
<th colspan="2" class="text-center"><h2>Calorie Consumption Calculator</h2></th>
</tr>
 <tr>
 <td>weight(lb):</td>
 <td><input type="text" class="form-control" ng-model="weight"></td>
 </tr>
  <tr>
 <td>height(ft):</td>
 <td><input type="text" class="form-control" ng-model="feet"></td>
 </tr>
   <tr>
 <td>height(in):</td>
 <td><input type="text" class="form-control" ng-model="inches"></td>
 </tr>
<tr>
 <td>age:</td>
 <td><input type="text" class="form-control" ng-model="age"></td>
 </tr>
<tr>
 <td colspan="2">Gender:</td>
 </tr>
 <tr>
 <td><input name="gender" type="radio" ng-model="gender" ng-value="true"  ></td>
 <td>male</td>
 </tr>
  <tr>
 <td><input name="gender" type="radio" ng-model="gender" ng-value="false" ></td>
 <td>female</td>
 </tr>
 <tr>
 <td class="footer footer-left">Calorie Consumption(per day):</td>
 <td class="footer footer-right"><span  id="result">{{calorie_consumption}}</span></td>

</table>

</div>

    </body>
</html>
