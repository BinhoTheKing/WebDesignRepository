<md-content class="md-padding" layout="row" layout-wrap layout-align="center start">
    <div flex="80" layout="row" ng-controller="HomeCtrl as home">
        <md-card flex="50" ng-repeat="card in cardNews">
            <md-card-title>
                <md-card-title-text>
                    <span class="md-headline">{{card.headline}}</span>
                    <span class="md-subhead">{{card.subhead}}</span>
                </md-card-title-text>
                <md-card-title-media>
                    <div class="md-media-md card-media">
                        <img ng-src="{{card.imagePath}}" class="md-card-image">
                    </div>
                </md-card-title-media>
            </md-card-title>
            <md-card-actions layout="row" layout-align="end center">
                <md-button>Action 1</md-button>
                <md-button>Action 2</md-button>
            </md-card-actions>
        </md-card>
    </div>
</md-content>