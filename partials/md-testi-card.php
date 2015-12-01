<md-card>
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
        <md-button>
            <md-ico md-svg-icon=""></md-ico></md-button>
        <md-button>
            <md-ico md-svg-icon=""></md-ico>
        </md-button>
    </md-card-actions>
</md-card>