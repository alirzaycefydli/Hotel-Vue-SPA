<template>
    <div>
        <pageheader></pageheader>
        <section v-if="detail != true" class="rooms-section spad">
            <div class="container">
                <div class="row">

                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-7">
                            <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
                            <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from
                                the
                                countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                                Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" v-for="(room,key) in rooms" :key="key">
                        <div class="room-item">
                            <img v-bind:src="room.cover_picture" alt="">
                            <div class="ri-text">
                                <h4>{{ room.title }}</h4>
                                <h3>{{ room.price }}$<span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{{ room.room_size }} &#13217;</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>{{ room.adult }} adult + {{ room.kid }}kid(s)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{ room.bed_type }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{{ room.facilities.substring(0, 12) }}...</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a class="primary-btn" @click.prevent="showDetailedRoom(room.id)" href="">More
                                    Details</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section v-else class="roberto-rooms-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-12">
                            <h2 class="heading" data-aos="fade-up">{{ detailedRoom[0][0].title }}</h2>
                            <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from
                                the
                                countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                                Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <!-- Single Room Details Area -->
                        <div class="single-room-details-area mb-50">
                            <!-- Room Thumbnail Slides -->
                            <div class="room-thumbnail-slides mb-50">
                                <div id="room-thumbnail--slide" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div v-for="(image, key) in detailedRoom[2]" :key="key" class="carousel-item"
                                             :class="{'active' : key === 0}">
                                            <img :src="image" class="d-inline w-100" alt="">
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators">
                                        <li v-for="(image, key) in detailedRoom[2]" :key="key"
                                            data-target="#room-thumbnail--slide" :data-slide-to="key"
                                            :class="{'active' : key === 0}">
                                            <img :src="image" class="d-block w-100" alt="">
                                        </li>
                                    </ol>
                                </div>

                            </div>
                            <p class="mt-5">{{ detailedRoom[0][0].content }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <!-- Hotel Reservation Area -->

                        <div class="hotel-reservation--area">
                            <ul>
                                <li>{{ detailedRoom[0][0].adult }} adult(s) +{{ detailedRoom[0][0].kid }} kid(s)</li>
                                <li>{{ detailedRoom[0][0].room_size }}&#13217;</li>
                                <li>{{ detailedRoom[0][0].bed_type }}</li>
                                <li v-for="(data,key) in detailedRoom[1]" :key="key">
                                    {{ data }}
                                </li>
                            </ul>
                        </div>
                        <div class="range-price" style="font-weight: bold">Price:{{ detailedRoom[0][0].price }}
                            &#x20BA;
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
    name: 'Rooms',
    dataM: '',
    data() {
        return {
            detail: false,
            rooms: [],
            detailedRoom: [],
        };
    },
    components: {
        pageheader,
    },
    async created() {
        const response = await this.callApi('get', process.env.MIX_APP_URL + 'api/rooms-all');
        if (response.status === 200) {
            this.rooms = response.data;
        }

    },
    methods: {
        roomDetail(data) {
            location.href = process.env.MIX_APP_URL + 'room-detail/' + data;
        },
        async showDetailedRoom(id) {
            this.detail = true;
            this.name = 'Single';
            const response = await this.callApi('get', process.env.MIX_APP_URL + 'api/room-detail/' + id);
            if (response.status === 200) {
                this.detailedRoom = response.data;
            }
        },
    }
};
</script>
