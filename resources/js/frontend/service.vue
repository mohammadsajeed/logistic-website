<template>
    <div>
         <div class="service">
            <div class="container">
                <div class="section-header">
                    <p> Services</p>
                    <h2>Our Best  Services</h2>
                </div>
                <div class="row">
              
                    <div class="col-lg-3 col-md-6"  v-for="(ser , i ) in service" :key="i" >
                        <div class="service-item">
                            <img src="img/icon-6.png" alt="Icon">
                            <h3>{{ser.title}}</h3>
                          
                          
                            <router-link v-bind:to="`serv_details/${ser.id}`">Read More</router-link>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="feature">
             <div class="container">
                 <div class="row align-items-end">
                     <div class="col-md-6">
                        <div class="feature-img">
                           <img src="pic/1.jpeg" height="600px;" alt="">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="section-header">
                             <p>Our Feature</p>
                             <h2>Why Choose Us?</h2>
                         </div>

                         <p>
                            Road Link Logistic Services achieved legitimacy because of having a flexible
                    tendency and long term based principle for the advancement of the country. This
                    company has been dedicated to the authentication from the government of Islamic
                    Republic of Afghanistan. Corresponding to the legalization, this company is
                    employing the rules and regulations of the government of the Islamic Republic of
                    Afghanistan. As stockholder, Road Link Logistic Services commits the overall
                    moments according to the predetermined code of Institution Law. This company
                    reinforces the assigned right and minimizes the anti-supplemented authorization.
                         </p>
                       
                     </div>
                 </div>
             </div>
         </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
     data() {
       return {
        service :[],

       }

   },
   methods: {
       
   },

   async  created() {
       const read = axios({
           method:'get',
           url: '/getservice'
       }).then((Response)=>{
             this.service = Response.data;
       })
   },
}
</script>
