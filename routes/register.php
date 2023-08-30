<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title> E-Chunab - Registration</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php"><img src="../img/nepal.png" height="25px"><img src="../img/vote.png" height="25px">Nepal E-Chunab</a>
          </div>
        </div>
      </nav>
      <main class="form-signin w-100 m-auto">
        <form action="../api/register.php" method="POST" enctype="multipart/form-data">
          <img class="mb-4" src="../img/nepal.png" alt="" width="72" height="57">
          <img class="mb-4" src="../img/vote.png" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">Nepal E-Chunab</h1>
      
          <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Ashish Khatri" required>
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating">
            <input type="number" name="mob" class="form-control" id="floatingInput" placeholder="9843940931" required>
            <label for="floatingInput">Mobile No.</label>
          </div>
          <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating">
            <input type="password" name="cpass" class="form-control" id="floatingPassword" placeholder="Confirm Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating">
            <input type="text" name="add" class="form-control" id="floatingInput" placeholder="Chandragiri 12 Kathmandu" required>
            <label for="floatingInput">Address</label>
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Upload Photo</label>
            <input class="form-control" name="image" type="file" id="formFile profile">
          </div>
          <select name="role" class="form-select" aria-label="Default select example">
            <option value="1" selected>Voter</option>
            <option value="2">Candidate</option>
          </select>
      
          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Remember me
            </label>
          </div>
          <button class="btn btn-success w-100 py-2" id="loginbtn" type="submit" name="registerbtn">Register</button>
          Already user? <a href="../login.php">Login here</a>
          <p class="mt-5 mb-3 text-body-secondary">© Ashish Khatri</p>
        </form>
      </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>