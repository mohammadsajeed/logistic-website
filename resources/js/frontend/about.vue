<template>
    <div>
       <!-- About Start -->
        <div class="about mt-125" v-for="( sh , i ) in show" :key="i">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="">
                            <div class="about-img-1">
                                
                                 <img v-bind:src="`/pic/${sh.pic}`">
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Read About Us</p>
                            <h3>{{sh.title}}</h3>
                        </div>
                        <div class="about-text">
                            <p>
                            
                              <sometag v-html=sh.description></sometag>
                             
                            </p>
                    
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Feature Start -->
         <div class="feature">
             <div class="container">
                 <div class="row align-items-end">
                     <div class="col-md-6">
                        <div class="feature-img">
                             <img src="pic/1.jpeg" height="500px;" alt="Image">
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
        <!-- Feature End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <p>Meet Our Advisors</p>
                    <h2>Our Professional  Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6" v-for="(team , i  ) in showad" :key="i">
                        <div class="team-item">
                            <div class="team-img">
                                <img v-bind:src="`/pic/${team.pic}`">
                            </div>
                            <div class="team-text">
                                <h2>{{team.name}}</h2>
                                <p>{{team.posetion}}</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        <!-- Team End -->
        
    </div>
</template>

<script>
import  axios from 'axios'
export default {
    data(){
        return{

            name:"sajeed khan",
            show :[],
            showad :[]
        }
    },
    methods:{

           showImgae(){
                return this.showad[pic];
           }
    },

     async created(){
         const red = axios({
             method:'get',
             url   : '/get'
         }).then((Response)=>{
             this.show = Response.data;
               
         });
         const ad = axios({
             method: 'get',
             url: '/getad'
             
         }).then((Response)=>{
             this.showad = Response.data;

             

              
         })
     }
}
</script>