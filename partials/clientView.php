
<md-grid-list md-cols="12" md-gutter="1em" md-row-height="1:1" class="md-padding">
    <md-grid-tile md-colspan="{{client.clientImage.spans.col}}" 
                  md-rowspan="{{client.clientImage.spans.row}}" 
                  ng-repeat="client in clients">
        <img ng-src="{{client.clientImage.path}}" class="md-media"/>
        <md-grid-tile-footer>{{client.name}}</md-grid-tile-footer>
    </md-grid-tile>
</md-grid-list>