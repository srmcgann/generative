<template>
  <div class="main">
    <div v-for="item in state.items" class="item" :key="item.id">
      <div class="userCard">
        <div
          class="avatar"
          :style="'background-image: url(' + state.users[item.userID].avatar + ');'"
        ></div>
        {{state.users[item.userID].name}}<br>
        joined {{formattedDate(state.users[item.userID].joined)}}<br>
        total contributions: {{state.users[item.userID].numItems}}
      </div>
      <div class="itemCard">
        <div class="itemTitle" v-html="item.title"></div><br>
        {{item.description}}
        <div
          class="itemImage"
          :style="'background-image: url(' + item.image + ');'"
        ></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Main',
  props: [ 'state' ],
  data(){
    return {
    }
  },
  methods: {
    formattedDate(d){
      let M=['January','February','March','April','May','June','July','August','September','October','November','December']
      var l=new Date(d)
      return M[l.getMonth()] + ' ' + l.getDate() + ', ' + l.getFullYear()// + ' • ' + (l.getHours()%12) + ':' + l.getMinutes() + ' ' + (l.getHours()<12?'AM':'PM')
    },
  },
  computed:{
  },
  mounted(){
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.main{
  background-color: #0000;
  color: #8f8;
}
.item{
  width: 300px;
  background: #fff3;
  margin: 10px;
  padding: 4px;
  float: left;
}
.userCard{
  margin: 5px;
  padding: 15px;
  background: #123;
}
.itemCard{
  background: #2464;

}
.itemImage{
  width: 200px;
  height: 200px;
  background-size: cover;
  background-position: center center;
  border: 1px solid #4fb3;
}
.avatar{
  width: 100px;
  height: 100px;
  background-size: cover;
  background-position: center center;
  border-radius: 50%;
  border: 1px solid #4fb3;
}
.itemTitle{
  display: inline-block;
  font-size: 32px;
  background: #000;
  padding: 0;
  padding-left: 20px;
  padding-right: 20px;
  color: #ff0;
}
</style>
