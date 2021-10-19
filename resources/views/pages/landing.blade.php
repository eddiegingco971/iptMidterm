<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</head>
<body>

<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand"><h2>IPT Midterm Project</h2></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>

    <ul class="navbar-nav navbar-collapse justify-content-end" id="navbarNavAltMarkup">

      <li class="nav-item">
        <a class="nav-link" href="<?= url('/') ?>">Home</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?= url('/users') ?>">Users</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?= url('/accounts') ?>">Accounts</a>
      </li>

    </ul>
  </div>
</nav>


<div class="container container-fluid">
  
  <div class="card navbar-dark bg-primary">
    <h2>Main Menu</h2>
  </div>
  
  <nav class="nav flex-column bg-primary">
      <a class="nav-link" href="<?= url('/') ?>"><button>Home</button></a>
      <a class="nav-link" href="<?= url('/users') ?>"><button>Users</button></a>
      <a class="nav-link" href="<?= url('/accounts') ?>"><button>Accounts</button></a>
  </nav>
</div>

<style>
      ul li a{
        font-size: 20px;
        margin-left: 20px;
      }
      .container {
            height: 450px;
            width: 490px;
            position: center;
            padding: 0 25px;
            box-sizing: border-box;
            margin-top: 10px;
            transition: transform 0.5s;
        }
        .card{
          height: 70px;
        
        }
        
        nav {
            text-align: center;
        }
        button {
            width: 385px;
            font-size: 20px;
            padding: 15px 0;
            border: 0;
            border-radius: 10px;
            outline: none;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        h2 {
            text-align: center;
            color: #fff;
            margin: auto
        }
</style>


</body>
</html>