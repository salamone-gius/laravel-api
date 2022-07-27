<template>
    <div class="">

        <!-- 'utilizzo' i componenti registrati -->
        <BaseHeader/>
        <BaseMain/>
        <BaseFooter/>
    </div>
</template>

<script>

// 'importo' i componenti principali
import BaseHeader from '../components/macro/BaseHeader.vue';
import BaseMain from '../components/macro/BaseMain.vue';
import BaseFooter from '../components/macro/BaseFooter.vue';

export default {
    name: 'App',

    // 'registro' i componenti importati
    components: {
        BaseHeader,
        BaseMain,
        BaseFooter,
    },
}
</script>

<style>

</style>