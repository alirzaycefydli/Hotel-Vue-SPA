<template>
    <section class="section py-5 bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-2">
                <div class="col-md-7 mb-2">
                    <h2 class="heading" data-aos="fade-up">Pictures</h2>
                    <p data-aos="fade-up" data-aos-delay="100"><router-link to="/gallery">Click here to see more.</router-link></p> 
                </div>
            </div>
            <div class="img-container" data-aos="fade-up">
                <div v-for="(picture, key) in pictures" :key="key" class="img-box">
                    <img :src="picture.image">
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
        return{
            pictures:[],
        }
    },
    async created(){
        const response = await this.callApi('get',process.env.MIX_APP_URL+'api/pictures');
        if (response.status === 200){
            this.pictures=response.data;
        }
    }
}
</script>
