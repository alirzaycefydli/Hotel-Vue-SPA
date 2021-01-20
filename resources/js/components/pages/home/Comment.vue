<template>
    <section class="section testimonial-section">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h2 class="heading" data-aos="fade-up">People Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div v-for="(comment,key) in 6" :key="key" class="testimonial text-center slider-item">
                        <div class="author-image mb-3">
                            <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                        </div>
                        <blockquote>
                            <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.&rdquo;</p>
                        </blockquote>
                        <p><em></em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            comments: [],
        }
    },
    async created() {
        const response = await this.callApi('get', process.env.MIX_APP_URL + 'api/comments');
        if (response.status === 200) {
            this.comments = response.data;
        }
    }
}
</script>
