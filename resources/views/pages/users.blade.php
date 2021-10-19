
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


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">

      <h1>Users</h1>

        <table class="table table-bordered">
          <thead>
            <tr class="bg-primary">
              <th>User ID</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Address</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($users as $usr): ?>
                <tr>
                  <td><?= $usr->id?> </td>
                  <td><?= $usr->lname?> </td>
                  <td><?= $usr->fname?> </td>
                  <td><?= $usr->address?> </td>
                </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
  </div>
</div>

<style>
  ul li a{
    font-size: 20px;
    margin-left: 20px;
  }
</style>
</body>
</html>