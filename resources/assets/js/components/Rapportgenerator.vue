<template>
    <div class="generator--wrap">
        <div class="generator--selector--wrap">
            <div class="generator--selector">
                <div class="selectlist selectlist--algemeen">
                    <h3>Algemeen</h3>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        :class=" { 'active--dark': modusalgemeen == 'Uitwerking van functies per sector' } "
                        @click=" toggleModusAlgemeen('Uitwerking van functies per sector') "
                    >
                        Uitwerking van functies per sector <br>
                        <span class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                    </button><br>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        :class=" { 'active--dark': modusalgemeen == 'Uitwerking van sectoren per functie' } "
                        @click=" toggleModusAlgemeen('Uitwerking van sectoren per functie') "
                    >
                        Uitwerking van sectoren per functie <br>
                        <span class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                    </button><br>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
                        @click=" toggleRapportNaarSectoren() "
                    >
                        Compleet rapport naar sectoren <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem algemeenitem--modus" 
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
                        :class=" { 'active': activealgemeen.includes('Slotbeschouwing') && isAModeSelected } "
                        @click=" toggleAlgemeen('Slotbeschouwing'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Slotbeschouwing <br>
                    </button><br>
                    <button class="fauxlabel algemeenitem" 
                        :class=" { 'active': activealgemeen.includes('Deelnemers werksessies') && isAModeSelected } "
                        @click=" toggleAlgemeen('Deelnemers werksessies'); "
                        :disabled=" ! isAModeSelected "
                    >
                        Deelnemers werksessies <br>
                    </button><br>
                </div>
                <div class="selectlist">
                    <h3>Sector</h3>
                    <button class="fauxlabel"
                        @click="toggleReadAllSectors"
                        :class="{ 'active--dark' : isReadAllSectorsActive && ! isSectorsDisabled && activesectors.length == 11}"
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
                        :class="{ 'active--dark' : isReadAllFunctiesActive && ! isFunctiesDisabled && activefuncties.length == 7 }"
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
                    'Slotbeschouwing', 
                    'Deelnemers werksessies'
                ],
                activealgemeen: [],
                modusalgemeen: {},
                isReadAllSectorsActive: false,
                isReadAllFunctiesActive: false,
                isAModeSelected: false,
            }
        },

        mounted() {
            this.getSectors();
            this.getFuncties();
        },


        computed: {
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
                    this.activesectors.splice(this.activesectors.indexOf(sector), 1);
                } else {
                    var temparray = this.activesectors.slice(0);
                    this.activesectors = [];
                    temparray.push(sector);
                    var home = this;
                    this.sectors.forEach(function(basesector) {
                        if(temparray.includes(basesector)){
                            home.activesectors.push(basesector);
                        }
                    })
                }
            },
            toggleActiveFunctie: function(functie){
                functie.active = ! functie.active;
                if (this.activefuncties.includes(functie)) {
                    this.activefuncties.splice(this.activefuncties.indexOf(functie), 1);
                } else {
                    // Add to this.activefuncties, but maintain the order of functies
                    var temparray = this.activefuncties.slice(0);
                    this.activefuncties = [];
                    temparray.push(functie);
                    var home = this;
                    this.functies.forEach(function(basefunctie) {
                        if(temparray.includes(basefunctie)){
                            home.activefuncties.push(basefunctie);
                        }
                    } );
                }
            },
            toggleReadAllSectors: function () {
                console.log('toggling sectors');
                if( ! this.isReadAllSectorsActive ) {
                    this.activesectors = this.sectors.slice();
                } else {
                    this.activesectors = [];    
                }
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
                } else {
                    this.activefuncties = [];
                }
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
                this.sectors.forEach(function(sector){
                    sector.active = true;
                })
            },
            activateAllFuncties: function () {
                this.activefuncties = this.functies.slice();
                this.isReadAllFunctiesActive = true;
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
        }
    }
</script>
