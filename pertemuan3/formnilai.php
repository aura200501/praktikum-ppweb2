<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8d7da; /* Soft pink background */
        }
        .card {
            background-color: #ffffff; /* White background for the card */
            border: 1px solid #f5c6cb; /* Light pink border */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        .card-header {
            background-color: #f5c6cb; /* Light pink header */
            color: #721c24; /* Darker text color */
            font-weight: bold;
            border-top-left-radius: 10px; /* Rounded corners */
            border-top-right-radius: 10px; /* Rounded corners */
        }
        .btn-primary {
            background-color: #d63384; /* Soft pink button */
            border-color: #d63384; /* Match border color */
        }
        .btn-primary:hover {
            background-color: #c82391; /* Darker pink on hover */
            border-color: #bd2130; /* Darker border on hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Form Nilai Mahasiswa
            </div>
            <div class="card-body">
                <form method="post" action="hasil-nilai.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                        <div class="col-8">
                            <input id="nim" name="nim" placeholder="masukan nim anda" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rombel" class="col-4 col-form-label">Rombel</label> 
                        <div class="col-8">
                            <input id="rombel" name="rombel" placeholder="masukan rombel anda" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="Pemweb 2">Pemweb 2</option>
                                <option value="Statistik">Statistik</option>
                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                                <option value="UI/UX">UI/UX</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
                        <div class="col-8">
                            <input id="tugas" name="tugas" placeholder="masukan nilai tugas" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                        <div class="col-8">
                            <input id="uts" name="uts" placeholder="masukan nilai UTS anda"type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                        <div class="col-8">
                            <input id="uas" name="uas" placeholder="masukkan nilai uas" type="text" required="required" class="form-control">
                       </div>
                    </div> 
                    <div class="form-group row">
                         <div class="offset-4 col-8">
                         <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
</div>
</form>
</body>
</html>