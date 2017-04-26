class SelectItemsController{
    constructor(API, $log, $timeout){
        'ngInject';

        this.API = API;
        this.log = $log;
        this.bgClass = '';
        this.mpClass = '';
        this.timeout = $timeout;
    }

    $onInit(){
        this.API.all('home').get('').then((response)=>{
            this.stages = response[0];
            this.mapels = response[1];
        });
        this.stepClass = 'stages';
    }

    stageAnimate(sg,bg){
        this.stepClass = 'mapels';
        this.bgClass = bg;
        this.sgClass = sg;
    }

    mapelAnimate(mp){
        this.stepClass = 'options';
        this.mpClass = mp;
        this.options = [
            {name:'Bank Soal', icon:'fa-list', action:'soal'},
            {name:'Ebook Soal', icon:'fa-book', action:'ebook'},
            {name:'Tryout / Olimpiade', icon:'fa-pencil-square', action:'tryout'},
            {name:'Kuis / Ulangan Harian', icon:'fa-file-text', action:'kuis'},
            {name:'UJian / UN', icon:'fa-graduation-cap', action:'ujian'},
        ];
    }

    getAction(data){
        this.log.debug(this.sgClass);
        this.log.debug(this.mpClass);
        this.log.debug(data);
    }

    goBack(response){
        this.stepClass = response;
    }
}

export const SelectItemsComponent = {
    templateUrl: './views/app/components/select-items/select-items.component.html',
    controller: SelectItemsController,
    controllerAs: 'vm',
    bindings: {}
}
