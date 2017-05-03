class SoalListController{
    constructor(API, $log, $state, $filter){
        'ngInject';

        this.API = API;
        this.log = $log;
        this.state = $state;
        this.filter = $filter;
    }

    $onInit(){
        let mapel = this.state.params.mapel;
        let stage = this.state.params.stage;
        let show  = 10;

        this.API.all('soal').get('pg',{mapel, stage, show}).then((res) => {
           this.pgSoals = res.data;
           // this.log.debug(res);
        });

        this.API.all('soal').get('es',{mapel, stage, show}).then((res) => {
           this.esSoals = res.data;
           // this.log.debug(res);
        });
    }
}

export const SoalListComponent = {
    templateUrl: './views/app/components/soal-list/soal-list.component.html',
    controller: SoalListController,
    controllerAs: 'vm',
    bindings: {}
}
