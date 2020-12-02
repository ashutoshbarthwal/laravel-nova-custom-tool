<template>
    <div>
        <heading class="mb-6">Exchange Rate Tracker</heading>

        <card
            class="bg-90 flex flex-col items-center justify-center"
            style="min-height: 300px"
        >
            
            <div class="text-white text-4xl text-90 font-light mb-6" v-for="(value, name) in data">
                    {{ name }}: {{ value }}
            </div>

        </card>
    </div>
</template>

<script>

import axios from "axios";
export default {
    data() {
        return {
        data: {}
        }
    },
    mounted() {
    },
    beforeMount(){
        this.getExchangeRates   ();
    },
    methods: {
        async getExchangeRates(){
            axios.get("https://api.exchangeratesapi.io/latest?base=INR")
                    .then(response => {
                    this.rates = response.data.rates
                    this.data = {
                        "INR/USD" : this.rates.USD,
                        "INR/GBP" : this.rates.GBP,
                        "INR/EUR" : this.rates.EUR,
                    }
                })
        }
    }
}
</script>

<style>
/* Scoped Styles */
</style>
