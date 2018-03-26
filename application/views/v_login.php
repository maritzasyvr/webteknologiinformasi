<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Teknologi Informasi-ITS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include stylesheet for better appearance of login form -->

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{padding-top:20px;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Masukkan username dan password Anda</h3>
                </div>
                <div class="panel-body">
                    <?php/* echo $error;*/ ?>
                    <form accept-charset="UTF-8" role="form" method="post" action="<?php echo base_url('login/aksi_login'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
