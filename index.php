﻿<!DOCTYPE html>
<html ng-app="toolbarDemo1">
    <head>
        <meta name="viewport" content="initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style/base_style.css"/> <!-- Angular Material CSS using GitCDN to load directly from `bower-material/master` -->
        <link rel="stylesheet" href="https://gitcdn.xyz/repo/angular/bower-material/master/angular-material.css">
        <title>Cyborg Developers</title>
    </head>
    <body ng-controller="AppCtrl" ng-cloak>
        <!--    AppTeste-->
    <md-toolbar md-scroll-shrink ng-if="true" class="md-primary">
        <div class="md-toolbar-tools">
            <md-button class="md-icon-button" aria-label="Settings">
                <md-icon>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 18 18" fit="" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: block;">
                    <path d="M0 0h18v18h-18z" fill="none"></path>
                    <path d="M2 13.5h14v-1.5h-14v1.5zm0-4h14v-1.5h-14v1.5zm0-5.5v1.5h14v-1.5h-14z"></path>
                    </svg>
                </md-icon>
            </md-button>
            <h2>
                <span>Cyborg Developers</span>
            </h2>
            <span flex=""></span>
            <md-button class="md-icon-button" aria-label="Favorite">
                <md-icon style="color: #E84C3D;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fit="" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: block;">
                    <path d="M0 0h24v24h-24z" fill="none"></path>
                    <path d="M12 21.35l-1.45-1.32c-5.15-4.67-8.55-7.75-8.55-11.53 0-3.08 2.42-5.5 5.5-5.5 1.74 0 3.41.81 4.5 2.09 1.09-1.28 2.76-2.09 4.5-2.09 3.08 0 5.5 2.42 5.5 5.5 0 3.78-3.4 6.86-8.55 11.54l-1.45 1.31z"></path>
                    </svg>
                </md-icon>
            </md-button>
            <md-button class="md-icon-button" aria-label="More">
                <md-icon>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 18 18" fit="" preserveAspectRatio="xMidYMid meet" style="pointer-events: none; display: block;">
                    <path d="M0 0h18v18h-18z" fill="none"></path>
                    <path d="M9 5.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zm0 2c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5zm0 5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5 1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path>
                    </svg>
                </md-icon>
            </md-button>
        </div>
    </md-toolbar>
    <md-tabs class="md-primary" md-center-tabs>
        <md-tab id="tab1">
            <md-tab-label>Item One</md-tab-label>
            <md-tab-body>
                View for item #1
            </md-tab-body>
        </md-tab>
        <md-tab id="tab2">
            <md-tab-label>Item 2</md-tab-label>
            <md-tab-body>
                View for item #2
            </md-tab-body>
        </md-tab>
    </md-tabs>
    <md-content>
    </md-content>
    <!--Fim AppTeste-->
    <!-- Angular Material Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.js"></script>

    <!-- Angular Material Javascript using GitCDN to load directly from `bower-material/master` -->
    <script src="script/angular-material.js"></script>
    <script src="script/base_script.js"></script>
</body>
</html>