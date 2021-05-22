<template>
    <div>
          <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact" v-for="(con , i) in showcontact" :key="i">
                                    <h2>Our Head Office</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>{{con.address}}</p>
                                    <p><i class="fa fa-phone-alt"></i>{{con.phone}}</p>
                                    <p><i class="fa fa-envelope"></i>{{con.email}}</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Social Links</h2>
                                    <a href="">FaceBook</a>
                                    <a href="">WhatsApp</a>
                                    <a href="">twitter</a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Road Link Logistic Services</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://github.com/mohammadsajeed">Mohammad Sajeed</a></p>
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
            showcontact :[],
        }
    },
    methods: {
        
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