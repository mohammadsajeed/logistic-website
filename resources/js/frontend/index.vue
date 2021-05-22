<template>
 
    <div>
     <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item" v-for="(slide , i) in slider" :key="i">
                    <div class="carousel-img">
                        <img v-bind:src="`pic/${slide.pic}`" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>{{slide.title}}</h1>
                        <p>
                            <sometag v-html="slide.description"></sometag>
                        </p>
                      
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Video Modal End -->
    
    
    <!-- Fact Start -->
    <div class="fact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="img/icon-4.png" alt="Icon">
                        <h2>Qualified Team</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="img/icon-1.png" alt="Icon">
                        <h2>Individual Approach</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="img/icon-8.png" alt="Icon">
                        <h2>100% Success</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="img/icon-6.png" alt="Icon">
                        <h2>100% Satisfaction</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->
    

    <!-- About Start -->
    <div class="about" v-for="(about_red , i ) in about " :key='i'>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="about-img-1">
                            <img v-bind:src="`pic/${about_red.pic}`" alt="Image">
                        </div>
                      
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>{{about_red.title}}</h2>
                    </div>
                    <div class="about-text">
                      
                        <p>
                        
                         <sometag v-html="about_red.description"></sometag>
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header">
                <p> Services</p>
                <h2>Our Best  Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6"  v-for="(arry_service , b ) in service  " :key="b">
                    <div class="service-item">
                        <img src="img/icon-6.png" alt="Icon">
                        <h3>{{arry_service.title}}</h3>
                       
                       <router-link v-bind:to="`serv_details/${arry_service.id}`">Read More</router-link> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="feature-img">
                        <img src="pic/1.jpeg"  height="700px;"  alt="Image">
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
                    <div class="row counters">
                        <div class="col-6">
                            <i class="fa fa-user"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">457</h2>
                                <p>Our Staffs</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="fa fa-users"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">600</h2>
                                <p>Our Clients</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="fa fa-check"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">300</h2>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="fa fa-running"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">400</h2>
                                <p>Running Projects</p>
                            </div>
                        </div>
                    </div>
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
                <div class="col-lg-3 col-md-6" v-for="( teams , i ) in team " :key="i">
                    <div class="team-item">
                        <div class="team-img">
                            <img v-bind:src="`pic/${teams.pic}`" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>{{teams.name}}</h2>
                            <p>{{teams.posetion}}</p>
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

     <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header">
                <p>Road Link </p>
                <h2> Our Latest Projects </h2>
            </div>
            <div class="owl-carousel blog-carousel">
                <div class="blog-item" v-for="(projects ,i) in project" :key="i">
                        <div class="blog-img">
                            <img v-bind:src="`pic/${projects.pic}`" alt="Blog">
                        </div>
                    <div class="blog-content">
                        <h2 class="blog-title">{{projects.title}}</h2>
                        <div class="blog-meta">
                            <i class="fa fa-list-alt"></i>
                        
                            <i class="fa fa-calendar-alt"></i>
                            <p>{{projects.date}}</p>
                        </div>
                        <div class="blog-text">
                            <p>
                               <sometag v-html="projects.description"></sometag>
                            </p>
                            
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <!-- Blog End -->
    </div>

   
</template>

<script>
 import axios from 'axios';

export default {
     data() {
         return {
             
              about: [],
               service: [],
               team: [],
               project :[],
               slider :[],

         }
     },
     methods: {
         
     },

      async created() {
    const red= axios({
                method:'get',
                url: '/get_about'
            }).then((Response)=>{
                this.about = Response.data;
            
            });
    const red_service = axios({
                method:'get',
                url: '/get_service',

            }).then((Response)=>{
                this.service = Response.data;
            });
            
    const red_team  = axios({
                method:'get',
                url:   '/team'
            }).then((Response)=>{
                this.team =  Response.data;
            });
    const red_project  = axios({
                method:'get',
                url:   '/get_project'
            }).then((Response)=>{
                 this.project =  Response.data;
        
            });  
    const red_slider  = axios({
                method:'get',
                url:   '/get_slider'
            }).then((Response)=>{
                 this.slider =  Response.data;
        
            });                  

          
    },
   
    
}
</script>