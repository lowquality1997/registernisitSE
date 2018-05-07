<!DOCTYPE html>
<html>
<head>
<a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
    <button type="button" class="btn btn-info">ประกาศ</button>
  <button type="button" class="btn btn-success">จดหมายข่าว</button>
  <button type="button" class="btn btn-warning">ข่าวสมัครงาน</button>
  <button type="button" class="btn btn-danger">ข่าวทั้งหมด</button>
<style>
body{
     background: url(img/p1.jpg)
}
div {
    background-color: aqua;
    color: black;
    padding: 10px;
}
div {
    width: 320px;
    padding: 10px;
    border: 5px solid gray;
    margin: 0;
}
h1 {
    background-color: orange;
    color: dark;
    padding: 20px;
	border-style: solid;
    border-width: 5px;
}
</style>
<title>ข่าวสาร</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#1").hide();
    });
    $("#show").click(function(){
        $("#1").show();
    });
});
$(document).ready(function(){
    $("#hide1").click(function(){
        $("#2").hide();
    });
    $("#show1").click(function(){
        $("#2").show();
    });
});
</script>
</head>
<body>
<center><img src="img/h3.jpg" alt="h3" style="width:20%;max-width:150px"></center>
<center><h1>ประกาศ</h1></center>
<center><button id="hide">ซ่อน</button>
<button id="show">แสดง</button>
<div id="1">
ประกาศรายชื่อผู้ยื่นคำร้องขอจบ ภาคเรียนที่ 2 ปีการศึกษา 2560 ประจำเดือน เมษายน<br />
ข้อปฏิบัติที่ควรทราบ<br />
1.กรุณาตรวจสอบข้อมูลต่าง ๆ ให้ถูกต้อง<br />
ข้อมูลที่ต้องตรวจสอบ<br />
-ชื่อ – นามสกุล ภาษาไทย<br />
-ชื่อ – นามสกุล ภาษาอังกฤษ<br />
-วัน / เดือน / ปี เกิด<br />
-วุฒิการศึกษาเดิม<br />
หากพบว่าข้อมูลต่าง ๆ ไม่ถูกต้องให้ดำเนินการแจ้งแก้ไขได้ที่ งานทะเบียนชั้น 1 อาคาร ศูนย์ศึกษาพัฒนาจังหวัดนครปฐม ตั้งแต่วันที่ประกาศรายชื่อ จนถึง วันที่ 13 พฤษภาคม 2561<br />
2.หากนักศึกษาคนใดที่ยื่นขอจบแล้วไม่มีรายชื่อให้ติดต่อที่ฝ่ายทะเบียนชั้น1 อาคาร ศูนย์ศึกษาพัฒนาจังหวัดนครปฐม<br />
3. หากตรวจสอบข้อมูลแล้ว ไม่มีข้อผิดพลาดประการใด ให้รอดูประกาศรายชื่อผู้สำเร็จการศึกษาในลำดับต่อไป<br />
</div></center>
<br>
<center><button id="hide1">ซ่อน</button>
<button id="show1">แสดง</button>
<div id="2">
ประกาศรายชื่อผู้มีสิทธิ์เข้ารับคัดเลือกนักศึกษาภาคปกติ ระดับปริญญาตรี ประจำปีการศึกษา 2561 รอบที่ 3 <br />
หลักสูตรครุศาสตรบัณฑิต (5 ปี) หลักสูตรทั่วไป (4 ปี) สอบวันที่ 21 เมษายน 61 ll หลักสูตรพยาบาลศาสตรบัณฑิต สอบวันที่ 21 - 22 เมษายน 2561<br />

</div></center>


</body>
</html>