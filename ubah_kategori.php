<h1 class="mt-4">kategori buku</h1>
<div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-md-12">
            <form method="post">
            <?php
            $id = $_GET['id'];
             if(isset($_POST['submit'])){
             $kategori = $_POST['kategori'];
             $query = mysqli_query($koneksi, "UPDATE kategoribuku set NamaKategori='$kategori' WHERE KategoriID=$id");
   
             if($query){
                 echo '<script>alert("perubahan data berhasil.");</script>';
             }else{
                 echo '<script>alert("perubahan data gagal.");</script>';
              }
            }
            $query = mysqli_query($koneksi, "SELECT*FROM kategoribuku where KategoriID=$id");
            $data = mysqli_fetch_array($query);
        ?>
                   <div class="row mb-3">
                        <div class="col-md-4">kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" value="<?php echo $data['NamaKategori']; ?>" name="kategori"></div>
                     </div>
                     <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                        <button type="submit" class="btn btn-success" name="submit" value="submit">simpan</button>
                        <button type="reset" class="btn btn-secondary">reset</button>
                        <a href="?page=kategori" class="btn btn-danger">kembali</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    </div>
</div>
