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

    <h1>โปรเเกรมบันทึกข้อมูลเสื้อ<h1>

    <form class="row g-3">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4"placeholder="ตัวอย่าง pun----@gmail.com">
  </div>
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4"placeholder="********">
  </div>
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Name - Surname</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Telephone number</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="098-*******">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Shirt size</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="ตัวอย่าง ไซส์เสื้อ S M L XL XXL">
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" placeholder="ตัวอย่าง Thai">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Age</label>
    <input type="text" class="form-control" id="inputZip" placeholder="ตัวอย่าง 20-30 ปี">
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Dressing style</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"
    id="alert">submit</button>
    <button type="reset" class="btn btn-primary">cancel</button>
  </div>
  
</form>
    
664485001 นาย กริชกร ปีคาน <br>
    หมู่เรียน 66/96 <br>

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
        $('#alert').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });
});
        
    </script>

</body>



</html>
