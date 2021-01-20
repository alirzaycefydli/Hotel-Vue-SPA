<template>
    <div>
        <Header> </Header>
        <router-view></router-view>
        <Footer> </Footer>
    </div>
</template>


<script>
import Header from "./layouts/header";
import Footer from "./layouts/footer";

export default {
    components: {
        Header,
        Footer
    },watch:{
        '$route' (to, from) {
            document.title = to.meta.title || 'Hotel A'
        }
    }
}
</script>
