<?php
include "db_connect.php";

if(isset($_POST['submit'])){
    $kode_matkul = $_POST['kode_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $jam_matkul = $_POST['jam_matkul'];
    $kode_kelas = $_POST['kode_kelas'];
    $ruang_kelas = $_POST['ruang_kelas'];

    $sql = "INSERT INTO `coursebinus`(`kode_matkul`, `nama_matkul`, `jam_matkul`, `kode_kelas`, `ruang_kelas`) VALUES ('$kode_matkul','$nama_matkul','$jam_matkul','$kode_kelas','$ruang_kelas')";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: list_course.php?msg=New record created successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Input Data</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Binus Course List
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Course</h3>
            <p class="text-muted">Complete the list below to add new Course</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div>
                        <label class="form-label">Kode Matkul:</label>
                        <input type="text" class="form-control" name="kode_matkul"placeholder="COMP1234567">
                    </div>

                    <div>
                        <label class="form-label">Nama Matkul:</label>
                        <input type="text" class="form-control" name="nama_matkul"placeholder="WebProgramming">
                    </div>

                    <div>
                        <label class="form-label">Jam Matkul:</label>
                        <input type="text" class="form-control" name="jam_matkul"placeholder="12:30-14:50">
                    </div>

                    <div>
                        <label class="form-label">Kode Kelas:</label>
                        <input type="text" class="form-control" name="kode_kelas"placeholder="LA01">
                    </div>

                    <div>
                        <label class="form-label">Ruang Kelas:</label>
                        <input type="text" class="form-control" name="ruang_kelas"placeholder="Ruang400">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Save</button>
                        <a href="list_course.php" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>