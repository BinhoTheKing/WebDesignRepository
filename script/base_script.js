var cyborgWeb = angular.module('cyborgWeb', ['ngMaterial', 'ngRoute', 'ngMdIcons']);

cyborgWeb.config(['$mdThemingProvider', '$routeProvider', function ($mdThemingProvider, $routeProvider) {
        $mdThemingProvider.definePalette('brass', {
            '50': 'd8cf95',
            '100': 'd3c986',
            '200': 'cec278',
            '300': 'c8bc69',
            '400': 'c3b65b',
            '500': 'beaf4d',
            '600': 'b5a642',
            '700': 'a7993d',
            '800': '988c38',
            '900': '8a7e32',
            'A100': 'f8e24d',
            'A200': 'eed009',
            'A400': 'dbbf08',
            'A700': 'b59e07',
            'contrastDefaultColor': 'dark',
            'contrastLightColors': ['900']

        });
        $mdThemingProvider.definePalette('brownLeather', {
            '50': 'bb8361',
            '100': 'b57853',
            '200': 'ab6e49',
            '300': '9d6543',
            '400': '8f5c3d',
            '500': '805236',
            '600': '724930',
            '700': '64402a',
            '800': '553724',
            '900': '472e1e',
            'A100': 'fd8b43',
            'A200': 'b44802',
            'A400': '8d3802',
            'A700': '662901',
            'contrastDefaultColor': 'light',
            'contrastDarkColors': ['50', '100']

        });

//    var reallyRedMap = $mdThemingProvider.extendPalette('red', {
//        '400': '#E84C3D'
//    });
//    // Register the new color palette map with the name <code>darkGrey</code>
//    $mdThemingProvider.definePalette('darkGrey', darkGreyMap);
//    $mdThemingProvider.definePalette('reallyRed', reallyRedMap);
        // Use that theme for the primary intentions
        $mdThemingProvider.theme('default')
                .primaryPalette('brownLeather')
                .accentPalette('brass');
//            .backgroundPalette('blue-grey');
//    $mdThemingProvider.theme('default')
//            .primaryPalette('grey')
//            .accentPalette('red');
        $routeProvider
                .when('/',
                        {
                            controller: 'HomeCtrl',
                            templateUrl: 'partials/home-view.php'
                        })
                .when('/clients',
                        {
                            controller: 'ClientCtrl',
                            templateUrl: 'partials/client-view.php'
                        })
                .when('/testimonials',
                        {
                            controller: 'TestimonalCtrl',
                            templateUrl: 'partials/testimonials-view.php'
                        })
                .when('/contactUs',
                        {
                            templateUrl: 'partials/contact-us.php'
                        })
                .when('/404',
                        {
                            controller: '',
                            templateUrl: 'partials/404.php'
                        })
                .otherwise({redirectTo: '/404'});

    }]);
cyborgWeb.controller('AppCtrl', ['$scope', '$location',
    function ($scope, $location) {

        var HOME = 0;
        var PORTIFOLIO = 1;
        var TECNOLOGIAS = 2;
        var CLIENTES = 3;
        var DEPOIMENTOS = 4;
        var CONTATO = 5;

        $scope.self = this;
        this.selectedIndex = 0;
        $scope.$watch('self.selectedIndex', function (current) {
            switch (current) {
//                case HOME:
//                    $location.url('/404');
//                    break;
                case CLIENTES:
                    $location.url('/clients');
                    break;
                case DEPOIMENTOS:
                    $location.url('/testimonials');
                    break;
                case CONTATO:
                    $location.url('/contactUs');
                    break;
                default:
                    $location.url('/404');
                    break;
            }
        });
        this.toolbarCondensed = false;

        //listen for the toolbar to be condensed, then set the scope variable
        $scope.$on('$mdToolbarCondensed', function (toolbarElement) {
            this.toolbarCondensed = true;
        });
        //listen for the toolbar to be expanded, then set the scope variable
        $scope.$on('$mdToolbarExpanded', function (toolbarElement) {
            this.toolbarCondensed = false;
        });
    }]);

cyborgWeb.directive("scroll", function($window) {

  return function(scope, element, attrs) {

      /* header DOM element with md-page-header attribute */
      var header = document.querySelector('[md-page-header]');
      /* Store header dimensions to initialize header styling */
      var baseDimensions = header.getBoundingClientRect();
      /* DOM element with md-header-title attribute (title in toolbar) */
      var title = angular.element(document.querySelector('[md-header-title]'));
      /* DOM element with md-header-picture attribute (picture in header) */
      var picture = angular.element(document.querySelector('[md-header-picture]'));
      /* The height of a toolbar by default in Angular Material */
      var legacyToolbarH = 64;
      /* The zoom scale of the toolbar title when it's placed at the bottom of the header picture */
      var titleZoom = 2;
      /* The primary color palette used by Cyborg Devlopers */
      var primaryColor = [128, 82, 54];

      function styleInit() {
          title.css('padding-left', '16px');
          title.css('position', 'relative');
          title.css('transform-origin', '24px');
      }

      function handleStyle(dim) {
          if ((dim.bottom - baseDimensions.top) > legacyToolbarH) {
              title.css('top', ((dim.bottom - baseDimensions.top) - legacyToolbarH) + 'px');
              element.css('height', (dim.bottom - baseDimensions.top) + 'px');
              title.css('transform', 'scale(' + ((titleZoom - 1) * ratio(dim) + 1) + ',' + ((titleZoom - 1) * ratio(dim) + 1) + ')');

          } else {
              title.css('top', '0px');
              element.css('height', legacyToolbarH + 'px');
              title.css('transform', 'scale(1,1)');
          }
          /* Uncomment the line below if you want shadow inside picture (low performance) */
          //element.css('box-shadow', '0 -'+(dim.height*3/4)+'px '+(dim.height/2)+'px -'+(dim.height/2)+'px rgba(0,0,0,'+ratio(dim)+') inset');
      }

      function ratio(dim) {
          var r = (dim.bottom - baseDimensions.top) / dim.height;
          if (r < 0) return 0;
          if (r > 1) return 1;
          return Number(r.toString().match(/^\d+(?:\.\d{0,2})?/));
      }

      styleInit();
      handleStyle(baseDimensions);

      /* Scroll event listener */
      angular.element($window).bind("scroll", function () {
          var dimensions = header.getBoundingClientRect();
          handleStyle(dimensions);
          scope.$apply();
      });

      /* Resize event listener */
      angular.element($window).bind('resize', function () {
          baseDimensions = header.getBoundingClientRect();
          var dimensions = header.getBoundingClientRect();
          handleStyle(dimensions);
          scope.$apply();
      });


  };

});


//        .directive('scroll', ['$window', function ($window) {
//        return function (scope, element, attrs) {
//
//            /* header DOM element with md-page-header attribute */
//            var header = document.querySelector('[md-page-header]');
//
//            /* Store header dimensions to initialize header styling */
//            var baseDimensions = header.getBoundingClientRect();
//
//            /* DOM element with md-header-title attribute (title in toolbar) */
//            var title = angular.element(document.querySelector('[md-header-title]'));
//
//            /* DOM element with md-scroll-tabs attribute (tabs in tollbar) */
//            var tabs = angular.element(document.querySelector('[md-scroll-tabs]'));
//
//            /* The height of a toolbar by default in Angular Material */
//            var legacyToolbarH = 64;
//
//            /* The zoom scale of the toolbar title when it's placed at the top of the header */
//            var titleZoom = 1.5;
//
//            /* The primary color palette used by Angular Material *
//             var primaryColor = [63, 81, 181];
//             */
//
//
//
//            function styleInit() {
//                title.css('padding-left', '16px');
//                title.css('position', 'relative');
//                title.css('transform-origin', '24px');
//                title.css('z-index', '20')
//            }
//            function handleStyle(dim) {
//                if ((dim.bottom - baseDimensions.top) > legacyToolbarH) {
//                    title.css('top', ((dim.bottom - baseDimensions.top) - legacyToolbarH) + 'px');
//                    element.css('height', (dim.bottom - baseDimensions.top) + 'px');
//                    title.css('transform', 'scale(' + ((titleZoom - 1) * ratio(dim) + 1) + ',' + ((titleZoom - 1) * ratio(dim) + 1) + ')');
//
//                } else {
//                    title.css('top', '0px');
//                    element.css('height', legacyToolbarH + 'px');
//                    title.css('transform', 'scale(1,1)');
//                }
//                if ((dim.bottom - baseDimensions.top) < legacyToolbarH * 2 && !fab.hasClass('hide')) {
//                    fab.addClass('hide');
//                }
//                if ((dim.bottom - baseDimensions.top) > legacyToolbarH * 2 && fab.hasClass('hide')) {
//                    fab.removeClass('hide');
//                }
//                /* Uncomment the line below if you want shadow inside picture (low performance) */
//                //element.css('box-shadow', '0 -'+(dim.height*3/4)+'px '+(dim.height/2)+'px -'+(dim.height/2)+'px rgba(0,0,0,'+ratio(dim)+') inset');
//            }
//
//
//            function ratio(dim) {
//                var r = (dim.bottom - baseDimensions.top) / dim.height;
//                if (r < 0)
//                    return 0;
//                if (r > 1)
//                    return 1;
//                return Number(r.toString().match(/^\d+(?:\.\d{0,2})?/));
//            }
//
//            styleInit();
//            handleStyle(baseDimensions);
//
//
//            /* Scroll event listener */
//            angular.element($window).bind("scroll", function () {
//                var dimensions = header.getBoundingClientRect();
//                handleStyle(dimensions);
//                scope.$apply();
//            });
//
//            /* Resize event listener */
//            angular.element($window).bind('resize', function () {
//                baseDimensions = header.getBoundingClientRect();
//                var dimensions = header.getBoundingClientRect();
//                handleStyle(dimensions);
//                scope.$apply();
//            });
//
//        };
//    }]);

cyborgWeb.controller('TestimonalCtrl', function () {
    this.cardNews = [];

    for (var i = 0; i < 100; i++) {
        switch (i % 2) {
            case 0:
                this.cardNews.push(
                        {
                            elevation: false,
                            imagePath: 'imagensWeb/wk.png',
                            headline: 'Omnis lorem',
                            subhead: 'Quo vitae quaeque reformidans ei. ' +
                                    'Mel et labitur officiis referrentur, wisi tempor consequat qui et.' +
                                    'His no justo platonem. At sit affert mollis cotidieque.'
                        });
                break;
            case 1:
                this.cardNews.push(
                        {
                            elevation: false,
                            imagePath: 'imagensWeb/ww.png',
                            headline: 'Vel offendit',
                            subhead: 'Denique detraxit ut duo, ea qui melius vocent.' +
                                    'In mel dicat consul menandri. Nec eu porro quodsi molestie, ' +
                                    'quo tation integre salutatus an. Populo copiosae inimicus ius et, ' +
                                    'qualisque intellegam pri eu, mea animal posidonium ad. ' +
                                    'Mundi fuisset eu mel, ea per molestiae assentior.'
                        });
                break;

        }
    }

    this.splitCards = function (array) {
        var itemSize = 3;
        var splittedItens = {};
        splittedItens.left = [];
        splittedItens.middle = [];
        splittedItens.right = [];
        var arrayLength = array.length;
        for (var i = 0; i < arrayLength; i += itemSize) {
            splittedItens.left.push(array[i]);
            if (array[i + 1] !== undefined) {
                splittedItens.middle.push(array[i + 1]);
                if (array[i + 2] !== undefined) {
                    splittedItens.right.push(array[i + 2]);
                }
            }
        }
        return splittedItens;
    };

    this.splittedCards = this.splitCards(this.cardNews);
});

cyborgWeb.directive('mdTestiCard', function () {
    return {
        restrict: 'E',
        scope: {
            card: '='
        },
        templateUrl: 'partials/md-testi-card.php'
    };
});

cyborgWeb.directive('activateOnScroll', function () {
    return{
        restrict: 'A',
        link: ['$document', function (scope, element, attrs, $document) {

                element.bind('scroll', function () {
                    $document.find();
                });
            }]
    };
});

cyborgWeb.controller('ClientCtrl', ['$scope', function ($scope) {

        $scope.getImageSpansFromPath = function (imagePath)
        {
            var image = new Image();
            var clientImage = {};
            var size = {};
            var ver = size;
            image.onload = function () {
                size.width = this.width;
                size.height = this.height;
            };
            image.src = imagePath;
            clientImage.path = imagePath;
            clientImage = $scope.getSizeSpans(size);
            return clientImage;
        };

        $scope.getSizeSpans = function (size) {
            var spans = {};
            spans.col = size.width / size.height * 12;
            spans.row = size.height / size.width * 12;
            return spans;
        };
        $scope.clients = [
            {
                name: 'Cliente X',
                clientImage: 'imagensWeb/unnamed.png'
            },
            {
                name: 'Cliente Z',
                clientImage: 'imagensWeb/wc.png'
            },
            {
                name: 'Cliente K',
                clientImage: 'imagensWeb/wk.png'
            },
            {
                name: 'Cliente Y',
                clientImage: 'imagensWeb/ww.png'
            }
        ];

    }]);




