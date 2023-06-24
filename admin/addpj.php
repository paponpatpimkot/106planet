<?php
  include 'navbar.php';
?>
<div class="container mt-5 w-50">
  <div class="card">
    <div class="card-header bg-success text-white">
      เพิ่มข้อมูลโครงงาน
    </div>
    <div class="card-body">
      <form action="<?php $_SERVER['SELF']?>">
        <div class="mb-3">
          <label for="" class="form-label">ชื่อโปรเจค</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">ชื่อกลุ่ม</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">เจ้าของผลงาน</label>
          <input type="text" class="form-control">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">ชื่อโปรเจค</label>
          <input type="text" class="form-control">
        </div>
      </form>
    </div>
  </div>
</div>