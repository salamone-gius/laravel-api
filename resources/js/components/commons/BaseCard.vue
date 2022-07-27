<template>
    <div class="base-card">

        <!-- utilizzo le props definite -->
        <h3>{{title}}</h3>
        <p class="card-content">
            {{content}}
        </p>
        <a href="#">Leggi di più</a>
    </div>
</template>

<script>
export default {
    name: 'BaseCard',

    // definisco le props che arrivano dal componente padre
    props: {
        title: {
            type: String
        },

        content: {
            type: String
        },
    },
}
</script>

<style lang="scss" scoped>
.base-card {
    background-color: white;
    padding: 1.5rem;
    border-radius: 1.25rem;
    box-shadow: 0 0 5px 2px gray;
    min-height: 21rem;

    p {
        margin: 1rem 0;
    }
}

</style>