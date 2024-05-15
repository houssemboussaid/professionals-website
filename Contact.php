<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Contact </title> 
    <link rel="stylesheet" href="Contact.css"> 
  </head> 
 <body> 
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary" align="center">
    <div class="container-fluid">
        <a class="navbar-brand" href="Juge.css"> </a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="Services.html">Services </a>
            <ul class="dropdown-menu"></ul> 
          <li class="nav-item">
            <a class="nav-link" href="Blog.html">Blog </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact </a> 

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              About
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="our work.html"> Our work</a></li>
              <li><a class="dropdown-item" href="help.html">Help</a></li> 
             
            </ul>
          </li>
         
        </ul> 
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="card" style="width:600px; margin: auto; margin-top: 100px;">
    <div class="card-header">
      Contact
    </div>
    <div class="card-body">
      <h5 class="card-title">Contact form</h5>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  </body>
</html>         