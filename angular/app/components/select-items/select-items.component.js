class SelectItemsController{
    constructor(API, $log, $timeout){
        'ngInject';

        this.API = API;
        this.log = $log;
        this.timeout = $timeout;
    }

    $onInit(){
        this.API.all('home').get('').then((response)=>{
            this.stages = response[0];
            this.mapels = response[1];
        });
    }

    stageAnimate(sg,bg){
        this.stageClass = true;
        this.bgClass = bg;
        this.sgClass = sg;
    }

    mapelAnimate(){
        this.stageClass = false;
    }
}

export const SelectItemsComponent = {
    templateUrl: './views/app/components/select-items/select-items.component.html',
    controller: SelectItemsController,
    controllerAs: 'vm',
    bindings: {}
}
