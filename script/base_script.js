var app = angular.module('toolbarDemo1', ['ngMaterial']);
app.config(function ($mdThemingProvider) {
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
});
app.controller('AppCtrl', function ($scope) {
});




