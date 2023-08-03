<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>@yield('title','Africa Route')</title>
    <meta name="description" content="Africa Routes est une plateforme africaine dédiée aux transports, à la logistique, au commerce ">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" keywords="africaroutes, africa, routes, transports, logistique, commerce, afrique, transport aérien, transport maritime,
    transport ferroviaire, technologies, mines, énergies, hydrocarbures, Bénin, ">
    <meta content="" author="AGBO Prudent Blanchard, Africa Routes, Weziza.com ">

    <!-- Favicon -->
    <link href="img/fav.PNG" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">
 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">


<style type="text/css">
    


@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

html,
body {

  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%; 
  background: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}
@media only screen and (max-width: 700px) and (min-width: 300px) 
{
  
  .fmod{
    margin-top:350px;
  }
  .fmod2{
    margin-top:350px;
  }

}
@media only screen and (max-width: 4000px) and (min-width: 700px) 
{
  
  .fmod{
    margin-top:200px;
  }

}



 .i{
    color:#0099cc;
    font-size:small;
 }
.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
} 
.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}

.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:0px;
  
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
 
   color:#0099cc;
}
.card-title a {
  color:#0099cc;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;

}
.card-read-more a {
    color:#0099cc;
  text-decoration: none !important;
  padding:10px;
  
  font-weight:600;
  text-transform: uppercase;
  font-size:small;
}




.card{
    padding:10px;
  transition:0.5s;
  cursor:pointer;
}
.v{  
  font-size:13px;
  transition:1s;
  cursor:pointer;
}
.card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ed1b24;
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.c:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;
  color:#555555;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.m{
    color:rgb(85,85,85);
}


.f{

color:#0099cc;
}

.f:hover{
background: #0099cc;
color:white;
}
.nav a:active{
  background: #0099cc;
color:white;
}


.cardv {
            display: flex;
            flex-direction: column;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        /* Style de l'image en arrière-plan */
        .card-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        /* Style du contenu de la carte */
        .card-content {
            padding: 15px;
        }

        /* Style du titre */
        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style du sous-titre */
        .card-subtitle {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Style du texte */
        .card-text {
            margin-bottom: 10px;
        }

        /* Style de la partie en bas à droite */
        .card-author {
            font-size: 14px;
            align-self: flex-end;
        }

</style>




</head>

<body style=" font-family: 'Overpass', Arial, sans-serif;">
 
    
@include('layout/header')



@yield('content')



 
   @include('layout/footer')

    <!-- Back to Top -->
    <a style="background:#0099cc;color:white;font-weight:bold; " href="#" class="btn btn-lg  btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>