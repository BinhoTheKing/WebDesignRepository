var app = angular.module('toolbarDemo1', ['ngMaterial']);
app.config(function ($mdThemingProvider) {
//    // Extend the red theme with a few different colors
//    var darkGreyMap = $mdThemingProvider.extendPalette('grey', {
//        '100': '#595959',
//        '500': '#3D3D3D',
//        '700': '#474747',
//        'contrastDefaultColor': 'light',
//        'contrastDarkColors': ['100']
//        
//    });
//    
//    var reallyRedMap = $mdThemingProvider.extendPalette('red',{
//       '400' : '#E84C3D'
//    });
//    // Register the new color palette map with the name <code>darkGrey</code>
//    $mdThemingProvider.definePalette('darkGrey', darkGreyMap);
//    $mdThemingProvider.definePalette('reallyRed', reallyRedMap);
//    // Use that theme for the primary intentions
//    $mdThemingProvider.theme('default')
//            .primaryPalette('darkGrey')
//            .accentPalette('reallyRed');
    $mdThemingProvider.theme('default')
            .primaryPalette('grey')
            .accentPalette('red');
});
app.controller('AppCtrl', function ($scope) {
});




