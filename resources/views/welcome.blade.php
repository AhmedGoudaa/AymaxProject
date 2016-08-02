<!DOCTYPE html>
<html ng-app="dashboard">
    <head>
        <title>Dashboard</title>
        
        <!-- styles -->
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bower_components/angular-dashboard-framework/dist/angular-dashboard-framework.min.css" rel="stylesheet">
        <link href="bower_components/adf-widget-clock/dist/adf-widget-clock.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <adf-dashboard name="mydashboard" collapsible="true" structure="6-6" adf-model="dashboard.model" />
        </div>

        <!-- scripts -->
        <script type="text/javascript" src="bower_components/angular/angular.js"></script>
        <script type="text/javascript" src="bower_components/Sortable/Sortable.js"></script>
        <script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
        <script type="text/javascript" src="bower_components/angular-dashboard-framework/dist/angular-dashboard-framework.js"></script>
        <script type="text/javascript" src="bower_components/adf-structures-base/dist/adf-structures-base.min.js"></script>
        <script type="text/javascript" src="bower_components/moment/moment.js"></script>
        <script type="text/javascript" src="bower_components/adf-widget-clock/dist/adf-widget-clock.min.js"></script>
        <script type="text/javascript" src="bower_components/adf-widget-news/dist/adf-widget-news.min.js"></script>
        <script type="text/javascript" src="assets/js/angular-route.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>

