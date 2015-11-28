<md-content layout-padding layout="row" layout-align="center">
	<div flex="80">
        <md-grid-list md-cols="4" md-gutter="5%" md-row-height="1:1">
            <md-grid-tile ng-repeat="client in clients">
                <img ng-src="{{client.clientImage}}" class="clientImg"/>
                <md-grid-tile-footer>{{client.name}}</md-grid-tile-footer>
            </md-grid-tile>
        </md-grid-list>
    </div>
</md-content>