<template>
    <section class="site-hero overlay" v-bind:style="{ backgroundImage: 'url(' + image + ')' }"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade-up">
                    <h1 class="heading">{{ title }}</h1>
                </div>
            </div>
        </div>
        <!--End Section Slider-->

        <a class="mouse smoothscroll" href="#next">
            <div class="mouse-icon">
                <span class="mouse-wheel"></span>
            </div>
        </a>
    </section>
</template>

<script>
export default {
    data() {
        return {
            title: '',
            image: '',
        }
    },

    async created() {
            const response = await this.callApi('get',process.env.MIX_APP_URL+'api/slider');
            if(response.status === 200){
                this.title = response.data.title;
                this.image = response.data.image;
            }else{
                //handle the errors
                console.log(response.statusText)
            }
    }
}
</script>
