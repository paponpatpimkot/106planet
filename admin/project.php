<?php
  include 'navbar.php';
  include '../connect.php';
  $pj=$con->query("SELECT * FROM project");
?>
<div class="container mt-5">
  <a href="addpj.php" class="btn btn-primary mb-3">+เพิ่มข้อมูล</a>
  <table class="table table-striped">
    <tr>
      <th class="bg-success text-white">ลำดับที่</th>
      <th class="bg-success text-white">ชื่อโปรเจค</th>
      <th class="bg-success text-white">กลุ่มที่</th>
      <th class="bg-success text-white">เจ้าของผลงาน</th>
      <th class="bg-success text-white">action</th>
    </tr>
    <?php
      while($row=mysqli_fetch_array($pj)){ ?>
      $i=1;
    ?>
    <tr>
      <td><?php echo $i;$i++?></td>
      <td><?php echo $row['pj_name']?></td>
      <td><?php echo $row['groups']?></td>
      <td><?php echo $row['owner']?></td>
      <td>
        <a href="">edit</a>
        <a href="">delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>