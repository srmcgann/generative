<template>
  <div class="header">
    {{state.rootDomain}} 
  </div>
</template>

<script>
export default {
  name: 'Header',
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
  .header{
    background-color: #000;
    background-image: url(https://jsbot.cantelope.org/uploads/awzic.png);
    background-size: 40px 40px;
    background-position: 0,0;
    padding-left: 40px;
    background-repeat: no-repeat;
    color: #f00;
    height: 40px;
  }
</style>
