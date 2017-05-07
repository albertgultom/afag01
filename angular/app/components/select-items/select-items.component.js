class SelectItemsController{
    constructor(API, $log, $state){
        'ngInject';

        this.API = API;
        this.log = $log;
        this.state = $state;
    }

    $onInit(){
        this.API.all('home').get('').then((response)=>{
            this.stages = response[0];
            this.mapels = response[1];
            // this.log.debug(this.mapels);
        });
        this.stepClass = 'stages';
        this.bgClass = '';
        this.mpClass = '';

    }

    stageAnimate(id, sg, bg){
        this.stepClass = 'mapels';
        this.bgClass = bg;
        this.sgClass = sg;
        this.idStage = id;
    }

    mapelAnimate(id, mp){
        this.stepClass = 'options';
        this.mpClass = mp;
        this.idMapel = id;
        this.options = [
            {name:'Bank Soal', icon:'fa-list', action:'soal'},
            {name:'Ebook Soal', icon:'fa-book', action:'ebook'},
            {name:'Tryout / Olimpiade', icon:'fa-pencil-square', action:'tryout'},
            {name:'Kuis / Ulangan Harian', icon:'fa-file-text', action:'kuis'},
            {name:'UJian / UN', icon:'fa-graduation-cap', action:'ujian'},
        ];
    }

    getAction(data){
        this.state.go('app.soal', {mapel: this.idMapel, stage: this.idStage});
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
