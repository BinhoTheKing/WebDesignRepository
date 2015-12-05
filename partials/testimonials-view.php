<div ng-controller="TestimonalCtrl as testi" ng-init="elevation = false">    
    <md-fab-speed-dial md-open="demo.isOpen"
                         ng-class="demo.selectedMode">
        <md-fab-trigger>
          <md-button  class="md-fab md-accent">
            <ng-md-icon icon="add" style="fill: rgba(0,0,0,0.54)" size="48"></ng-md-icon>
            <md-tooltip md-direction="left">
                escrever
            </md-tooltip>
          </md-button>
        </md-fab-trigger>
        <md-fab-actions>
        </md-fab-actions>
      </md-fab-speed-dial>
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
