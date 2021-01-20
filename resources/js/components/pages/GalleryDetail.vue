<template>
    <div>
        <pageheader></pageheader>
        <section class="section">
                <div class="container-fluid">
                    <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-7">
                        <h2 class="heading" data-aos="fade-up">Our Gallery</h2>
                    </div>
                </div>
                    <div class="tz-gallery">
                        <div class="row">

                            <div class="gallery col-sm-12 col-md-4 col-lg-4" v-for="(image,key) in images" :key="key">
                                <a class="lightbox" v-bind:href="url+image.image">
                                    <img class="img-fluid" v-bind:src="url+image.image" alt="Gallery Images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

</template>

<script>
import pageheader from '../layouts/PageHeader'

export default {
    data() {
        return {
            images: [],
            url: process.env.MIX_APP_URL,
        }
    },
    components: {
        pageheader
    },
    async created() {
        const response = await this.callApi('get', process.env.MIX_APP_URL + 'api/pictures-all');
        if (response.status === 200) {
            this.images = response.data;
        }
    },
    mounted() {
        window.addEventListener('load', function() {
            baguetteBox.run('.gallery');
        });
    },

}
</script>

<style>

</style>
