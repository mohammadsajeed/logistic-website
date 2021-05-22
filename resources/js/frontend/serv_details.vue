<template>
    <div>
           <div class="single mt-125">
            <div class="container">
                <div class="section-header">
                    <p>Service Details </p>
                    <h2>{{service_details.title}}</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>
                           <sometag v-html="service_details.description"></sometag>
                        </p>
  
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
             
          service_details :[]    
         }
     },

      methods: {
          
      },

       async created() {
            const ser =     axios({
                       method :'get',
                       url : 'get_service/'+ this.$route.params.id
                       

                }).then((Response)=>{
                     this.service_details = Response.data;
                })
       },
}
</script>