<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quản lý bệnh nhân</title>
</head>

<body>
    <h1 class="bg-warning"></h1>
<?php
include './CSE_K61_KTGK_1951061070/config.php';
?>
<main class="container">
    <h2>Thêm thông tin</h2>
    <form action="process-add-patient.php" method="post">
            <div class="form-group row">
                <label for="patientid" class="col-sm-2 col-form-label">Mã bệnh nhân: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="patientid" name="patientid" >
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Họ đệm bệnh nhân:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">Tên: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="dateofbirth" class="col-sm-2 col-form-label">Ngày sinh: </label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Giới tính: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="gender" name="gender">
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">SĐT: </label>
                <div class="col-sm-10">
                <input type="tel" class="form-control" id="mobile" name="mobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Chiều cao: </label>
                <div class="col-sm-10">
                <input type="float" class="form-control" id="height" name="height">
                </div>
            </div>
            <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Cân nặng: </label>
                <div class="col-sm-10">
                <input type="float" class="form-control" id="weight" name="weight">
                </div>
            </div>
            <div class="form-group row">
                <label for="blood_type" class="col-sm-2 col-form-label">Nhóm máu: </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="blood_type" name="blood_type">
                </div>
            </div>
            <div class="form-group row">
                <label for="created_on" class="col-sm-2 col-form-label">Ngày lập sổ: </label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="created_on" name="created_on">
                </div>
            </div>
            <div class="form-group row">
                <label for="modified_on" class="col-sm-2 col-form-label">Ngày cập nhật: </label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="modified_on" name="modified_on">
                </div>
            </div>
            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
</main>