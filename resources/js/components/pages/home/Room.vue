<template>
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading" data-aos="fade-up"><router-link to="/rooms">Rooms &amp; Suites</router-link></h2>
                    <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
            </div>

                <div class="row" >
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" v-for="(room,key) in rooms" :key="key">
                        <router-link to="rooms" class="room "> 
                            <figure class="img-wrap">
                                <img v-bind:src="url+room.cover_picture" alt="Free website template" class="img-fluid mb-3">
                            </figure>
                            <div class="p-3 text-center room-info">
                                <h2>{{room.title}}</h2>
                                <span class="text-uppercase letter-spacing-1">{{room.price}}/ per night</span>
                            </div>
                        </router-link>
                    </div>
                </div>

        </div>
    </section>
</template>

<script>
export default {
    data(){
        return{
            rooms:[],
            url: process.env.MIX_APP_URL,
        }
    },
    async created(){
        const response = await this.callApi('get',process.env.MIX_APP_URL+'api/rooms');
        if (response.status === 200){
            this.rooms = response.data;
        }
    }
}
</script>
