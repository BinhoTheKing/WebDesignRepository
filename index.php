<!DOCTYPE html>
<html ng-app="cyborgWeb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" type="text/css" href="style/base_style.css" />
    <!-- Angular Material CSS using GitCDN to load directly from `bower-material/master` -->
    <link rel="stylesheet" href="https://gitcdn.xyz/repo/angular/bower-material/master/angular-material.css">
    <title>Cyborg Developers</title>
</head>
<body>
    <div data-ng-controller="AppCtrl as main" data-layout="column">
        <header md-page-header layout="column">
            <div md-header-picture></div>
            <md-toolbar scroll flex layout="row">
                    <div class="md-toolbar-tools" flex="35">
                        <h2 md-header-title>Cyborg Developers</h2>
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
        </header>
        <section>
            <md-content ng-view flex>
                </md-content>
        </section>
    </div>

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
