<template>

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light">
        <div class="container">
            <router-link to="/" class="navbar-brand">Logo</router-link>
            <div class="site-menu-toggle js-site-menu-toggle  ml-auto" data-aos="fade" data-toggle="collapse"
                 data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false"
                 aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="collapse navbar-collapse" id="navbar-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <router-link to="/" @click.native="scrollToTop" class="nav-link" style="color: #fff">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link @click.native="forceRefresh" to="/rooms"  class="nav-link" style="color: #fff">Rooms</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/gallery" @click.native="scrollToTop" class="nav-link" style="color: #fff">Gallery</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/contact" @click.native="scrollToTop" class="nav-link" style="color: #fff">Contact</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
</template>
<script>
export default {
    methods:{
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
