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

        this.API.all('soal').get('',{mapel, stage}).then((res) => {
           this.pgSoals = res[0];
           this.esSoals = res[1];
           this.mapel = res[2];
           this.log.debug(res);
        });
    }
}

export const SoalListComponent = {
    templateUrl: './views/app/components/soal-list/soal-list.component.html',
    controller: SoalListController,
    controllerAs: 'vm',
    bindings: {}
}
