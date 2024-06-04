<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .btn:hover{
        color: blue!important;
      }
      a:hover{
        color: rgb(0, 64, 255)
        !important;
      }
      nav{
        position: static !important;
      }
      .carousel-item{
        height: 500px;
        background-size: cover
        !important
      }
      .d-block{
        filter:brightness(50%);
        height: 560px
        !important
      }
      .card{
        box-shadow: 5px 5px 20px rgb(146, 148, 153);
        margin-top: 30px;
      
      }
      /* .card:hover{
        transform: scale(110%);
        transition-duration: 2s; */
      /* } */
      h1:hover{
        color: blue;
      }
      .decalage{
        position: static ;
        background-color: rgb(12, 64, 47)
        !important;

      }
      .card:hover .img-fluid{
        filter: brightness(50%);
        transition-duration: 2s;
      }
      .offer{
        height: 50px !important;
      }
      .offer:hover{
        height: 200px;
        transition-duration: 1s !important;
      }
      #info, #commitments, #offers,#aboutcard {
  transition: opacity 1.5s ease-in-out !important;
}
    #imgabout{
  transform: rotateZ(-34deg)!important;
}
#aboutp{
  box-shadow: 5px 5px 20px rgb(146, 148, 153)!important;
}
.spinnercontainer{
  background-color:whitesmoke;
  position:fixed;
  width: 100%!important;
  height: 100%!important;
  z-index: 9999;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 1s;
}
      
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class = "justify-content-center">
  <div class = "spinnercontainer">
    <div class="spinner-grow bg-primary" style="width: 4rem; height: 4rem;" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand " style ="width: 8% !important;" href="#"><img src = "/5fcddbf4f1ce4bf6a2492d5c3bec559d.png" class = "ms1" style="width: 50px !important;"></a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Build Yourself</h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body justify-content-between">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 grid gap-0 column-gap-3">
            <li class="nav-item">
              <!-- <a class="nav-link" aria-current="page" href="#">inscription</a> -->
              <li class="nav-item">
                <a class="nav-link" href="la_une.html">home</a>
              </li>
              <div class="dropdown">
                <boutton class="btn dropdown-toggle border-0 text-start" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  inscription
                </boutton>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/inscriptionetud">etudiant</a></li>
                  <li><a class="dropdown-item" href="inscriptionetud.html">proffesseur</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutcard">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-target="#exampleModal" data-bs-toggle="modal">contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">login</a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">cintact us</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body bg-light ">
        <div class="input-group mb-3">
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
            <div class="form-floating mb-3" class="form-control">
             <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
             <label for="floatingInput">Email address</label>
            </div>
        </div>
        <div class="form-floating mb-3" class="form-control">
           <textarea name="" id="" class="form-control" style = "width: 100%; height: 300px;  resize:none !important;"></textarea>
           <label for="floatingInput">votre text</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success ">envoyer</button>
      </div>
    </div>
    </div>
  </div>
  @if ($inscriptioncheck)
  <div class="toast align-items-center bg-danger-subtle border-0 mx-auto w-100" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body text-danger">
       vous devez cree un compte poue s'inscrire.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
@endif
  <div id="carouselExampleCaptions" class="carousel slide container=fluid">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/softskills.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>soft skills</h1>
          <p>Le soutien scolaire renforce les compétences des étudiants, aide à comprendre les concepts difficiles et développe la confiance en soi.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/informatque.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Informatique</h1>
          <p>SL’informatique, moteur de l’ère numérique, ouvre des portes à des possibilités infinies et est en demande dans tous les secteurs</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/soutienScolaire.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>soutiens Scolaire</h1>
          <p>Le soutien scolaire renforce les compétences des étudiants, aide à comprendre les concepts difficiles et développe la confiance en soi.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/scott-graham-5fNmWej4tAA-unsplash.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>platformes</h1>
          <p>Les plateformes numériques transforment notre interaction, travail et apprentissage. Leur utilisation efficace améliore notre efficacité et connectivité</p>
        </div>
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
   
    <h1 class = "text-center text-center">what we have </h1>
   
  <div class = "container mt-5 d-flex justify-content-around flex-wrap"  id = "info">
    <div class="card rounded-start-4" style="width: 18rem;" class = "offer">
      <img src="/soutienScolaire.jpg" class="card-img-top" alt="...">
      <div class="card-body ">
        <h5 class="card-title">soutient scolaire</h5>
        <p class="card-text">Le soutien scolaire renforce les compétences des étudiants, aide à comprendre les concepts difficiles et développe la confiance en soi.</p>
        <a href="/info/soutienscolaire" class="btn btn-primary mb-1">see more informations</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" class = "offer">
      <img src="/soutienScolaire.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">informatique</h5>
        <p class="card-text">SL’informatique, moteur de l’ère numérique, ouvre des portes à des possibilités infinies et est en demande dans tous les secteurs</p>
        <a href="#" class="btn btn-primary">see more informations</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;" class = "offer">
      <img src="/soutienScolaire.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">soft skills</h5>
        <p class="card-text">Le soutien scolaire renforce les compétences des étudiants, aide à comprendre les concepts difficiles et développe la confiance en soi</p>
        <a href="#" class="btn btn-primary">see more informations</a>
      </div>
    </div>
    <div class="card rounded-end-4" style="width: 18rem;" class = "offer">
      <img src="/soutienScolaire.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">langues</h5>
        <p class="card-text">Les plateformes numériques transforment notre interaction, travail et apprentissage. Leur utilisation efficace améliore notre efficacité et connectivité</p>
        <a href="#" class="btn btn-primary">see more informations</a>
      </div>
    </div>
  </div>
  <div>
  <div> 
     </div>
  
  </div>
  <div class="mt-5 p-0" id = "commitments">
    <!-- <div class="card text-bg-dark w-75 mx-auto" style = "height: 400px !important;">
      <img src="teachers.jpg" class="card-img w-100  h-100">
      <div class="card-img-overlay">
        <h5 class="card-title  text-center ">Enseignants qualifiés et expérimentés</h5>
        <p class="card-text text-center ">Notre équipe est composée d’enseignants hautement qualifiés et expérimentés. Ils sont dévoués à l’éducation de qualité.
          Pas de frais d’inscription : Nous n’imposons aucun frais d’inscription. Notre objectif est de rendre l’éducation accessible à tous.</p>
        <p class="card-text"><small>Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card text-bg-dark w-75 mx-auto mt-5" style = "height: 400px !important;">
      <img src="teachers.jpg" class="card-img w-100  h-100">
      <div class="card-img-overlay">
        <h5 class="card-title  text-center ">Enseignants qualifiés et expérimentés</h5>
        <p class="card-text text-center ">Notre équipe est composée d’enseignants hautement qualifiés et expérimentés. Ils sont dévoués à l’éducation de qualité.
          Pas de frais d’inscription : Nous n’imposons aucun frais d’inscription. Notre objectif est de rendre l’éducation accessible à tous.</p>
        <p class="card-text"><small>Last updated 3 mins ago</small></p>
      </div>
    </div> -->
    <div class="card mb-3 mx-auto w-75" >
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/teachers.jpg" class="img-fluid rounded-start h-100 " alt="...">
        </div>
        <div class="col-md-8 bg-light-subtle ">
          <div class="card-body">
            <h5 class="card-title">hot enseingant qualifie</h5>
            <p class="card-text">Nos enseignants sont hautement qualifiés et expérimentés, prêts à vous guider dans votre parcours d'apprentissage. Ils sont passionnés 
              par l'enseignement et dédiés à aider chaque étudiant à atteindre ses objectifs académiques. Avec leur soutien, vous pouvez être sûr que vous êtes entre de bonnes mains.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 mx-auto w-75" >
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/No Registration Fee.jpg" class="img-fluid rounded-start h-100 " alt="...">
        </div>
        <div class="col-md-8 bg-light-subtle ">
          <div class="card-body">
            <h5 class="card-title">No Registration Fees</h5>
            <p class="card-text">Nous croyons en un accès équitable à l'éducation. C'est pourquoi nous n'imposons pas de frais d'inscription. Vous pouvez commencer à apprendre avec nous sans avoir à
               vous soucier des coûts initiaux. Il suffit de choisir votre cours et de commencer votre voyage d'apprentissage dès aujourd'hui.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 mx-auto w-75" >
      <div class="row g-0">
        <div class="col-md-4">
          <img src="/72372.jpg" class="img-fluid rounded-start h-100 " alt="...">
        </div>
        <div class="col-md-8 bg-light-subtle ">
          <div class="card-body">
            <h5 class="card-title">Diverse Courses Catering to a Variety of Interests</h5>
            <p class="card-text">Peu importe vos intérêts, nous avons un cours pour vous. Nous offrons une grande variété de cours dans de nombreux domaines d'étude.
               Que vous soyez intéressé par la science, les arts, la technologie, ou autre chose, vous trouverez un cours qui correspond à vos intérêts et à
                vos objectifs d'apprentissage.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <h1 class = "text-center">owr offers</h1>
  <div class = "container d-flex justify-content-around flex-wrap " id= "offers">

    <div class="card  mb-3 text-center " style="max-width: 18rem; box-shadow: none; border:0cap">
      <div class="card-header text-center w-50 mx-auto shadow-lg bg-secondary ">soutien scolaire</div>
      <div class="card-body shadow-lg">
        <p class="card-text border-bottom">Besoin d’un coup de pouce dans vos études ?
           Inscrivez-vous à notre 
          cours de soutien scolaire. Cliquez sur 
          ‘Inscrivez-vous maintenant’ pour obtenir de l’aide.</p>
           
            <h1 class="card-title">features</h1>
            <h6>- Soutien dans toutes les matières principales</h6>
            <h6>- Des tuteurs expérimentés pour vous aider</h6>
            <h6>- Des sessions individuelles pour une attention personnalisée</h6>
            <h2 class="card-title border-top">500 $/mounth</h2>
      </div>
    </div>
      <div class="card  mb-3 text-center" style="max-width: 18rem; box-shadow: none; border:0cap">
        <div class="card-header text-center w-50 mx-auto shadow-lg bg-secondary ">informatique</div>
        <div class="card-body shadow-lg">
          <p class="card-text border-bottom">Plongez dans le monde numérique avec notre cours d’informatique. Cliquez sur ‘Inscrivez-vous maintenant’ pour commencer votre voyage.</p>
             
              <h1 class="card-title">features</h1>
              <h6>- Apprenez les bases de la programmation</h6>
              <h6>- Des projets pratiques pour renforcer l’apprentissage</h6>
              <h6>- Accès à des ressources d’apprentissage supplémentaires</h6>
              <h2 class="card-title border-top">250 $/mounth</h2>
        </div>
      </div>
      <div class="card  mb-3 text-center" style="max-width: 18rem; box-shadow: none; border:0cap">
        <div class="card-header text-center w-50 mx-auto shadow-lg bg-secondary ">informatique</div>
        <div class="card-body shadow-lg">
          <p class="card-text border-bottom">Plongez dans le monde numérique avec notre cours d’informatique. Cliquez sur ‘Inscrivez-vous maintenant’ pour commencer votre voyage.</p>
             
              <h1 class="card-title">features</h1>
              <h6>- Apprenez les bases de la programmation</h6>
              <h6>- Des projets pratiques pour renforcer l’apprentissage</h6>
              <h6>- Accès à des ressources d’apprentissage supplémentaires</h6>
              <h2 class="card-title border-top">250 $/mounth</h2>
        </div>
      </div>
      <div class="card  mb-3 text-center" style="max-width: 18rem; box-shadow: none; border:0cap">
        <div class="card-header text-center w-50 mx-auto shadow-lg bg-secondary ">informatique</div>
        <div class="card-body shadow-lg">
          <p class="card-text border-bottom">Plongez dans le monde numérique avec notre cours d’informatique. Cliquez sur ‘Inscrivez-vous maintenant’ pour commencer votre voyage.</p>
             
              <h1 class="card-title">features</h1>
              <h6>- Apprenez les bases de la programmation</h6>
              <h6>- Des projets pratiques pour renforcer l’apprentissage</h6>
              <h6>- Accès à des ressources d’apprentissage supplémentaires</h6>
              <h2 class="card-title border-top">250 $/mounth</h2>
        </div>
      </div>
     
  </div>
  <div class="container ">
  <div class="card  mb-3 text-center mx-auto mt-xl-5 rounded-bottom-circle" style="max-width: 50rem; box-shadow: none; border:0cap" id = "aboutcard">
    <div class="card-header text-center mx-aut bg-body  "><h1>about us</h1></div>
    <div class="card-body shadow-lg">
      <h1 class="card-title"> <img src="/5fcddbf4f1ce4bf6a2492d5c3bec559d.png" style="max-width: 100px;"></h1>
      <p class="card-text border-bottom">Bienvenue dans notre Centre d’Éducation, un pilier d’apprentissage et de développement dans notre communauté. Nous proposons une gamme variée de cours
        , dispensés par des éducateurs expérimentés, dans un environnement stimulant et bienveillant. Nos installations à la pointe de la technologie 
        et notre engagement envers la réussite des élèves nous distinguent. Rejoignez-nous et vivez un parcours éducatif unique, adapté à vos besoins d’apprentissage.</p>
         
    </div>
  </div>
  </div>
  
  <!-- <div class=" mt-5 w-100 mx-auto position-relative">
    <h1 class = "text-center">about us</h1>
    <img src="5fcddbf4f1ce4bf6a2492d5c3bec559d.png"  class ="position-absolute rounded-3" id = "imgabout" style="height: 100px ; width: 120px; margin-left: 7%; top: 8%;">
    <p class="bg-light w-75 mt-lg-5 p-md-5 rounded-2 mx-auto" id ="aboutp">Bienvenue dans notre Centre d’Éducation, un pilier d’apprentissage et de développement dans notre communauté. Nous proposons une gamme variée de cours
      , dispensés par des éducateurs expérimentés, dans un environnement stimulant et bienveillant. Nos installations à la pointe de la technologie 
      et notre engagement envers la réussite des élèves nous distinguent. Rejoignez-nous et vivez un parcours éducatif unique, adapté à vos besoins d’apprentissage.
    </p>
  </div> -->
  <footer class="bg-info-subtle  text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>
  
          <p>
            Centre de Formation<br>
            123 Rue Rue bernosi, Casablanca<br>
            Téléphone: 01 23 45 67 89<br>
            Email: buildyouself@gmail.com <br>          
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">WHAT WE HAVE</h5>
  
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#info" class="text-dark">Informatique</a>
            </li>
            <li>
              <a href="#info" class="text-dark">Soutien Scolaire</a>
            </li>
            <li>
              <a href="#info" class="text-dark">Soft Skills</a>
            </li>
            <li>
              <a href="#info" class="text-dark">languages</a>
            </li>
          </ul>
        </div>
       
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">CONTACTS</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">YourWebsite.com</a>
    </div>

  </footer>
  </footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
    $('.toast').toast('show');
    });
    </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script>
    function onScroll() {
  const infoElement = document.getElementById('info');
  const commitElement = document.getElementById('commitments');
  const offersElement = document.getElementById('offers');
  const aboutcard = document.getElementById('aboutcard');
  const scrollPosition = window.scrollY;
  
  if (scrollPosition > infoElement.offsetTop-500) {
    infoElement.style.opacity = 1;
  } else {
    infoElement.style.opacity = 0;
  }


if (scrollPosition > commitElement.offsetTop-500) {
  commitElement.style.opacity = 1;
} else {
  commitElement.style.opacity = 0;
}


if (scrollPosition > offersElement.offsetTop-500) {
  offersElement.style.opacity = 1;
} else {
  offersElement.style.opacity = 0;
}
if (scrollPosition > aboutcard.offsetTop-500) {
  aboutcard.style.opacity = 1;
} else {
  aboutcard.style.opacity = 0;
}
}
window.addEventListener('scroll', onScroll);
spinnercontainer = document.getElementsByClassName('spinnercontainer')[0];
window.addEventListener('load',()=>{
  spinnercontainer.style.opacity = 0;
  setTimeout(() => {
    spinnercontainer.style.display = 'none'
  },200)
})
  </script>
</body>
</html>