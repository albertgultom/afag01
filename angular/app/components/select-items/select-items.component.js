class SelectItemsController{
    constructor(API, $log){
        'ngInject';

        this.API = API;
        this.log = $log;
    }

    $onInit(){
        this.API.all('home').get('').then((response)=>{
            this.log.debug(response);
            this.stages = response[0];
            this.mapels = response[1];
        });
    }
}

export const SelectItemsComponent = {
    templateUrl: './views/app/components/select-items/select-items.component.html',
    controller: SelectItemsController,
    controllerAs: 'vm',
    bindings: {}
}
