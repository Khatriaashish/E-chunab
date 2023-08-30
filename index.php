<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title> E-Chunab - Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img/nepal.png" height="25px"><img src="img/vote.png" height="25px">Nepal E-Chunab</a>
          <a href="routes/register.php"><button class="btn btn-outline-success" >Register</button></a>
          </div>
        </div>
      </nav>
      <main class="form-signin w-100 m-auto">
        <form action="api/login.php" method="POST">
          <img class="mb-4" src="./img/nepal.png" alt="" width="72" height="57">
          <img class="mb-4" src="./img/vote.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Nepal E-Chunab</h1>
      
          <div class="form-floating">
            <input type="number" class="form-control" name="mob" id="floatingInput" placeholder="9843940931" required>
            <label for="floatingInput">Mobile No.</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <select class="form-select" name="role" aria-label="Default select example">
            <option value="1" selected>Voter</option>
            <option value="2">Candidate</option>
          </select>
      
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <button class="btn btn-success w-100 py-2" type="submit" name="loginbtn" id="loginbtn">Log in</button>
          New user? <a href="routes/register.php">Register here</a>
          <p class="mt-5 mb-3 text-body-secondary">© Ashish Khatri</p>
        </form>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>