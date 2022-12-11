<?php
    include 'koneksi.php'; 
    if($_POST){
        $nama_buku=$_POST['nama_buku'];
        $pengarang=$_POST['pengarang'];
        $deskripsi=$_POST['deskripsi'];

        $ekstensi=array("png","jpg","jpeg");
        $filename =$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        $tipe_file=pathinfo($filename, PATHINFO_EXTENSION);
        $ukuran=$_FILES['file']['size']; 

        if(empty($nama_buku)){
            echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
        } 
        else{
            if(!in_array($tipe_file, $ekstensi)){
                header("location:tambah_buku.php?alert=gagal_ekstensi");
            }
            else{
                if($ukuran<1044070){
                    move_uploaded_file($tmp, 'foto_produk/' .$filename);
                    $insert=mysqli_query($conn, "INSERT INTO buku (nama_buku, pengarang, deskripsi, foto) value ('".$nama_buku."','".$pengarang."','".$deskripsi."','".$filename."')"); 

                    if($insert){
                        echo "<script>alert('Sukses menambahkan buku');location.href='buku.php';</script>";
                    } else {
                        echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
                    }
                }else{
                    echo "<script>alert('Ukuran file terlalu besar');location.href='tambah_buku.php';</script>"; 
                }
            }
        }
    }    
?>