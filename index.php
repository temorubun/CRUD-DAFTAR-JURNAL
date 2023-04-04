<?php include 'crud.php'; ?>
<!doctype html>
<html lang="en">
  
    <head>
        
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Nadia</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    </head>
    
    <body>
   
        <nav class="navbar bg-primary" data-bs-theme="dark">
            
            <div class="container-md">
            
                <a class="navbar-brand" href="#">Pemograman PHP</a>
        
            </div>
        </nav><br>
    
        <div class="container">
    
            <h2>CRUD DAFTAR JURNAL</h2>
            
            <a href="https://github.com/putrijuita/tugas-php-crud.git">https://github.com/putrijuita/tugas-php-crud.git</a><br><br>
          
            <!-- Button Tambah Data Jurnal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Jurnal</button><br><br>
            
            <!-- Modal Tambah Data Jurnal-->
            <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-dialog-centered">
                    
                    <div class="modal-content">
                    
                        <div class="modal-header">
                    
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jurnal</h1>
                            
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                        </div>
                        
                        <form method="post">
                            
                            <div class="modal-body">
                            
                                <input type="text" name="jurnal" class="form-control" placeholder="Nama Jurnal" required><br>
                                
                                <input type="text" name="penerbit" class="form-control" placeholder="Nama Penerbit" required><br>
                                
                                <input type="text" name="ilmu" class="form-control" placeholder="Nama Ilmu" required><br>
                                
                            </div>
                          
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                
                                <input type="submit" class="btn btn-primary" name="tambahdata" value="Tambah Jurnal">
                            
                            </div>
                        
                        </form>
                    
                    </div>
                
                </div>
            
            </div>
          
            <!-- Modal Ubah Data-->
            <?php foreach ($AmbilData as $data):?>
                <div class="modal fade" id="<?= $data['ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    
                    <div class="modal-dialog modal-dialog-centered">
                        
                        <div class="modal-content">
                        
                            <div class="modal-header">
                                
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data Jurnal</h1>
                                
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            
                            </div>
                            
                            <form method="post">
                                
                                <div class="modal-body">
                                
                                    <input type="hidden" name="id" value="<?= $data['ID']?>" class="form-control"><br>
                                    
                                    <input type="text" name="jurnal" value="<?= $data['JURNAL']?>" class="form-control" placeholder="Nama Jurnal" required><br>
                                    
                                    <input type="text" name="penerbit" value="<?= $data['PENERBIT']?>" class="form-control" placeholder="Nama Penerbit" required><br>
                                    
                                    <input type="text" name="ilmu" value="<?= $data['ILMU']?>" class="form-control" placeholder="Nama Ilmu" required><br>
                                    
                                </div>
                                
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    
                                    <input type="submit" class="btn btn-primary" name="ubahdata" value="Ubah Data Jurnal">
                                
                                </div>
                                
                            </form>
                        
                        </div>
                        
                    </div>
                    
                </div>
            <?php endforeach;?>
            
            <table class="table">
                
                <thead>
                    
                    <tr>
                        
                        <th scope="col">Nama Jurnal</th>
                    
                        <th scope="col">Penerbit</th>
                    
                        <th scope="col">Bidang Ilmu</th>
                        
                        <th scope="col">Aksi</th>
                
                    </tr>
                
                </thead>
                
                <tbody>
                  
                    <?php foreach ($AmbilData as $data):?>
                    
                        <tr>
                            
                            <td>
                                
                                <?= $data['JURNAL']?>
                                
                            </td>
                            <td>
                                
                                <?= $data['PENERBIT']?>
                                
                            </td>
                            <td>
                                
                                <?= $data['ILMU']?>
                                
                            </td>
                            
                            <td>
                                
                                <form method="post">
                                    
                                    <!-- Button Ubah Data -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $data['ID']?>">Ubah Jurnal</button>
                            
                                    <input type="hidden" name="id" value="<?= $data['ID']?>">
                                    
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus Jurnal">
                                    
                                </form>
                            
                            </td>
                            
                        </tr>
                        
                    <?php endforeach;?>
                    
                </tbody>
                
            </table>
            
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    </body>
    
</html>