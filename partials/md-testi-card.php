<md-card ng-mouseenter="card.elevation = true" ng-mouseleave="card.elevation = false"  ng-class="{'md-whiteframe-8dp': card.elevation}" >
    <md-card-header>
        <md-card-avatar>
            <img ng-src="{{card.imagePath}}" class="md-card-image">
        </md-card-avatar>
        <md-card-header-text>
            <span class="md-headline">{{card.headline}}</span>
        </md-card-header-text>
    </md-card-header>
    <md-card-content>
        <p>{{card.subhead}}</p>
    </md-card-content>
    <md-card-actions layout="row" layout-align="end center">
        <md-button class="md-icon-button">
            <ng-md-icon icon="reply" style="fill: rgba(0,0,0,0.54)"></ng-md-icon>
            <md-tooltip md-direction="top">
                Responder
            </md-tooltip>
        </md-button>
        <md-button class="md-icon-button">
            <ng-md-icon icon="share" style="fill: rgba(0,0,0,0.54)"></ng-md-icon>
            <md-tooltip md-direction="top">
                Compartilhar
            </md-tooltip>
        </md-button>
    </md-card-actions>
</md-card>