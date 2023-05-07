<template>
    <div>
        <h1>Territories</h1>
        <template v-for="(territory, key) in territories.data" :key="'territory' + key">
            <ul v-if="territory.parent == null">
                <li>{{ territory.name }}</li>
                <subterritorries-component :territories="territories" :territory_id="territory.id"></subterritorries-component>
                <!-- <li>
                    <ul v-for="(subterritory, subkey) in territories.data" :key="'subterritory' + subkey">
                        <li v-if="subterritory.parent == territory.id">{{ subterritory.name }}</li>
                    </ul>
                </li> -->
            </ul>
        </template>
    </div>
</template>

<script>
export default {
    data() {
        return {
            territories: []
        }
    },
    created() {
        axios.get('/home/index/get-territories')
        .then((response) => {
            let here = this;
            here.territories = response.data;
        })
        .catch((error) => {
            console.log('Unable to retrieve territories data')
        });
    }
}
</script>