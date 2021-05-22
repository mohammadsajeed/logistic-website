<template>
    <div>
     <div class="team mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Meet Our Advisors</p>
                    <h2>Our Professional  Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6" v-for="(ad , i) in showad" :key="i">
                        <div class="team-item">
                            <div class="team-img">
                                <img :src="`pic/${ad.pic}`" alt="" srcset="">
                            </div>
                            <div class="team-text">
                                <h2>{{ad.name}}</h2>
                                <p>{{ad.posetion}}</p>
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
   
    </div>
</template>

<script>
import  axios from 'axios'
export default {
    data() {
        return {
           showad :[]
        }
    },
    methods: {
        
    },

    async created() {
         axios({
              method:'get',
              url: '/get_advisor'
         }).then((Response)=>{
             this.showad = Response.data;
         })
    },
}
</script>