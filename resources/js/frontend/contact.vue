<template>
    <div>
           <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Get In Touch</p>
                    <h2>Get In Touch For Any Query</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5" v-for="(con , i ) in showcontact" :key="i">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Our Head Office</h3>
                                <p>{{con.address}}</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for Help</h3>
                                <p>{{con.phone}}</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email for Information</h3>
                                <p>{{con.email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                    
                        <div class="contact-form">
                            <div id="success"></div>
                            <form  novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" v-model="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" v-model="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" v-model="subject" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" v-model="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                  
                                </div>
                            </form>
                              <button class="btn"  @click="send" >Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import  axios from 'axios'

export default {
    data() {
        return {
            name:'',
            email:'',
            subject:'',
            message:'',

            showcontact :[],
        }
    },
    methods: {
          send(){
              axios({
                  method:'post',
                   url:'sendemail',
                   data:{
                      name: this.name,
                      email :this.email,
                      subject :this.subject,
                      message : this.message
                   }
              }).then((Response)=>{
                  if(Response.status==200){
                      this.name = '',
                      this.email = '',
                      this.subject = '',
                      this.message = '',
                      console.log(Response);
                  }
              })
          }
    },

    async created() {
        axios({
            method: 'get',
            url : '/getcontact'
        }).then((Response)=>{
            this.showcontact = Response.data;
            
        })
    },
}
</script>