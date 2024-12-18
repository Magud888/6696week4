<!DOCTYPE html>
<html lang="en">
<head>

    <!-- เพิ่ม bootstrap -->
     <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- เพิ่ม Forn -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Sriracha&display=swap" rel="stylesheet">
    
        <!-- เพิ่ม sweetaleart  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">

    <style>
     body{
        font-family: "Itim", serif;
        font-weight: 400;
        font-style: normal;
        margin-left: 100px;
        }
    
    </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> ตัวอย่างภาษา php และ bootstrap </title>
</head>
<body>
    <h1> การเขี้ยนโปรแกรมด้วย php </h1>
    664485001 นาย กริชกร ปีคาน <br>
    หมู่เรียน 66/96 <br>

     <div class="alert alert-danger">
        <strong>สำเร็จแล้ว </strong> You should <a href="#" class="alert-link"> ใช้ bootstrap ได้แล้ว </a>.
    </div>
    <button type="button" class="btn btn-danger">ย้อนกลับ</button>
    <button type="button" class="btn btn-primary"> บันทึก </button>
    <br><br>

    <div class="card bg-dark text-white"> 
    <div class="card-body">ยินดีต้อนรับ</div>
    </div>
    <br><br>

    <div class="card" style="width:400px">
  <img class="card-img-top" src="41.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"> นาย กริชกร ปีคาน </h4>
    <p class="card-text">มองมาทำไม</p>
    <a href="https://www.youtube.com/watch?v=E7_kWqq-45k" class="btn btn-primary"> กดเพื่อดู </a>
  </div>
</div>
        <br>
        <!-- เพิ่มปุ่มแล้วเด้ง -->
    <button type="button" class="btn btn-outline-info"id="alert">อยากรู้ก็คลิกมาดู</button>
    <!-- เพิ่มปุ่มแล้วเด้ง 2 -->
    <button type="button" class="btn btn-outline-danger"id="alert2">กดเพื่อ</button>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </div>
  <br>
  <!-- ปุุ่ม sweetaler2 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>  
        // โค้ดสวิดข้อความ 1
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
            // โค้ดสวิดข้อความ 2
            $('#alert2').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
        
    </script>

</body>



</html>
