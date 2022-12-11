<!DOCTYPE html>
<html>
    <head>
        <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title></title>
    </head>
        <body>
            <h3>Tampil Buku</h3>
            <table class="table table-hover table-striped">
            <thead>
            <tr>
            <th>NO</th><th>NAMA BUKU</th><th>PENGARANG</th><th>DESKRIPSI</th>
            <th>FOTO BUKU</th><th>AKSI</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
                include "koneksi.php";
                    $qry_buku=mysqli_query($conn,"select * from buku");
                    $no=0;
                while($data_buku=mysqli_fetch_array($qry_buku)){
                    $no++;?>
                    <tr>
                    <td><?=$no?></td><td><?=$data_buku['nama_buku']?></td>
                    <td><?=$data_buku['pengarang']?></td>
                    <td><?=$data_buku['deskripsi']?></td>
                    <td><?=$data_buku['foto']?></td>
                    <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Ubah</a> 
                    <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
            
            <?php
            }
            ?>
            </tbody>
            </table>
                <td><a href="dashboard.php" class="btn btn-primary">Kembali</a></td>
                <td><a href="tambah_buku.php" class="btn btn-success">Tambah Buku</a></td>
                <script 
                src=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        </body>
</html>