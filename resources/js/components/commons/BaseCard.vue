<template>
    <div class="base-card">
        <h3>Titolo del post</h3>
        <p class="card-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, deserunt ipsum. Maiores dolor reprehenderit aut ipsum recusandae sed veritatis eaque? Commodi, quae cupiditate? Ducimus omnis quae officiis impedit quas inventore.
        </p>
        <a href="#">Leggi di più</a>
    </div>
</template>

<script>
export default {
    name: 'BaseCard',
}
</script>

<style lang="scss" scoped>
.base-card {
    background-color: white;
    padding: 1.5rem;
    border-radius: 1.25rem;
    box-shadow: 0 0 5px 2px gray;

    p {
        margin: 1rem 0;
    }
}

</style>