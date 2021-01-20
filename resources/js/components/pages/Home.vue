<template>
    <main>
        <!--Section Slider-->
        <Slider></Slider>
        <!--End Section Slider-->

        <!--Section About Us-->
        <About></About>
        <!--End Section About Us-->

        <!--Section Rooms-->
        <Room></Room>
        <!--End Section Rooms-->

        <!--Section Pictures-->
        <Picture></Picture>
        <!--End Section Pictures-->

        <!--Section Comments-->
        <Comment></Comment>
        <!--End Section Comments-->

        <!--Section Facilities-->
        <Facility></Facility>
        <!--End Section Facilities-->

    </main>
</template>

<script>
import Slider from './home/Slider';
import About from './home/About';
import Room from './home/Room';
import Picture from './home/Picture';
import Comment from './home/Comment';
import Facility from './home/Facility';

export default {
    data() {
        return {}
    },
    components: {
        Slider,
        About,
        Room,
        Picture,
        Comment,
        Facility
    }
}
</script>
