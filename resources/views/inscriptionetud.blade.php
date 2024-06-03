<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body >
    <div class="card mb-3 w-75 mx-auto border-0" style="margin-top: 10%;">
        <div class="row g-0 ">
          <div class="col-md-4 d-flex justify-content-center">
            <img src="5fcddbf4f1ce4bf6a2492d5c3bec559d.png" class="img-fluid rounded-start align-self-center">
          </div>
          <div class="col-md-8 bg-light-subtle  shadow-lg rounded-3">
            <form class="card-body" method="post" action = "/end">
              @csrf
              <h1 class="card-title text-center ">enregistrer vous</h1>
              <div class="input-group mb-3">
                <span class="input-group-text h-50 mt-5" id="basic-addon1">services</span>
                <select class="form-select mt-5 " aria-label="Default select example"  name = "service" id = "service" required>
                  <option value = "2"><a class="dropdown-item" href="#">soft skilles</a></option>
                  <option value = "1"><a class="dropdown-item" href="#">langues</a></option>
                  <option value = "3"><a class="dropdown-item" href="#">informatqie</a></option>
                  <option value = "4"><a class="dropdown-item" href="#">soutien scolaire</a></option>
                </select>
              </div>
                <div class="input-group mb-3">
                  <span class="input-group-text h-50 mt-5" id="basic-addon1">courses</span>
                  <select class="form-select mt-5 " aria-label="Default select example"  name = "cours" id = "cours">
                  </select>
                </div>
              <div class="input-group mb-3 mt-5">
                <span class="input-group-text" id="basic-addon1">nombre de mois</span>
                <input type="text" class="form-control" placeholder="nombre de mois" aria-label="password" aria-describedby="basic-addon1" name = "nbrmois" required>
              </div>
                <input type="submit" class ="btn btn-primary mt-5 mx-auto" value="save information student">
            </form>
          </div>
        </div>
    </div>    
    <script>
let service = document.getElementById("service")
let course = document.getElementById("cours")
service.addEventListener('change',function(){
  
     let id_service = service.value;
     console.log(id_service);
     let datatosend = {id_service:id_service}
     fetch('/getdata', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(datatosend)
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
    for(let i =0;i<data.length;i++){

        var option = document.createElement("option");
        option.value = data[i].course_id;
        option.text = data[i].label;
        cours.appendChild(option)
    }
    })
    .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
});
    

})
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>