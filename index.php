<!DOCTYPE html>
<html ng-app="cyborgWeb">
    <head>
        <meta name="viewport" content="initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style/base_style.css"/> <!-- Angular Material CSS using GitCDN to load directly from `bower-material/master` -->
        <link rel="stylesheet" href="https://gitcdn.xyz/repo/angular/bower-material/master/angular-material.css">
        <title>Cyborg Developers</title>
    </head>
    <body ng-controller="AppCtrl as main" ng-cloak layout-fill>
        <div>
            <md-toolbar md-scroll-shrink ng-if="true" class="md-primary">
                <div class="md-toolbar-tools">
                    <!--            <md-button class="md-icon-button" aria-label="Settings">
                                    <md-icon>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 18 18" fit="" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: block;">
                                        <path d="M0 0h18v18h-18z" fill="none"></path>
                                        <path d="M2 13.5h14v-1.5h-14v1.5zm0-4h14v-1.5h-14v1.5zm0-5.5v1.5h14v-1.5h-14z"></path>
                                        </svg>
                                    </md-icon>
                                </md-button>-->
                    <h2>
                        <span>Cyborg Developers</span>
                    </h2>
                    <span flex=""></span>
                </div>
            </md-toolbar>
            <md-tabs md-selected="main.selectedIndex" class="md-primary" md-center-tabs>
                <md-tab layout="row"><a link="#/">home</a></md-tab>
                <md-tab><a link="#/portifólio">portifólio</a></md-tab>
                <md-tab><a link="#/tecnologias">tecnologias</a></md-tab>
                <md-tab><a link="#/clients">clientes</a></md-tab>
                <md-tab><a link="#/depoimentos">depoimentos</a></md-tab>
                <md-tab><a link="#/contato">contato</a></md-tab>
            </md-tabs>
            <div id="content" ng-view>

            </div>

        </div>
        <!--Fim AppTeste-->
        <!-- Angular Material Dependencies -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-animate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-aria.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular-route.js"></script>

        <script src="script/angular-material.js"></script>
        <script src="script/base_script.js"></script>
    </body>
</html>
