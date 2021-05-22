<template>
    <div>
            <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">ROAD Link</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        
                        <router-link  to="/"><a  class="nav-item nav-link active">Home</a></router-link>
                        <router-link  to="/about"> <a href="" class="nav-item nav-link">About</a></router-link>
                        <router-link to="/service"><a href="" class="nav-item nav-link">Service</a></router-link> 
                        <router-link to="/project"><a href="" class="nav-item nav-link">Projects</a></router-link> 
                        <router-link to="/advisors"><a href="" class="nav-item nav-link">Team</a></router-link> 
                        <router-link to="/contact"><a href="" class="nav-item nav-link">Contact</a></router-link> 
                        
                        <a href="/login" class="nav-item nav-link">login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>