class FadeEntranceController{
    constructor($animate){
        'ngInject';

        this.animate = $animate;
    }
}

export function FadeEntranceDirective(){
    return {
        controller: FadeEntranceController,
        restrict: 'A',
        link: function(scope, element, attrs, controllers, $animate){
            scope.$on('box-large:hide',function(){
                $animate.enter(element);
            });
        }
    }
}
