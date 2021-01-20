<template>

    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 mb-5">
                    <p>{{data.content}}</p>
                </div>
                <div class="col-md-4 mb-5">
                    <ul class="list-unstyled link">
                        <li>
                            <router-link to="/" @click.native="scrollToTop">Home</router-link>
                        </li>
                        <li>
                            <router-link @click.native="forceRefresh" to="/rooms">Rooms</router-link>
                        </li>
                        <li>
                            <router-link to="/gallery" @click.native="scrollToTop">Gallery</router-link>
                        </li>
                        <li>
                            <router-link to="/contact" @click.native="scrollToTop">Contact</router-link>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-5 pr-md-5 contact-info">
                    <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>
                        <span> {{data.address}}</span></p>
                    <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                        <span> {{data.phone}}</span></p>
                    <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span><a :href="'mailto:'+data.email">{{data.email}} </a></span>
                    </p>
                </div>
            </div>
            <div class="row pt-5">
                <p class="col-md-8 text-left">
                    Copyright &copy; {{ new Date().getFullYear() }}
                </p>

                <p class="col-md-4 text-right social">
                    <a :href="data.tripadvisor"><span class="fa fa-tripadvisor"></span></a>
                    <a :href="data.facebook"><span class="fa fa-facebook"></span></a>
                    <a :href="data.instagram"><span class="fa fa-instagram"></span></a>
                </p>
            </div>
        </div>
    </footer>
</template>

<script>
export  default {
    data(){
        return{
            data:[]
        }
    }, async created() {
        const response = await this.callApi('get', process.env.MIX_APP_URL + 'api/contact');
        if (response.status === 200) {
            this.data = response.data[0];
        }

    }, methods:{
        forceRefresh(){
            this.$router.go(0); //forces to refresh page
            window.scrollTo(0,0);
        },
        scrollToTop() {
            window.scrollTo(0,0); // go to the top of the page
        }
    }

}
</script>
