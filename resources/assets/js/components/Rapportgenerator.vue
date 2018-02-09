<template>
    <div class="generator--wrap">
        <div class="generator--selector--wrap">
            <div class="generator--selector">
                <div class="selectlist selectlist--algemeen">
                    <h3>Algemeen</h3>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        :class=" { 'active': modusalgemeen == 'Uitwerking van functies per sector' } "
                        @click=" toggleModusAlgemeen('Uitwerking van functies per sector') "
                    >
                        Uitwerking van functies per sector <br>
                        <span class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                    </button><br>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        :class=" { 'active': modusalgemeen == 'Uitwerking van sectoren per functie' } "
                        @click=" toggleModusAlgemeen('Uitwerking van sectoren per functie') "
                    >
                        Uitwerking van sectoren per functie <br>
                        <span class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                    </button><br>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        :class=" { 'active--dark': isRapportCompleetNaarSectoren } "
                        @click=" toggleRapportNaarSectoren() "
                    >
                        Compleet rapport naar sectoren <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        :class=" { 'active--dark': isRapportCompleetNaarFuncties } "
                        @click=" toggleRapportNaarFuncties() "
                    >
                        Compleet rapport naar functies <br>
                    </button><br>
                    
                    <h4 class="subhead--table"> Speciale selecties</h4>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Inleiding op onderzoek') && isAModeSelected } "
                        @click=" toggleAlgemeen('Inleiding op onderzoek') "
                        :disabled=" ! isAModeSelected "
                    >
                        Inleiding op onderzoek <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Toelichting op sectoren') && isAModeSelected } "
                        @click=" toggleAlgemeen('Toelichting op sectoren') "
                        :disabled=" ! isAModeSelected "
                    >
                        Toelichting op sectoren <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Beschrijving van functies') && isAModeSelected } "
                        @click=" toggleAlgemeen('Beschrijving van functies') "
                        :disabled=" ! isAModeSelected "
                    >
                        Beschrijving van functies <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Beschouwing van functies') && isAModeSelected } "
                        @click=" toggleAlgemeen('Beschouwing van functies'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Beschouwing van functies <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Prioritering van functies') && isAModeSelected } "
                        @click=" toggleAlgemeen('Prioritering van functies'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Prioritering van functies <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Bronnen') && isAModeSelected } "
                        @click=" toggleAlgemeen('Bronnen'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Bronnen <br>
                    </button><br>                    
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Deelnemers werksessies') && isAModeSelected } "
                        @click=" toggleAlgemeen('Deelnemers werksessies'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Deelnemers werksessies <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Slotbeschouwing') && isAModeSelected } "
                        @click=" toggleAlgemeen('Slotbeschouwing'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Slotbeschouwing <br>
                    </button><br>
                </div>
                <div class="selectlist">
                    <h3>Sector</h3>
                    <button class="fauxlabel"
                        @click="toggleReadAllSectors"
                        :class="{ 'active--dark' : ! isSectorsDisabled && activesectors.length == 11}"
                        :disabled="isSectorsDisabled"
                    >
                        READ ALL
                    </button> 
                    <button class="fauxlabel" 
                        v-for="sector in sectors"
                        @click="toggleActiveSector(sector)"
                        :class="{ active : isActiveSector(sector) && ! isSectorsDisabled }" 
                        :disabled="isSectorsDisabled"
                    >
                        {{ sector.title }}
                    </button><br>
                </div>
                <div class="selectlist">
                    <h3>Functie</h3>
                    <button class="fauxlabel"
                        @click="toggleReadAllFuncties"
                        :class="{ 'active--dark' : ! isFunctiesDisabled && activefuncties.length == 7 }"
                        :disabled="isFunctiesDisabled"
                    >
                        READ ALL
                    </button>
                    <button class="fauxlabel" 
                        v-for="functie in functies"
                        @click="toggleActiveFunctie(functie)"
                        :class="{ active : isActiveFunctie(functie) && ! isFunctiesDisabled }"
                        :disabled="isFunctiesDisabled"
                    >
                        {{ functie.title }}
                    </button><br>
                </div>
            </div>
        </div>


        <rapportresultaten
            :activesectors="activesectors"
            :activefuncties="activefuncties"
            :modusalgemeen="modusalgemeen"
            :activealgemeen="activealgemeen"
            :isAModeSelected="isAModeSelected"
            :specials="specials"
            :toelichtingsectors="activetoelichtingsectors"
            :beschrijvingfuncties="activebeschrijvingfuncties"
            :beschouwingfuncties="activebeschouwingfuncties"
            :prioriteringfuncties="activeprioriteringfuncties"
            :deelnemerswerksessies="deelnemerswerksessies"
            :bronnen="activebronnen"
        >    
        </rapportresultaten>
    </div>
</template>

<script>

    export default {
        props: [],

        data() {
            return {
                sectors: [],
                activesectors: [],
                functies: [],
                activefuncties: [],
                algemeen: [
                    'Inleiding op onderzoek', 
                    'Toelichting op sectoren', 
                    'Beschrijving van functies', 
                    'Beschouwing van functies', 
                    'Prioritering van functies', 
                    'Bronnen',
                    'Deelnemers werksessies',
                    'Slotbeschouwing', 
                ],
                activealgemeen: [],
                modusalgemeen: {},
                isReadAllSectorsActive: false,
                isReadAllFunctiesActive: false,
                isAModeSelected: false,
                specials: [],
                toelichtingsectors: [], 
                activetoelichtingsectors: [], 
                beschrijvingfuncties: [],
                activebeschrijvingfuncties: [],
                beschouwingfuncties: [],
                activebeschouwingfuncties: [],
                prioriteringfuncties: [],
                activeprioriteringfuncties: [],
                deelnemerswerksessies: [],
                bronnen: [],
                activebronnen: [],
            }
        },

        mounted() {
            this.getSectors();
            this.getFuncties();
            this.getSpecials();
            this.getToelichtingSectors();
            this.getBeschrijvingFuncties();
            this.getBeschouwingFuncties();
            this.getPrioriteringFuncties();
            this.getDeelnemersWerksessies();
            this.getBronnen();
        },


        computed: {
            isRapportCompleetNaarSectoren: function() {
                var specials = this.algemeen.length == this.activealgemeen.length ? true : false;
                var sectors = this.sectors.length == this.activesectors.length ? true : false;
                var functies = this.functies.length == this.activefuncties.length ? true : false;
                var modus = this.modusalgemeen == 'Uitwerking van functies per sector';
                return specials && sectors && functies && modus;
            },
            isRapportCompleetNaarFuncties: function() {
                var specials = this.algemeen.length == this.activealgemeen.length ? true : false;
                var sectors = this.sectors.length == this.activesectors.length ? true : false;
                var functies = this.functies.length == this.activefuncties.length ? true : false;
                var modus = this.modusalgemeen == 'Uitwerking van sectoren per functie';
                return specials && sectors && functies && modus;
            },
            isSectorsDisabled: function() {
                if ( this.modusalgemeen == 'Uitwerking van functies per sector' ) {
                    return false;
                } else if ( this.modusalgemeen == 'Uitwerking van sectoren per functie' && this.activefuncties.length > 0 ) {
                    return false;
                }
                return true;
            },
            isFunctiesDisabled: function() {
                if ( this.modusalgemeen == 'Uitwerking van sectoren per functie' ) {
                    return false;
                } else if ( this.modusalgemeen == 'Uitwerking van functies per sector' && this.activesectors.length > 0 ) {
                    return false;
                } 
                return true;
            },         
        },

        methods: {
            isActiveSector: function(sector) {
                return sector.active;
            },
            isActiveFunctie: function(functie) {
                return functie.active;
            },
            toggleModusAlgemeen: function(algemeen) {
                if(this.modusalgemeen == algemeen){
                    this.modusalgemeen = {};
                    this.isAModeSelected = false;
                } else {
                    this.modusalgemeen = algemeen;
                    this.isAModeSelected = true;
                }
            },
            toggleAlgemeen: function(algemeen) {
                if(this.activealgemeen.includes(algemeen)){
                    this.activealgemeen.splice(this.activealgemeen.indexOf(algemeen), 1);
                } else {
                    var temparray = this.activealgemeen.slice(0);
                    this.activealgemeen = [];
                    temparray.push(algemeen);
                    var home = this;
                    this.algemeen.forEach(function(basealgemeen) {
                        if(temparray.includes(basealgemeen)){
                            home.activealgemeen.push(basealgemeen);
                        }
                    });
                }
            },
            toggleActiveSector: function(sector){
                sector.active = !sector.active;
                if (this.activesectors.includes(sector)) {
                    this.activetoelichtingsectors.splice(this.activesectors.indexOf(sector), 1);
                    this.activeprioriteringfuncties.splice(this.activesectors.indexOf(sector), 1);
                    this.activebronnen.splice(this.activesectors.indexOf(sector), 1);
                    this.activesectors.splice(this.activesectors.indexOf(sector), 1);
                } else {
                    this.activesectors.push(sector);
                    this.activetoelichtingsectors.push(this.toelichtingsectors[sector.id - 1]);
                    this.activeprioriteringfuncties.push(this.prioriteringfuncties[sector.id - 1]);
                    this.activebronnen.push(this.bronnen[sector.id - 1]);
                }
                this.sortActiveSectors();
                this.sortActiveToelichtingSectors();
                this.sortActivePrioriteringFuncties();
                this.sortActiveBronnen();
            },
            sortActiveSectors: function() {
                var temparray = this.activesectors.slice(0);
                this.activesectors = [];
                var counter = 1;
                var home = this;
                this.sectors.forEach(function(basesector) {
                    if(temparray.includes(basesector)){
                        basesector.count = counter;
                        home.activesectors.push(basesector);
                        counter++;
                    }
                })
            },
            toggleActiveFunctie: function(functie){
                functie.active = ! functie.active;
                if (this.activefuncties.includes(functie)) {
                    this.activebeschrijvingfuncties.splice(this.activefuncties.indexOf(functie), 1);
                    this.activebeschouwingfuncties.splice(this.activefuncties.indexOf(functie), 1);
                    this.activefuncties.splice(this.activefuncties.indexOf(functie), 1);
                } else {
                    this.activefuncties.push(functie);
                    this.activebeschrijvingfuncties.push(this.beschrijvingfuncties[functie.id - 1])
                    this.activebeschouwingfuncties.push(this.beschouwingfuncties[functie.id - 1])
                }
                this.sortActiveFuncties();
                this.sortActiveBeschrijvingFuncties();
                this.sortActiveBeschouwingFuncties();
            },
            sortActiveFuncties: function() {
                var temparray = this.activefuncties.slice(0);
                this.activefuncties = [];
                var counter = 1;
                var home = this;
                this.functies.forEach(function(basefunctie) {
                    if(temparray.includes(basefunctie)){
                        basefunctie.count = counter;
                        home.activefuncties.push(basefunctie);
                        counter ++;
                    }
                } );
            },
            toggleReadAllSectors: function () {
                console.log('toggling sectors');
                if( ! this.isReadAllSectorsActive ) {
                    this.activesectors = this.sectors.slice();
                    this.activetoelichtingsectors = this.toelichtingsectors.slice();
                    this.activeprioriteringfuncties = this.prioriteringfuncties.slice();
                    this.activebronnen = this.bronnen.slice();
                } else {
                    this.activesectors = [];    
                    this.activetoelichtingsectors = [];
                    this.prioriteringfuncties = [];
                }
                this.sortActiveSectors();
                this.sortActiveToelichtingSectors();
                this.sortActivePrioriteringFuncties();
                this.sortActiveBronnen();
                this.isReadAllSectorsActive = ! this.isReadAllSectorsActive;
                var truuthy = this.isReadAllSectorsActive;
                this.sectors.forEach(function(sector){
                    sector.active = truuthy;
                    console.log(sector.active);
                })
            },
            toggleReadAllFuncties: function () {
                if ( ! this.isReadAllFunctiesActive ) {
                    this.activefuncties = this.functies.slice();
                    this.activebeschrijvingfuncties = this.beschrijvingfuncties.slice();
                    this.activebeschouwingfuncties = this.beschouwingfuncties.slice();
                } else {
                    this.activefuncties = [];
                    this.activebeschrijvingfuncties = [];
                    this.activebeschouwingfuncties = [];
                }
                this.sortActiveFuncties();
                this.sortActiveBeschrijvingFuncties();
                this.sortActiveBeschouwingFuncties();
                this.isReadAllFunctiesActive = ! this.isReadAllFunctiesActive;
                var truuthy = this.isReadAllFunctiesActive;
                this.functies.forEach(function(functie){
                    functie.active = truuthy;
                });
            },
            activateAllAlgemeen: function () {
                this.activealgemeen = this.algemeen.slice();
            },
            activateAllSectors: function () {
                this.isReadAllSectorsActive = true;
                this.activesectors = this.sectors.slice();
                this.activetoelichtingsectors = this.toelichtingsectors.slice();
                this.activeprioriteringfuncties = this.prioriteringfuncties.slice();
                this.activebronnen = this.bronnen.slice();
                this.sortActiveSectors();
                this.sortActiveToelichtingSectors();
                this.sortActivePrioriteringFuncties();
                this.sortActiveBronnen();
                this.sectors.forEach(function(sector){
                    sector.active = true;
                })
            },
            activateAllFuncties: function () {
                this.isReadAllFunctiesActive = true;
                this.activefuncties = this.functies.slice();
                this.activebeschrijvingfuncties = this.beschrijvingfuncties.slice()
                this.activebeschouwingfuncties = this.beschouwingfuncties.slice()
                this.sortActiveFuncties();
                this.sortActiveBeschrijvingFuncties();
                this.sortActiveBeschouwingFuncties();
                this.functies.forEach(function(functie){
                    functie.active = true;
                });
            },
            toggleRapportNaarSectoren: function () {
                this.activateAllAlgemeen();
                this.modusalgemeen = 'Uitwerking van functies per sector';
                this.activateAllSectors();
                this.activateAllFuncties();
                this.isAModeSelected = true;
            },
            toggleRapportNaarFuncties: function () {
                this.activateAllAlgemeen();
                this.modusalgemeen = 'Uitwerking van sectoren per functie';
                this.activateAllFuncties();
                this.activateAllSectors();
                this.isAModeSelected = true;
            },
            getSectors: function () {
                var home = this;
                axios.get('/api/sector')
                    .then(function(response){
                        home.sectors = response.data;
                        home.sectors.forEach(function(sector){
                            sector.active = false;
                        });
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            getFuncties: function () {
                var home = this;
                axios.get('api/functie')
                    .then(function(response){
                        home.functies = response.data;
                        home.functies.forEach(function(functie){
                            functie.active = false;
                        });
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            getSpecials: function () {
                var home = this;
                axios.get('/api/specials')
                    .then(function(response){
                        home.specials = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            getToelichtingSectors: function () {
                var home = this;
                axios.get('/api/toelichtingsectors')
                    .then(function(response){
                        home.toelichtingsectors = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            sortActiveToelichtingSectors: function () {
                var temparray = this.activetoelichtingsectors.slice(0);
                this.activetoelichtingsectors = [];
                var counter = 1;
                var home = this;
                this.toelichtingsectors.forEach(function(basesector) {
                    if(temparray.includes(basesector)){
                        basesector.count = counter;
                        home.activetoelichtingsectors.push(basesector);
                        counter++;
                    }
                })
            },
            getBeschrijvingFuncties: function() {
                var home = this;
                axios.get('/api/beschrijvingfuncties')
                    .then(function(response){
                        home.beschrijvingfuncties = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });                
            },            
            sortActiveBeschrijvingFuncties: function () {
                var temparray = this.activebeschrijvingfuncties.slice(0);
                this.activebeschrijvingfuncties = [];
                var counter = 1;
                var home = this;
                this.beschrijvingfuncties.forEach(function(basefunctie) {
                    if(temparray.includes(basefunctie)){
                        basefunctie.count = counter;
                        home.activebeschrijvingfuncties.push(basefunctie);
                        counter++;
                    }
                })
            },
            getBeschouwingFuncties: function() {
                var home = this;
                axios.get('/api/beschouwingfuncties')
                    .then(function(response){
                        home.beschouwingfuncties = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            sortActiveBeschouwingFuncties: function () {
                var temparray = this.activebeschouwingfuncties.slice(0);
                this.activebeschouwingfuncties = [];
                var counter = 1;
                var home = this;
                this.beschouwingfuncties.forEach(function(basefunctie) {
                    if(temparray.includes(basefunctie)){
                        basefunctie.count = counter;
                        home.activebeschouwingfuncties.push(basefunctie);
                        counter++;
                    }
                })
            },            
            getPrioriteringFuncties: function() {
                var home = this;
                axios.get('/api/prioriteringfuncties')
                    .then(function(response){
                        home.prioriteringfuncties = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            sortActivePrioriteringFuncties: function () {
                var temparray = this.activeprioriteringfuncties.slice(0);
                this.activeprioriteringfuncties = [];
                var counter = 1;
                var home = this;
                this.prioriteringfuncties.forEach(function(basesector) {
                    if(temparray.includes(basesector)){
                        basesector.count = counter;
                        home.activeprioriteringfuncties.push(basesector);
                        counter++;
                    }
                })
            },            
            getDeelnemersWerksessies: function() {
                var home = this;
                axios.get('/api/bijlages')
                    .then(function(response){
                        home.deelnemerswerksessies = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },    
            getBronnen: function() {
                var home = this;
                axios.get('/api/bronnen')
                    .then(function(response){
                        home.bronnen = response.data;
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
            sortActiveBronnen: function () {
                var temparray = this.activebronnen.slice(0);
                this.activebronnen = [];
                var counter = 1;
                var home = this;
                this.bronnen.forEach(function(basesector) {
                    if(temparray.includes(basesector)){
                        basesector.count = counter;
                        home.activebronnen.push(basesector);
                        counter++;
                    }
                })
            }, 
        }
    }
</script>
