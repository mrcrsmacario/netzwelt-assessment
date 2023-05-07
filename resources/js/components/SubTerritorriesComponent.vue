<template>
    <div>
        <li>
            <ul v-for="(subterritory, subkey) in territories.data" :key="'subterritory' + subkey">
                <li v-if="subterritory.parent == territory_id">{{ subterritory.name }}</li>
            </ul>
        </li>
    </div>
</template>

<script>
export default {
    props: [ 'territories', 'territory_id' ]
}
</script>