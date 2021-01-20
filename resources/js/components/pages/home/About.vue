<template>
    <section class="py-5 bg-light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                    <img v-bind:src="picture" alt="Image" class="img-fluid rounded">
                </div>
                <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                    <h2 class="heading mb-4">{{title}}</h2>
                    <p class="mb-5">{{description}}</p>
                    <p v-if="video != 'null'"><a v-bind:href="video" data-fancybox
                          class="btn btn-primary text-white py-2 mr-3 text-uppercase letter-spacing-1">Watch the
                        video</a></p>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
      return{
          title:'',
          description:'',
          picture: '',
          video:''
      }
    },
    async created() {
        const response = await this.callApi('get',process.env.MIX_APP_URL+'api/about');
        if (response.status === 200){
            this.title = response.data.title;
            this.description= response.data.description;
            this.picture = process.env.MIX_APP_URL+response.data.picture;
            this.video= response.data.video;
        }else{
        }
    }
}
</script>
