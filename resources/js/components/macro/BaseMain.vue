<template>
    <main>
        <!-- 'utilizzo' le sezioni del main registrate -->
        <PostsSection/>
    </main>
</template>

<script>

// 'importo' le sezioni del main
import PostsSection from '../sections/PostsSection.vue';

export default {
    name: 'BaseMain',

    // 'registro' le sezioni del main importate
    components: {
        PostsSection,
    }
}
</script>

<style>

</style>