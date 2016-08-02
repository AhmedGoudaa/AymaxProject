angular.module('dashboard', ['adf', 'adf.structures.base', 'adf.widget.clock' , 'adf.widget.news'])
    .config(function(dashboardProvider){
    dashboardProvider
        .structure('6-6', {
            rows: [{
                columns: [{
                    styleClass: 'col-md-6'
                }, {
                    styleClass: 'col-md-6'
                }]
            }]
        });
});