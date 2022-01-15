<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

<?php
    if($this->session->flashdata('sukses') <> '')
    {
    ?>
       <div class="alert alert-White">
       <?php echo $this->session->flashdata('sukses');?>
       <a href="<?php echo base_url('index.php?/Ujian/destroy') ;?>"><button type="submit" class="btn btn-success">Semua Data</button></a>
       
       </div>
    <?php    
    }
    ?>

       <a href="<?= BASE_URL('index.php?/Ujian/tambah'); ?>" class="btn btn-Primary">Tambah Data</a>
       <a href="<?= BASE_URL('index.php?/Login/logout'); ?>" class="btn btn-Danger">Keluar</a>

       
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">

            <table class="table"
        <thead>
            <tr>
                <th scope="col">No</th>
            <th scope="col">ID_Soal</th>
            <th scope="col">Dosen</th>
            <th scope="col">Jumlah_Soal</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
          <!--Pharsing Data-->
        <?php 
        $no = 1;
        foreach($test as $aku) { ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $aku->id_soal; ?></td>
      <td><?php echo $aku->dosen; ?></td>
      <td><?php echo $aku->jumlah_soal; ?></td>
      <td>
      <form method="POST" action="<?= BASE_URL('index.php?/Ujian/del') ;?>" >
        <a href="<?= BASE_URL('index.php?/Ujian/edit/' . $aku->no); ?>" class="btn btn-warning">Edit</a>
      <input type="hidden" name="no" value="<?php echo $aku->no; ?>">
      <button class="btn btn-danger" >Hapus</button>
      </form>
      </td>

    </tr>
    <?php } ?>
        </tbody>
    </table>
               </div>
        </div>
    </div>
</div>
    
</body>
</html>