<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body >
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top position-static ">
    <div class="container ">
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
                  <li><a class="dropdown-item" href="inscriptionetud.html">etudiant</a></li>
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
          <button class = "btn btn-dark">dark mode</button>
        </div>
      </div>
    </div>
  </nav>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">contact us</h5>
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
    <div class="card mb-3 mx-auto w-75 mt-lg-5 " >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/math.jpg" class="img-fluid rounded-start h-100 " alt="...">
          </div>
          <div class="col-md-8 bg-light-subtle ">
            <div class="card-body">
              <h5 class="card-title">math</h5>
              <p class="card-text">“Venez découvrir le monde fascinant des mathématiques chez nous ! Nos cours sont conçus pour rendre les mathématiques accessibles et intéressantes. Nous vous aiderons à maîtriser les concepts fondamentaux 
                et à développer votre logique et votre raisonnement. Rejoignez-nous et faites des mathématiques votre point fort ! (1ere anne college,2emme anne college,3 eme anne college
                1ere anne TC , 1ere,2eme anne bac s ex,sm,svt,)”
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 mx-auto w-75" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/physics.jpg" class="img-fluid rounded-start h-100 " alt="...">
          </div>
          <div class="col-md-8 bg-light-subtle ">
            <div class="card-body">
              <h5 class="card-title">physique</h5>
              <p class="card-text">La physique n’est pas seulement une matière scolaire, c’est la clé pour comprendre le monde qui nous entoure. Nos cours de soutien en physique vous aideront à déchiffrer les mystères de l’univers. Avec nos professeurs expérimentés,
                 la physique deviendra non seulement compréhensible, mais aussi passionnante. Venez explorer l’univers avec nous! (1ere anne college,2emme anne college,3 eme anne college
                 1ere anne TC , 1ere,2eme anne bac s ex,sm,svt,)”
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 mx-auto w-75" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/chimie.jpg" class="img-fluid rounded-start h-100 " alt="...">
          </div>
          <div class="col-md-8 bg-light-subtle ">
            <div class="card-body">
              <h5 class="card-title">chimie</h5>
              <p class="card-text">La chimie est partout autour de nous, de l’air que nous respirons à la nourriture que nous mangeons. Nos cours de soutien en chimie vous aideront à comprendre ces phénomènes quotidiens et bien plus encore. Avec notre aide, 
                vous pourrez transformer vos difficultés en chimie en une véritable passion. Rejoignez-nous et découvrez le monde incroyable de la chimie !(1ere anne college,2emme anne college,3 eme anne college
                1ere anne TC , 1ere,2eme anne bac s ex,sm,svt,)”
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 mx-auto w-75" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/svt.jpg" class="img-fluid rounded-start h-100 " alt="...">
          </div>
          <div class="col-md-8 bg-light-subtle ">
            <div class="card-body">
              <h5 class="card-title">science de vie et de terre</h5>
              <p class="card-text">Les SVT sont une fenêtre sur le monde vivant et la Terre. Nos cours de soutien en SVT vous aideront à comprendre les merveilles de la biologie et de la géologie. Avec nous, vous découvrirez
                 les secrets de la vie et de la Terre de manière amusante et intéressante. Venez vivre l’aventure des SVT avec nous !(1ere anne college,2emme anne college,3 eme anne college
                 1ere anne TC , 1ere,2eme anne bac s ex,sm,svt,)
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3 mx-auto w-75" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/philosophy.jpg" class="img-fluid rounded-start h-100 " alt="...">
          </div>
          <div class="col-md-8 bg-light-subtle ">
            <div class="card-body">
              <h5 class="card-title">phylosophie</h5>
              <p class="card-text">La philosophie est une discipline qui stimule la pensée critique et offre des perspectives uniques sur le monde. 
                Nos cours de soutien en philosophie vous aideront à développer votre esprit critique et à explorer les grandes questions de la vie. Avec nous, la philosophie deviendra non seulement une matière scolaire,
                 mais aussi une passion. Rejoignez-nous et plongez dans le monde fascinant de la philosophie(
                 1ere anne TC , 1ere,2eme anne bac s ex,sm,svt,)
              </p>
            </div>
          </div>
        </div>
      </div>



    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</body>
</html>