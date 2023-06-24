<?php
  require_once 'connect.php';
  $sql= "SELECT * FROM project";
  $result = $con->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information Technology : TATC</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    *{font-family: 'Kanit', sans-serif;}
  </style>
  </head>
  <body>
    <div id="carouselExampleSlidesOnly" 
    class="carousel slide carousel-fade" 
    data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="slide/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="slide/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="slide/3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <?php
         include 'navbar.php';
    ?>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="container mt-5">
          <div class="row grid gap-3">
          <?php 
            while($row=mysqli_fetch_array($result)){ ?>
              <div class="col">
                <div class="card" style="width: 15rem;">
                  <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <p class="card-text"><?php echo $row['pj_name']?></p>
                    <a href="<?php echo $row['pj_id']?>" class="btn btn-primary">Enter</a>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        สท.4/1
      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        สท.4/2
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>