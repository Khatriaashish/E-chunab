<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title> E-Chunab - Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard.php"><img src="../img/nepal.png" height="25px"><img src="../img/vote.png" height="25px">Nepal E-Chunab</a>
          <a href="../"><button id="back-button"> Back</button></a>
          <a href="logout.php"> <button id="logout-button" class="btn btn-outline-danger" >Logout</button></a>
          </div>
        </div>
      </nav>
      <h1> Profile </h1>
      <div id="mainSection">
        <div id="profileSection">
            <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
            <b>Name : </b><?php echo $data['name'] ?><br><br>
            <b>Mobile : </b><?php echo $data['mobile'] ?><br><br>
            <b>Address : </b><?php echo $data['address'] ?><br><br>
            <b>Status : </b><?php echo $status ?>
        </div>
        <br/>
        <hr/>
        <h1>Candidates</h1>
        <div id="groupSection">
            <?php

            if(isset($_SESSION['groups'])){
                $groups = $_SESSION['groups'];
                for($i=0; $i<count($groups); $i++){
                    ?>
                        <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                        <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                        <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                        <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                        <form method="POST" action="../api/vote.php">
                        <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                        <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                        <?php

                        if($_SESSION['status']==1){
                            ?>
                            <button disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                            <?php
                        }
                        else{
                            ?>
                            <button style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                            <?php
                        }
                        ?>
                        </form>
                        </div>
                    <?php
                }
            }
            else{
                ?>
                    <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                        <b>No groups available right now.</b>    
                    </div>
                <?php
            }  
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
