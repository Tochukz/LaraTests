<template>
   <div class="row">
       <div class="col-sm-6">
           <h2>Chat Using Echo <button class="btn btn-primary" @click="clear">clear</button></h2>
           <div>
               <p v-for="(message, index) in messages" :key="index">{{ message }}</p>
           </div>
           <form @submit.prevent="sendMessage" class="form">
               <div class="form-group">
                   <textarea class="form-control" v-model="message" required></textarea>
               </div>
               <div class="form-group">
                   <button class="btn btn-primary form-control">Send</button>
               </div>
           </form>
       </div>
   </div>
</template>

<script>
import Pusher from 'pusher-js';

export default {
  name: 'ChatUsingEcho',
  data() {
    return {
      message: '',
      messages: [],
    }
  },
  methods: {
    receiveMessage(message) {
      Vue.set( this.messages, this.messages.length, `${message} ${new Date().toDateString()}`);
    },
    sendMessage() {
      axios.post('/api/message', {message: this.message})
           .then(response => {
             //console.log(response.data);  
           })
           .catch(err => console.error(err.response));
      this.message = '';
    },
    clear() {
      this.messages = [];
    }
  },
  created() {
      Echo.channel('chatbox')
           .listen('.message', e => {              
               this.receiveMessage(e.message);
           });
  }
}
</script>

<style lang="scss" scoped>
.form {
  position: fixed;;
  bottom: 0;
  width: 25em;
}
</style>
