<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "root", "projectpemweb"
);

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    
    //cek apakah tidak ada gambar yg diupload
    if($error === 4){
        echo "<script>
                alert('Choose a file to upload your picture!');
              </script>";
        return false;
    
    }
    
    //cek apakah yg diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(in_array(!$ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
                alert('Your uploaded file is not an image!');
              </script>";
        return false;
    }
    
    //cek jika ukurannya terlalu besar
    if($ukuranFile > 1000000){
        echo "<script>
                alert('Your image's size is too large!');
              </script>";
        return false;
    }
    
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    //lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    
    return $namaFileBaru;
}



function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($conn);
}



function ubah($data){
    global $conn;
    
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $fullname = $data["fullname"];
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    
    //query update data
    $query = "UPDATE user SET
                fullname = '$fullname',
                username = '$username',
                email = '$email',
                password = '$password'
              WHERE id = $id
             ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}


function cari($keyword){
    $query = "SELECT * FROM user 
                WHERE 
              username LIKE '%$keyword%' OR
              email LIKE '%$keyword%' 
             ";
    return query($query);

}


function registrasi($data){
    global $conn;
    
    $fullname = strtolower(stripslashes($data["fullname"]));
    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user 
                                   WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('Username sudah terdaftar!');
              </script>";
        return false;
    }
    //cek email
	
	/*var email = document.getElementById( "email" );
    if( email.value == "" || email.value.indexOf( "@" ) == -1 ){
		echo "<script>
		alert("You Have To Input Valid Email Address");
		</script>";
		return false;
	}*/
    
	//cek konfirmasi password
    if($password !== $password2){
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
              </script>";
        return false;
    } 
        
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT); 


    //insert ke database
    $query = "INSERT INTO user
                VALUES
                ('','$fullname', '$username','$email', '$password')
             ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

function setComments($data){
    global $conn;
        
        $username = ($data["username"]);
        $tanggal = ($data["date"]);
        $komentar = ($data["message"]);
    
        /*$username = $_POST['username'];
        $tanggal = $_POST['tanggal'];
        $komentar = $_POST['komentar'];*/
        
        $sql = "INSERT INTO komentar (id, username, komentar, tanggal)
                VALUES ('', '$username', '$komentar', '$tanggal')";
        //$result = mysqli_query($conn, $sql);
        mysqli_query($conn, $sql);
    
        return mysqli_affected_rows($conn);
    
}

function getComments(){
    global $conn;
    $sql = "SELECT * FROM komentar";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
       
            echo "<div clas='comment-box'>";
            echo $row['username']."	";
            echo $row['tanggal']. "<br>";
            echo nl2br($row['komentar']);
            echo "<form method='POST' action=''>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <input type='submit' name='deleteComment' value='Hapus'>
              </form>
             
        </div>";
        
    }
}

/*function editComments($conn){
    if(isset($_POST['submitComment'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $tanggal = $_POST['tanggal'];
        $komentar = $_POST['komentar'];
        
        $sql = "UPDATE komentar SET komentar='$komentar' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        header("Location: kids.php");
    }
}*/

function deleteComments($id){
global $conn;
        
        $sql = "DELETE FROM komentar WHERE id='$id'";
        mysqli_query($conn, $sql);
        return mysqli_affected_rows($conn);
    }



?>