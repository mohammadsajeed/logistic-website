<template>
    <div>
       <div class="blog blog-page mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Road Link logistic </p>
                    <h2>Our Latest Projects</h2>
                </div>
                <div class="row">
                    <div class="col-md-6" v-for="(pro , i) in project" :key="i">
                        <div class="blog-item">
                            <div class="blog-img">
                               <img v-bind:src="`/pic/${pro.pic}`">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">{{pro.title}}</h2>
                                <div class="blog-meta">
                                    <i class="fa fa-list-alt"></i>
                                    <a href="">Date</a>
                                    <i class="fa fa-calendar-alt"></i>
                                    <p>{{pro.date}}</p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                  
                                     <sometag v-html="pro.description"></sometag>
                                    
                                    </p>
                                    <a class="btn" href="">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> 
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
            project: [],
        }
    },
    methods: {
        
    },

    async created() {
        axios({
             method: 'get',
             url : '/getproject'
        }).then((Response)=>{
             this.project = Response.data;
            
        })
          
    },
}
</script>