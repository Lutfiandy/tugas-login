<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

<section class="content">
    <div class="container-fluid">

<div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
<form class="form-horizontal" method="POST" action="<?= BASE_URL('index.php?/Ujian/update') ;?>">
                    <div>
                    <input type="hidden" name="no" value="<?= $edit->no; ?>">
                  <div class="form-group row">
                    <label for="id_soal" class="col-sm-2 col-form-label">ID_Soal</label>
                    <div class="col-sm-6">
                      <input name="id_soal" type="text" class="form-control" id="id_soal" placeholder="<?= $edit->id_soal; ?>">
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label for="dosen" class="col-sm-2 col-form-label">Dosen</label>
                    <div class="col-sm-6">
                      <input name="dosen" type="text" class="form-control" id="dosen" placeholder="<?= $edit->dosen; ?>">
                    </div>
                    </div>
                    <br>
                    <div class="form-group row">
                    <label for="jumlah_soal" class="col-sm-2 col-form-label">Jumlah_Soal</label>
                    <div class="col-sm-6">
                      <input name="jumlah_soal" type="text" class="form-control" id="jumlah_soal" placeholder="<?= $edit->jumlah_soal; ?>">
                    </div>
                  </div>
                <!-- /.card-body -->
                
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="<?= BASE_URL('index.php?/Ujian/back'); ?>" class="btn btn-danger">Batal</a>
                
                <!-- /.card-footer -->
                </div>
              </form>
              </div>
        </div>
    </div>
</div>   
            </div>
</section>
</body>
</html>