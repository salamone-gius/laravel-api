<template>
    <section class="post-section">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h2>All posts</h2>
            <div>
                <ul>
                    <!-- ciclo e stampo con Vue -->
                    <li v-for="post in posts" :key="post.slug">
                        {{post.title}}
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'PostsSection',

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

<style lang="scss" scoped>
.post-section {
    background-color: lightgray;
    padding: 2rem;
}
</style>