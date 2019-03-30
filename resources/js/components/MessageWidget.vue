<template>
    <notifications group="messages" position="top right"></notifications>
</template>

<script>
    import {dataBus} from "../app"; // import the const dataBus

    import Notifications from 'vue-notification';

    Vue.use(Notifications);

    export default {
        name: "message-widget",
        props:{
          set_message:{
              type: String
          }
        },
        data:function(){
            return {
                'messages':''
            }
        },
        created(){

            dataBus.$on('message',(data)=>{
                this.messages = data;
                this.setAlert(data.status,data.value, data.type);
            });
        },
        mounted:function(){
            if(this.set_message!==''){
              Object.keys(messages).forEach(key => {
                  this.setAlert(this.key, this.messages[key], this.key);
              });
    }

    },
        methods:{
            setAlert (status,value,type){
                this.$notify({
                    group: 'messages',
                    title: ''+status,
                    text: ''+value,
                    type: ''+type,
                    closeOnClick: true,
                    duration: 4000,
                    leave: 'fadeOut',
                    closeButtonClass:true
                })
            }
        }
    }

</script>

<style scoped>


</style>