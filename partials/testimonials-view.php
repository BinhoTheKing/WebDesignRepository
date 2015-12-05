<div ng-controller="TestimonalCtrl as testi" ng-init="elevation = false">
          <md-button  class="md-fab md-accent md-testi-fab"  layout="column" layout-align="end">
            <md-tooltip md-direction="left">
                escrever
            </md-tooltip>	
            <ng-md-icon class="md-icon" icon="add" style="fill: rgba(0,0,0,0.54)" size="36" flex="auto"></ng-md-icon>
          </md-button>
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
