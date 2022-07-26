<template>
    <div class="posts-list">
        <h1>Blog</h1>
        <ul>
            <!-- ciclo e stampo con Vue -->
            <li v-for="post in posts" :key="post.slug">
                {{post.title}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'App',

    // preparo l'ambiente per i dati che riceverò dalla chiamata axios
    data() {

        return {

            // inizializzo i post ad array vuoto
            posts: []
        }
    }, 

    // all'hook created() (al caricamento della pagina)...
    created() {

        // ...inserisco come parametro del metodo get() l'endpoint a cui fare la chiamata...
        axios.get('http://localhost:8000/api/posts')

            // ...quello che mi arriva (response)...
            .then((response) => {

                // ...lo salvo nella variabile 'posts' inizializzata precedentemente
                this.posts = response.data;
            })
            .catch((e) => {
                console.log(e);
            })
    }
}
</script>

<style>

</style>