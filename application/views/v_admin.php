
<h1 align="center">Login berhasil !</h1> 
    <h2 align="center">Selamat Datang, <?php echo $this->session->userdata("nama"); ?></h2>
<p align="center"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></p>

<html>
<head>
    <title>Homepage</title>
</head>

<body>


    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Subject</th> <th>Email</th> <th>Message</th> <th>Update</th>
    </tr>
    <?php
        foreach($crud_db as $c){
        ?>
        <tr>
          <td><?php echo $c->name ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->subject ?></td>
          <td><?php echo $c->message ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
