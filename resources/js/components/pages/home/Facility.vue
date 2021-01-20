<template>

    <section class="section py-5 bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7 mb-5">
                    <h2 class="heading" data-aos="fade-up">Facilities</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-2">
                        <div class="flipper">
                            <div class="front" v-bind:style="{ backgroundImage: 'url(' + breakfast_img + ')' }">
                                <div class="box">
                                    <h2>Breakfast</h2>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>&ldquo; Property offers fresh and various breakfast. You can enjoy your breakfast with the sea views. &rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div> <!-- .flip-container -->
                </div>

                <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="block-2"> <!-- .hover -->
                        <div class="flipper">
                            <div class="front" v-bind:style="{ backgroundImage: 'url(' + beach_img + ')' }">
                                <div class="box">
                                    <h2>Beach</h2>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>&ldquo;The Property located next to the see.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div> <!-- .flip-container -->
                </div>

                <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="block-2">
                        <div class="flipper">
                            <div class="front" v-bind:style="{ backgroundImage: 'url(' + room_service_img + ')' }">
                                <div class="box">
                                    <h2>Room Service</h2>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>&ldquo;Room service is available for 7/24.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div> <!-- .flip-container -->
                </div>

                <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="block-2">
                        <div class="flipper">
                            <div class="front" v-bind:style="{ backgroundImage: 'url(' + park_img + ')' }">
                                <div class="box">
                                    <h2>Free Parking</h2>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <blockquote>
                                    <p>&ldquo;Free parking is available for guest in site.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div> <!-- .flip-container -->
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
        return{
            breakfast_img:process.env.MIX_APP_URL+'img/facilities/breakfast.wepb',
            beach_img:process.env.MIX_APP_URL+'img/facilities/beach.wepb',
            room_service_img:process.env.MIX_APP_URL+'img/facilities/room-service.wepb',
            park_img:process.env.MIX_APP_URL+'img/facilities/otopark.wepb',
        }
    }
}
</script>
