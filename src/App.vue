<template>
  <Header :state="state"/>
  <Main :state="state"/>
  <Footer :state="state"/>
</template>

<script>
import Main from './components/Main'
import Header from './components/Header'
import Footer from './components/Footer'

export default {
  name: 'App',
  data(){
    return {
      state: {
        rootDomain: 'generative.dweet.net',
        baseURL: 'https://generative.dweet.net',
        footerMarkup: 'generative.dweet.net &bull; &copy;' + (new Date()).getFullYear(),
        users: [],
        items: []
      }
    }
  },
  components: {
    Main,
    Header,
    Footer
  },
  methods:{
    loadLanding(){
      let sendData = {}
      fetch(this.state.baseURL + '/getItems.php',{
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(sendData),
      })
      .then(res => res.json())
      .then(data => {
        if(data) {
          this.state.items = data
          this.state.items.map(v=>{
            if(typeof this.state.users[v.userID] == 'undefined'){
              let sendData = {userID: v.userID}
              fetch(this.state.baseURL + '/getUserInfo.php',{
                method: 'POST',
                headers: {
                 'Content-Type': 'application/json',
                },
                body: JSON.stringify(sendData),
              })
              .then(res => res.json())
              .then(data => {
                console.log(data)
                if(data[0]){
                  this.state.users[v.userID] = data[1]
                }
              })
            }
          })
        }
      })
    }
  },
  computed:{
  },
  mounted(){
    this.loadLanding()
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap');
html,body{
  font-family: 'Source Code Pro';
  margin: 0;
}
body{
  background: linear-gradient(-45deg, #000, #102);
  min-height: 100vh;
}
#app{
  background-color: #0000;
}
</style>
