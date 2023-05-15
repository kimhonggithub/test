<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
* {
    /* navbar */
    margin: 0px;
    padding: 0px;
    text-decoration: none;

}

.header {
    height: 100px;
    background: white;
    max-width: 1440px;
}

/* } background color of navbar */
.inner-width {
    font-family: 'Poppins', sans-serif;
    padding: 50px;
    margin: auto;
}

.logo {
    margin-top: -60px;
    float: left;
    display: flex;
}

/* middle buttons */
.navigation-menu {
    display: flex;
    min-height: 10px;
}

.navigation-menu a {
    margin-left: 70px;
    /* bring to same level*/
    margin-top: 20px;
    color: #26464B;
    text-transform: uppercase;
    font-size: 12px;
    padding: 12px 10px;
    border-radius: 5px;
    transition: .3s linear;
}

.navigation-menu a:hover {
    /* switch colors, adds box */
    background: #26464B;
    color: white;
    transform: scale(1.1);
}

/* right buttons */
/* .navigation-menuright i {
  
    font-size: 16px;
} */

/* .navigation-menuright {
    display: flex;
    float: right;
} */

.navigation-menuright a {
    margin-left: 2px;
    color: #ddd;
    text-transform: uppercase;
    font-size: 12px;
    padding: 12px 20px;
    border-radius: 4px;
    transition: .3s linear;
}

/* right buttons HOVER */
.navigation-menuright a:hover {
    background: #26464B;
    color: #CBD6E2;
    transform: scale(1.1);
}

a.UserButtons {
    background: #26464B;
    color: #CBD6E2;
    font-weight: 500;
    letter-spacing: 2px;
}

a.UserButtons:hover {
    /* SWITCH COLORS */
    background: #CBD6E2;
    color: #26464B;
    font-weight: 500;
    letter-spacing: 2px;
}


/* middle content */
.middlecontent {
    position: fixed;
    /* green background */
    top: 100;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #273d48;
}

.bigpic {
    /* people mopping pic */
    float: right;
    display: flex;
    margin-right: 150px;
    margin-top: 50px;
}

.text1 {
    /* handy hero */
    font-size: 13px;
    font-family: "Times New Roman", Times, serif;
    width: 200px;
    height: 40px;
    text-align: justify;
    margin-left: 150px;
    margin-top: 200px;
    color: white;
}

.text2 {
    /* longer text*/
    font-size: 18px;
    font-family: "Times New Roman", Times, serif;
    width: 400px;
    height: 100px;
    text-align: justify;
    margin-left: 150px;
    margin-top: 1px;
    color: white;
}
</style>


<nav class=" container navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
    <a href="/home" class="navbar-nav">
            <img src="images/brand.png" height="75" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        
            <div class="navbar-nav">
                <nav class="navigation-menu">
                    <a href="/">Home</a>
                    <a href="#">Services</a>
                    <a href="#">Companies</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
            <div class="navbar-nav ms-auto navigation-menuright">
           
                <a href="#" class="UserButtons"><i class="fas fa-lock" aria-hidden="true"></i>LOGIN</a>
                <a href="#" class="UserButtons"><i class="fas fa-lock" aria-hidden="true"></i>SIGN IN</a>
                <a href="#" class="UserButtons"><i class="fas fa-lock" aria-hidden="true"></i>REGISTER as PROVIDER</a>
       
            </div>
        </div>
    </div>
</nav>