<template>
    <div class="generator--selector--wrap">
        <div class="generator--selector">
            <div class="selectlist selectlist--algemeen">
                <h3>Algemeen</h3>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Inleiding op onderzoek' } "
                    @click=" toggleAlgemeen('Inleiding op onderzoek'); toggleInleiding() "
                >
                    Inleiding op onderzoek <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Toelichting op sectoren' } "
                    @click=" toggleAlgemeen('Toelichting op sectoren'); toggleToelichtingenSectoren() "
                >
                    Toelichting op sectoren <br>
                    <span v-if=" activealgemeen == 'Toelichting op sectoren' " class="algemeenitem--toelichting">Selecteer één of meer sectoren</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Beschrijving van functies' } "
                    @click=" toggleAlgemeen('Beschrijving van functies') ; toggleBeschrijvingFuncties() "
                >
                    Beschrijving van functies <br>
                    <span v-if=" activealgemeen == 'Beschrijving van functies' " class="algemeenitem--toelichting">Selecteer één of meer functies</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Uitwerking van functies per sector' } "
                    @click=" toggleAlgemeen('Uitwerking van functies per sector') "
                >
                    Uitwerking van functies per sector <br>
                    <span v-if=" activealgemeen == 'Uitwerking van functies per sector' " class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Uitwerking van sectoren per functie' } "
                    @click=" toggleAlgemeen('Uitwerking van sectoren per functie') "
                >
                    Uitwerking van sectoren per functie <br>
                    <span v-if=" activealgemeen == 'Uitwerking van sectoren per functie' " class="algemeenitem--toelichting">Selecteer sectoren en functies</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Beschouwing van functies' } "
                    @click=" toggleAlgemeen('Beschouwing van functies'); toggleBeschouwingFuncties() "
                >
                    Beschouwing van functies <br>
                    <span v-if=" activealgemeen == 'Beschouwing van functies' " class="algemeenitem--toelichting">Selecteer één of meer functies</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Prioritisering per sector' } "
                    @click=" toggleAlgemeen('Prioritisering per sector'); togglePrioritiseringSector() "
                >
                    Prioritisering per sector <br>
                    <span v-if=" activealgemeen == 'Prioritisering per sector' " class="algemeenitem--toelichting">Selecteer één of meer sectoren</span>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Slotbeschouwing' } "
                    @click=" toggleAlgemeen('Slotbeschouwing'); toggleSlotbeschouwing() "
                >
                    Slotbeschouwing <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Deelnemers werksessies' } "
                    @click=" toggleAlgemeen('Deelnemers werksessies'); toggleDeelnemersWerksessies() "
                >
                    Deelnemers werksessies <br>
                </button><br>
                Speciale selecties <br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Compleet rapport naar sectoren' } "
                    @click=" toggleAlgemeen('Compleet rapport naar sectoren'); toggleRapportNaarSectoren() "
                >
                    Compleet rapport naar sectoren <br>
                </button><br>
                <button class="fauxlabel algemeenitem" 
                    :class=" { 'active': activealgemeen == 'Compleet rapport naar functies' } "
                    @click=" toggleAlgemeen('Compleet rapport naar functies'); toggleRapportNaarFuncties() "
                >
                    Compleet rapport naar functies <br>
                </button><br>
            </div>
            <div class="selectlist">
                <h3>Sector</h3>
                <button class="fauxlabel"
                    @click="toggleReadAllSectors"
                    :class="{ 'active--dark' : isReadAllSectorsActive }"
                    :disabled="isSectorsDisabled"
                >
                    Read all
                </button> 
                <button class="fauxlabel" 
                    v-for="sector in sectors"
                    @click="toggleActiveSector(sector)"
                    :class="{ active : isActiveSector(sector) }" 
                    :disabled="isSectorsDisabled"
                >
                    {{ sector.title }}
                </button><br>
            </div>
            <div class="selectlist">
                <h3>Functie</h3>
                <button class="fauxlabel"
                    @click="toggleReadAllFuncties"
                    :class="{ 'active--dark' : isReadAllFunctiesActive }"
                    :disabled="isFunctiesDisabled"
                >
                    Read all
                </button>
                <button class="fauxlabel" 
                    v-for="functie in functies"
                    @click="toggleActiveFunctie(functie)"
                    :class="{ active : isActiveFunctie(functie) }"
                    :disabled="isFunctiesDisabled"
                >
                    {{ functie.title }}
                </button><br>
            </div>
        </div>
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
                activealgemeen: {},
                isReadAllSectorsActive: false,
                isReadAllFunctiesActive: false,
                isSectorsDisabled: false,
                isFunctiesDisabled: false,
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.getSectors();
            this.getFuncties();
        },


        computed: {
        },

        methods: {
            isActiveSector: function(sector) {
                return this.activesectors.includes(sector);
            },
            isActiveFunctie: function(functie) {
                return this.activefuncties.includes(functie);
            },
            toggleAlgemeen: function(algemeen) {
                this.isSectorsDisabled = false;
                this.isFunctiesDisabled = false;
                if(this.activealgemeen == algemeen){
                    this.activealgemeen = {};
                } else {
                    this.activealgemeen = algemeen;
                }
            },
            toggleActiveSector: function(sector){
                if (this.activesectors.includes(sector)) {
                    if(this.isReadAllSectorsActive) {
                        this.isReadAllSectorsActive = false;
                    };
                    this.activesectors.splice(this.activesectors.indexOf(sector), 1);
                } else {
                    this.activesectors.push(sector);
                }
            },
            disableSectors: function () {
                this.activesectors = [];
                this.isSectorsDisabled = true;
            },
            disableFuncties: function () {
                this.activefuncties = [];
                this.isFunctiesDisabled = true;
            },
            toggleActiveFunctie: function(functie){
                if (this.activefuncties.includes(functie)) {
                    if(this.isReadAllFunctiesActive) {
                        this.isReadAllFunctiesActive = false;
                    }
                    this.activefuncties.splice(this.activefuncties.indexOf(functie), 1);
                } else {
                    this.activefuncties.push(functie);
                }
            },
            toggleReadAllSectors: function () {
                if( ! this.isReadAllSectorsActive ) {
                    this.activesectors = this.sectors.slice();
                } else {
                    this.activesectors = [];    
                }
                this.isReadAllSectorsActive = ! this.isReadAllSectorsActive;
            },
            toggleReadAllFuncties: function () {
                if ( ! this.isReadAllFunctiesActive ) {
                    this.activefuncties = this.functies.slice();
                } else {
                    this.activefuncties = [];
                }
                this.isReadAllFunctiesActive = ! this.isReadAllFunctiesActive;
            },
            toggleInleiding: function () {
                if ( this.activealgemeen == 'Inleiding op onderzoek' ) {
                    this.disableFuncties();
                    this.disableSectors();
                }
            },
            toggleToelichtingenSectoren: function () {
                if ( this.activealgemeen == 'Toelichting op sectoren' ) {
                    this.disableFuncties();
                }
            },
            toggleBeschrijvingFuncties: function () {
                if ( this.activealgemeen == 'Beschrijving van functies' ) {
                    this.disableSectors();
                }
            },
            toggleBeschouwingFuncties: function () {
                if ( this.activealgemeen == 'Beschouwing van functies' ) {
                    this.disableSectors();
                }
            },
            togglePrioritiseringSector: function () {
                if ( this.activealgemeen == 'Prioritisering per sector' ) {
                    this.disableFuncties();
                }
            },
            toggleDeelnemersWerksessies: function () {
                if ( this.activealgemeen == 'Deelnemers werksessies' ) {
                    this.disableFuncties();
                    this.disableSectors();
                }
            },
            toggleSlotbeschouwing: function () {
                if ( this.activealgemeen == 'Slotbeschouwing' ) {
                    this.disableFuncties();
                    this.disableSectors();
                }
            },
            toggleRapportNaarFuncties: function () {
                if ( this.activealgemeen == 'Compleet rapport naar functies' ) {
                    this.disableFuncties();
                    this.disableSectors();
                }
            },
            toggleRapportNaarSectoren: function () {
                if ( this.activealgemeen == 'Compleet rapport naar sectoren' ) {
                    this.disableFuncties();
                    this.disableSectors();
                }
            },
            getSectors: function () {
                var home = this;
                axios.get('/api/sector')
                    .then(function(response){
                        home.sectors = response.data;
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
                    })
                    .catch(function(error){
                        console.log(error);
                    });
            },
        }
    }
</script>
