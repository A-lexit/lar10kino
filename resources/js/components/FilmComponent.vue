<template>
    <div class="row mt-3">
        <div class="col-12 p-3">



<!--            <p>Опубликованно:  <i>{{film.created_at}}</i></p>-->
            <div class="mt-3">
<!--                <span class="badge bg-danger" v-if="film.statistic">{{film.statistic.views}} <i class="far fa-eye"></i></span>
                <span class="badge bg-primary" v-if="film.statistic">{{film.statistic.likes}} <i class="far fa-thumbs-up"></i></span>-->

                <!--                <span class="badge bg-danger" >{{film.statistic.views}} <i class="far fa-eye"></i></span>
                <span class="badge bg-primary" >{{film.statistic.likes}} <i class="far fa-thumbs-up"></i></span>-->

<!-- 4 урок замінено на строку нижче               <span class="badge bg-danger" >{{film.statistic.views}} <i class="far fa-eye"></i></span>        &lt;!&ndash;видалено фрагмент v-if="film.statistic" 3 урок 6:55 &ndash;&gt;-->
                <views-component></views-component>
<!-- 4 урок замінено на строку нижче               <span class="badge bg-primary" >{{film.statistic.likes}} <i class="far fa-thumbs-up"></i></span>   &lt;!&ndash;видалено фрагмент v-if="film.statistic" 3 урок 6:55 &ndash;&gt;-->
                <likes-component></likes-component>

            </div>
        </div>
    </div>
</template>

<script>

/*import ViewsComponent from "./ViewsComponent.vue";*/
/*import LikesComponent from "./LikesComponent";*/
export default {
    /*components: {ViewsComponent},*/

    computed: {
        film() {
            return this.$store.state.film;
        },
        /*views() {
            return this.$store.getters.filmViews;
        },*/
        /*likes() {
            return this.$store.getters.filmLikes;
        }*/
    },
    mounted() {
        console.log('Component film mounted.')
    },
    created() {
        let url = window.location.pathname
        let slug = url.substring(url.lastIndexOf('/')+1)

        console.log(url)
        console.log(slug)
        this.$store.commit('SET_SLUG',slug )
        this.$store.dispatch("getFilmData", slug)
        this.$store.dispatch("viewsIncrement", slug)
    }

}
</script>

<style scoped>


</style>
