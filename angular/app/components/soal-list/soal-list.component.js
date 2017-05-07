class SoalListController{
    constructor(API, $log, $state, $filter){
        'ngInject';

        this.API = API;
        this.log = $log;
        this.state = $state;
        this.filter = $filter;
        this.conditions = {};
    }

    $onInit(){
        this.conditions = {
            mapel: this.state.params.mapel,
            stage: this.state.params.stage,
            show: 10,
            type: 1,
            page: 2,
        };

        this.API.all('mapel').get(this.conditions.mapel).then((res) => {
           this.mapel = res.fullname;
           this.log.debug(res);
        });

        this.API.all('soal').get('', this.conditions).then((res) => {
           this.pgSoals = res.data;
        });

        this.conditions.type = 2;
        this.API.all('soal').get('', this.conditions).then((res) => {
           this.esSoals = res.data;
        });
    }
}

export const SoalListComponent = {
    templateUrl: './views/app/components/soal-list/soal-list.component.html',
    controller: SoalListController,
    controllerAs: 'vm',
    bindings: {}
}
