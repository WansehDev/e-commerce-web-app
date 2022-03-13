<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="container-login shadow">
        <h1>Admin Login</h1>
        <form class="form-fields-default" action="dashboard" method="post">
              <label for="first_name" class="text-lg text-letter-space">
               Email:
              </label>
              <input
                type="email"
                name="email"
              />
              <label for="password" class="text-lg text-letter-space">
                Password:
              </label>
              <input
                type="password"
                name="password"
              />
             <input type="submit" value="login" class="btn btn-default" >
          </form>
    </div>
</body>
</html>