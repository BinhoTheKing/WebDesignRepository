<div ng-controller="TestimonalCtrl as testi" ng-init="elevation = false">    
    <div layout="row" layout-wrap layout-align="center start">
        <div flex="33" layout="column">
            <md-testi-card card="card" ng-repeat="card in testi.splittedCards.left"></md-testi-card>
        </div>
        <div flex="33" layout="column" >
            <md-testi-card card="card" ng-repeat="card in testi.splittedCards.middle"></md-testi-card>
        </div>
        <div flex="33" layout="column" >
            <md-testi-card card="card" ng-repeat="card in testi.splittedCards.right"></md-testi-card>
        </div>
    </div>
</div>
