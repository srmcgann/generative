<template>
  <div class="footer" v-html="state.footerMarkup">
  </div>
</template>

<script>
export default {
  name: 'Footer',
  props: [ 'state' ],
  data(){
    return {
    }
  },
  methods: {
  },
  computed: {
  },
  mounted(){
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .footer{
    position: fixed;
    bottom: 0;
    width: 100%;
    background: linear-gradient(90deg, #0000, #000);
    color: #f00;
    height: 25px;
    text-align: center;
  }
</style>
