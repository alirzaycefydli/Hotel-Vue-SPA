<template>
    <div>
        <pageheader></pageheader>
        <div v-if="message">
            <h2 style=" text-align: center; color: #19af3a">{{ message }}</h2>
        </div>
        <section class="section contact-section" id="section-contact">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-7">
                        <h2 class="heading aos-init" data-aos="fade-up">Contact Us</h2>
                        <p data-aos="fade-up" class="aos-init">Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                            Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 aos-init" data-aos="fade-up" data-aos-delay="100">

                        <form @submit.prevent="sendMessage" class="bg-white p-md-5 p-4 mb-5 border">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name</label>
                                    <input v-model="data.name" type="text" name="name" id="name" class="form-control ">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="phone">Phone</label>
                                    <input v-model="data.phone" type="text" name="phone" id="phone"
                                           class="form-control ">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="email">Email</label>
                                    <input v-model="data.email" type="email" name="email" id="email"
                                           class="form-control ">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-12 form-group">
                                    <label for="message">Write Message</label>
                                    <textarea v-model="data.message" name="message" id="message" class="form-control "
                                              cols="30"
                                              rows="8"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="submit" value="Send Message"
                                           class="btn btn-primary text-white font-weight-bold">
                                    <div class="submitting">
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="col-md-5 aos-init" data-aos="fade-up" data-aos-delay="200">
                        <div class="row">
                            <div class="col-md-10 ml-auto contact-info">
                                <p><span class="d-block">Address:</span> <span class="text-black"> {{contact.address}}</span>
                                </p>
                                <p><span class="d-block">Phone:</span> <span
                                    class="text-black"> {{contact.phone}}</span></p>
                                <p><span class="d-block">Email:</span> <span
                                    class="text-black"> <a class="text-black" :href="'mailto:'+contact.email">{{contact.email}}</a> </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
import pageheader from '../layouts/PageHeader';

export default {
    data() {
        return {
            data: {
                name: '',
                phone: '',
                email: '',
                message: '',
            },
            message: '',
            contact:[]
        };
    },
    components: {
        pageheader,
    }, async created() {
        const response = await this.callApi('get', process.env.MIX_APP_URL + 'api/contact');
        console.log(response.data)
        if (response.status === 200) {
            this.contact = response.data[0];
        }

    },
    methods: {
        async sendMessage() {
            const response = await this.callApi('post', process.env.MIX_APP_URL + 'api/message', this.data);
            if (response.status === 200) {
                this.message = response.data.message;
            }

            window.scrollTo(0, 0); // scroll to the top of the page
        }
    }
};
</script>
