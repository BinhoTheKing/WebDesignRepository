<!DOCTYPE html>
<html ng-app="cyborgWeb">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="style/base_style.css"/> <!-- Angular Material CSS using GitCDN to load directly from `bower-material/master` -->
        <link rel="stylesheet" href="https://gitcdn.xyz/repo/angular/bower-material/master/angular-material.css">
        <title>Cyborg Developers</title>
    </head>
    <body>
        <div ng-controller="AppCtrl as main" layout="column" style="position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; height:600px">
            <md-toolbar  md-scroll-shrink>
                <div class="md-toolbar-tools">
                    <!--                                            <md-button class="md-icon-button" aria-label="Settings">
                                                                    <md-icon>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 18 18" fit="" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: block;">
                                                                        <path d="M0 0h18v18h-18z" fill="none"></path>
                                                                        <path d="M2 13.5h14v-1.5h-14v1.5zm0-4h14v-1.5h-14v1.5zm0-5.5v1.5h14v-1.5h-14z"></path>
                                                                        </svg>
                                                                    </md-icon>
                                                                </md-button>-->
                    <h2 md-toolbar-title>Cyborg Developers</h2>
                    <span flex></span>
                </div>
            </md-toolbar>
            <!--            <md-toolbar md-scroll-fade
                                    layout class="md-tall"
                                    md-keep-condensed="64"
                                    md-title-scale-factor="1.5"
                                    md-shrink-speed-factor=".5"
                                    md-expanded-speed-factor=".2">
                            <div md-expanded-container>
                                <div md-expanded  md-expanded-keep="60" >
                                    <div style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/d/de/0327New_York_City_Statue_of_Liberty.JPG)" class="image"></div>
                                </div>
            
                            </div>
                            <div class="md-toolbar-tools">
                                <md-button class="md-icon-button" aria-label="Settings">
                                    <md-icon md-svg-icon="img/icons/menu.svg"></md-icon>
                                </md-button>
                                <h3 md-toolbar-title>Scroll Fade</h3>
                                <span flex></span>
                                <md-button class="md-icon-button" aria-label="Favorite" ng-if="main.toolbarCondensed">
                                    <md-icon md-svg-icon="img/icons/favorite.svg" style="color: greenyellow;"></md-icon>
                                </md-button>
                                <md-button class="md-icon-button" aria-label="More">
                                    <md-icon md-svg-icon="img/icons/more_vert.svg"></md-icon>
                                </md-button>
                                <md-tabs md-selected="main.selectedIndex" class="md-primary" md-center-tabs >
                                    <md-tab layout="row"><a link="#/">home</a></md-tab>
                                    <md-tab><a link="#/portifólio">portifólio</a></md-tab>
                                    <md-tab><a link="#/tecnologias">tecnologias</a></md-tab>
                                    <md-tab><a link="#/clients">clientes</a></md-tab>
                                    <md-tab><a link="#/depoimentos">depoimentos</a></md-tab>
                                    <md-tab><a link="#/contato">contato</a></md-tab>
                                </md-tabs>
                            </div>
                            <md-button md-toolbar-fab aria-label="Float Action Button" class="md-fab md-accent">
                                <md-icon md-svg-icon="img/icons/favorite.svg" style="color: greenyellow;"></md-icon>
                            </md-button>
                        </md-toolbar>-->
            <md-tabs md-selected="main.selectedIndex" class="md-primary" md-center-tabs >
                <md-tab layout="row"><a link="#/">home</a></md-tab>
                <md-tab><a link="#/portifólio">portifólio</a></md-tab>
                <md-tab><a link="#/tecnologias">tecnologias</a></md-tab>
                <md-tab><a link="#/clients">clientes</a></md-tab>
                <md-tab><a link="#/depoimentos">depoimentos</a></md-tab>
                <md-tab><a link="#/contato">contato</a></md-tab>
            </md-tabs>
            <md-content ng-view flex  layout-fill>
            </md-content>
        </div>

        <!--Fim AppTeste-->
        <!-- Angular Material Dependencies -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-animate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-aria.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-route.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/angular-material-icons/0.6.0/angular-material-icons.min.js"></script>

        <script src="script/angular-material.js"></script>
        <script src="script/base_script.js"></script>
    </body>
</html>
