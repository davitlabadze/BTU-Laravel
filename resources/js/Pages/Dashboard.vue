<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="flex">
                        <div class="w-1/2">left side</div>
                        <div class="w-1/2">
                            <div class="p-2 rounded shadow">
                                <h3 class="mt-2 text-xl text-center text-indigo-500">Visited Coutry</h3>
                                <div class="flex p-6 bg-white border-b border-gray-200">
                                   <div class="flex">
                                        <Select2
                                        class=" w-96"
                                        v-model="SelectedVisitedCuntry"
                                        :settings="{
                                            width:'100%',
                                            ajax: {
                                                url: '/api/country/list',
                                                dataType: 'json'
                                            },
                                        }"

                                        @select="VisitedCountrySelected($event)"
                                        />
                                        <a href="javascript:void(0);"
                                        @click="addVisitedCountry"
                                        class="px-1 ml-3 text-xl font-semibold text-white"><img src="https://img.icons8.com/ios/28/000000/plus--v2.png"/></a>
                                    </div>

                                    <div v-for="vc in visitedCountries" :key="vc.id0" class="mt-5 ">
                                        <span class="block w-full pt-3 mb-1 border-b-2">{{ vc.name }}</span>
                                        <span>
                                            <a href="javascript:void(0)"
                                            @click="removeVisitedCountry">
                                            </a>

                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 rounded shadow">
                                <h3 class="mt-2 text-xl text-center text-indigo-500">Countries to visit</h3>
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <div class="flex">
                                        <Select2
                                        class=" w-96"
                                        v-model="SelectedCountryToVisit"
                                        :settings="{
                                            width:'100%',
                                            ajax: {
                                                url: '/api/countries/list',
                                                dataType: 'json'
                                            },
                                        }"

                                        @select="CountryToVisitSelected($event)"
                                        />
                                        <a href="javascript:void(0);"
                                        @click="addCountryToVisit"
                                        class="px-1 ml-3 text-xl font-semibold text-white "><img src="https://img.icons8.com/ios/28/000000/plus--v2.png"/></a>
                                    </div>
                                     <div v-for="ctv in countriesToVisit" :key="ctv.id0" class="mt-5 ">
                                        <span class="block w-full pt-3 mb-1 border-b-2">{{ ctv.name }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Select2 from 'vue3-select2-component';
import axios from 'axios';
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Select2,
    },
    data() {
        return {
            SelectedVisitedCuntry: '',
            SelectedCountryToVisit:'',
            visitedCountries: [],
            countriesToVisit:[],
        }
    },
    methods: {
        VisitedCountrySelected({id, text}){
            // console.log({id, text})
        },
        CountryToVisitSelected({id, text}){
            // console.log({id, text})
        },
        getVisitedCountry(){
            axios.get('/api/countries/visited')
            .then((response) => {
                this.visitedCoutries = response.data;
            });
        },
        getToVisitCoutry(){
            axios.get('/api/countries/tovisit')
                .then((response) => {
                    this.countriesToVisit = response.data;
                });
        },
        addVisitedCountry(){
            if (this.SelectedVisitedCountry !== '') {
                axios.post('/api/add-visited-country',{
                    countryID: this.SelectedVisitedCountry
                }).then((response) => {
                    this.getVisitedCountry();
                }).catch(function(error){
                    console.log(error)
                })
            }else{
                console.log('error');
            }
        },
        addCountryToVisit(){
            if (this.SelectedCountryToVisit !== '') {
                axios.post('/api/add-country-to-visit',{
                    countryID: this.SelectedCountryToVisit
                }).then((response) => {
                    this.getToVisitCoutry();
                }).catch(function(error){
                    console.log(error)
                })
            }else{
                console.log('error');
            }
        },
    },
    created(){
        this.getVisitedCountry();
        this.getToVisitCoutry();
    }
}
</script>










