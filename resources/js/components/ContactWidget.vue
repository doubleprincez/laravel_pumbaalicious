<template>
    <div class="row">
        <div class="col-md-6 ">
            <h2>Contact Us</h2>
            <form id="contactForm" @submit.prevent="submitForm" method="post">
                <div class="list-group">
                    <label class="label" for="fullName">Full Name *</label>
                    <input type="text" class="input" v-model="fullName" name="fullname" id="fullName" placeholder="Full name" maxlength="100" required/>
                </div>
                <div class="list-group">
                    <label class="label" for="email">Email *</label>
                    <input type="email" class="input" v-model="email" name="email" id="email" placeholder="Email" maxlength="150" required/>
                </div>
                <div class="list-group">
                    <label class="label" for="subject">Subject *</label>
                    <input type="text" class="input" v-model="subject" name="subject" id="subject" placeholder="Subject" maxlength="100" required/>
                </div>
                <div class="list-group">
                    <label class="label" for="message">Message *</label>
                    <textarea id="message" class="input" name="message" v-model="message" placeholder="Type your Message.." maxlength="1000" required></textarea>
                </div>
                <div class="list-group">
                <button  type="submit" class="btn btn-info">
                    <i class="fa fa-paper-plane"></i> Send
                </button>
            </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="col-md-8 col-md-offset-3">
                <div class="list are-large">
                    <h2>Company Information</h2>
                    <div class="list-group">
                      <span class=""><i class="fa fa-map-marker"></i></span>
                        Address: 1734 Lagos Badagry Express Way
                    </div>
                    <div class="list-group">
                        <span class=""><i class="fa fa-phone"></i> </span>
                        Phone:   +234 8123 4567 89
                    </div>
                    <div class="list-group">
                        <span class=""><i class="fa fa-envelope"></i> </span>
                        Email:   noreply@pumbaalicious.com
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
    import { dataBus } from '../app';

    export default {
        name: "contact-widget",
        data: function(){
            return {
                'fullName':'',
                'email':'',
                'subject':'',
                'message':''
            }
        },
        methods:{
            submitForm: function(){
                let msg = {
                    'status':'info',
                    'value':'We are good to go',
                    'type':'info'
                };
                dataBus.$emit('message',msg);
            }
        }
    }
</script>

<style scoped>

</style>