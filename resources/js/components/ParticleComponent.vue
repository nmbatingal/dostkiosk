<template>
    <div id="particles-js"></div>
</template>

<script>
    import 'particles.js';

    export default {
        mounted() {

            // console.log(particlesJS);

            particlesJS.load('particles-js', 'js/particlesjs-config.json', function() {
               // console.log('callback - particles-js config loaded');
            });
        }
    }
</script>
