<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/conn_close.php';  
 ?>
 <?php include_once './parts/header.php'; ?>

 <div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/m12m.png" alt="">
      <h1 class="display-4 fw-normal">العيد عيدين<br> مع<br> عيديات متعب</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="demo"></h3>
      <p class="lead fw-normal">للسحب على الجوائز والهدايا</p>
      <a class="btn btn-outline-secondary" href="https://www.instagram.com/reasahalharmain/reel/C5ZG5igr53J/?hl=ar">صفحة الانستقرام</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  
   <div class="container">
  <ul class="list-group list-group-flush">
      <li class="list-group-item">تابع البث المباشر على صفحتي على انستقرام بالتاريخ المذكور اعلاه</li>
      <li class="list-group-item">سأقوم ببث مباشر اسئله واجوبه حره للجميع</li>
      <li class="list-group-item">خلال فتره الساعه سيتم فتح صفحه التسجيل هنا جيث سنقوم بتسجيل اسمك وايميلك</li>
      <li class="list-group-item">بنهايه البث سيتم اختيار اسم واحد من قاعده البيانات بشكل عشوائي</li>
      <li class="list-group-item"> الرابحين سيحصلون على هداياقيمة</li>
</ul>
</div>
</div>


<div class="position-relative text-raight">
<div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3 back>الرجاء ادخال المعلومات  التواصل</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value ="<?php echo $firstName ?>" aria-describedby="firstName">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label"> الاسم الثاني </label>
    <input type="text" name="lastName" class="form-control" id="lastName"  value ="<?php echo $lastName ?>" aria-describedby="lastName">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label"> البريد الالكتروني</label>
    <input type="text"  name="email" class="form-control" id="email" value ="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div></div>
  </div> 
  
  <button type="submit" name="send" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>


<br>
</div>

<div class ="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-4 mx-auto my-5 ">
<button type="button" id="winner" class="btn btn-primary">
والفائز هو 
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modalLabel"> الفائز</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $users ): ?>
        <h1 class=" display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($users['firstName']). ' ' .htmlspecialchars($users['lastName']) ?></h1>
        <?php endforeach;  ?>
      </div>
      <div class="modal-footer">
       <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
       <!-- <button type="button" class="btn btn-primary">Understood</button>-->
      </div>
    </div>
  </div>
</div>







  <?php include_once './parts/footer.php'; ?>

