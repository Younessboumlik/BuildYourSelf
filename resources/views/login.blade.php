<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body >
  @if ($logincheck)
  <div class="toast align-items-center bg-danger-subtle border-0 mx-auto w-100" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body text-danger">
       erreur: mot de passe ou email est incorrect
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
@endif
    <div class="card mb-3 w-75 mx-auto border-0 " style="margin-top: 10%;">
        <div class="row g-0 ">
          <div class="col-md-4 d-flex justify-content-center">
            <img src="/5fcddbf4f1ce4bf6a2492d5c3bec559d.png" class="img-fluid rounded-start align-self-center">
          </div>
          <div class="col-md-8 bg-light-subtle  shadow-lg rounded-3">
            <form class="card-body" action="/home/me" method="post">
              @csrf
              <h1 class="card-title text-center ">log in</h1>
              <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">email</span>
                <input type="text" class="form-control" placeholder="email" aria-label="Username" aria-describedby="basic-addon1" name = "email" required>
              </div>
              <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">password</span>
                <input type="password" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1" name = "password" required>
              </div>
              <div class = "mt-5 d-flex justify-content-center gap-2">
                <input type="submit" class ="btn btn-primary" value="log in" name = "submit">
                <h6>you dont have an account ? <a href="/creataccount">creat one</a></h6>
              </div>
              
            </form>
          </div>
        </div>
    </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
    $('.toast').toast('show');
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>