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
        <div ng-controller="AppCtrl as main" layout="column" >
            <!--            <header layout="column">
                            <md-toolbar md-page-header md-scroll-shrink scroll>
                                <div class="md-toolbar-tools">
                                                                                <md-button class="md-icon-button" aria-label="Settings">
                                                                                    <md-icon>
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 18 18" fit="" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: block;">
                                                                                        <path d="M0 0h18v18h-18z" fill="none"></path>
                                                                                        <path d="M2 13.5h14v-1.5h-14v1.5zm0-4h14v-1.5h-14v1.5zm0-5.5v1.5h14v-1.5h-14z"></path>
                                                                                        </svg>
                                                                                    </md-icon>
                                                                                </md-button>
                                    <h2  md-header-title flex>Cyborg Developers</h2>
                                    <span flex></span>
                                </div>
                                <md-tabs md-scroll-tabs md-selected="main.selectedIndex" class="md-primary" md-center-tabs md-align-tabs="bottom" flex>
                                    <md-tab layout="row"><a link="#/">home</a></md-tab>
                                    <md-tab><a link="#/portifólio">portifólio</a></md-tab>
                                    <md-tab><a link="#/tecnologias">tecnologias</a></md-tab>
                                    <md-tab><a link="#/clients">clientes</a></md-tab>
                                    <md-tab><a link="#/depoimentos">depoimentos</a></md-tab>
                                    <md-tab><a link="#/contato">contato</a></md-tab>
                                </md-tabs>
                            </md-toolbar>
            
                        </header>-->
            <header md-page-header layout="column">
                <div md-header-picture ></div>
                <md-toolbar scroll flex>
                    <div class="md-toolbar-tools">
                        <md-button class="md-tools" aria-label="Go Back"><i class="ion-android-arrow-back"></i></md-button>
                        <h2 md-header-title flex>Katy Perry</h2>
                        <md-button class="md-tools" aria-label="Edit Contact"><i class="ion-android-create"></i></md-button>
                        <md-button class="md-tools" aria-label="More"><i class="ion-android-more-vertical"></i></md-button>
                    </div>
                </md-toolbar>
                <md-tabs md-scroll-tabs md-selected="main.selectedIndex" class="md-primary" md-center-tabs md-align-tabs="bottom" flex>
                    <md-tab layout="row"><a link="#/">home</a></md-tab>
                    <md-tab><a link="#/portifólio">portifólio</a></md-tab>
                    <md-tab><a link="#/tecnologias">tecnologias</a></md-tab>
                    <md-tab><a link="#/clients">clientes</a></md-tab>
                    <md-tab><a link="#/depoimentos">depoimentos</a></md-tab>
                    <md-tab><a link="#/contato">contato</a></md-tab>
                </md-tabs>
            </header> 
            <section>
                <md-content ng-view flex >
                </md-content>
            </section>
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
