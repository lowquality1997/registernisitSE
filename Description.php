<?php

	require_once("session.php");

	require_once("class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
p{
	 background-color: aqua;
    color: white;
    padding: 40px;
	}
h1{
   background-color: orange;
	border-style: solid;
    border-width: 5px;
}
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>ยินดีต้อนรับ <?php print($userRow['user_email']); ?></title>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img/h3.jpg" alt="h3" style="width:30%;max-width:150px">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/04/php-login-and-registration-script-with.html"></a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery"></a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;สวัสดี' <?php echo $userRow['user_email']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="logout.php?logout=true"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="clearfix"></div>


<div class="container-fluid" style="margin-top:80px;">

    <div class="container">

    	<label class="h5">ยินดีต้อนรับ : <?php print($userRow['user_name']); ?></label>
        <hr />

        <h1>
        <a href="home.php"><span class="glyphicon glyphicon-home"></span> home</a> &nbsp;
				<a href="profile.php"><span class="glyphicon glyphicon-user"></span> profile</a>&nbsp;
        <a href="indexinsert.php"><span class="glyphicon glyphicon-list-alt"></span> ลงทะเบียน</a></h1>
       	<hr />

        <p class="h4">หน้าผู้ใช้งาน</p>

	            <?php
              if (isset($_GET['ID_card'])) {
                $ID_card = $_GET['ID_card'];}
	            $n = new USER();
              $result = $n->selectregisterwhereid($ID_card);
	            foreach ($result as $row)
	             {

	             ?>

	           <label>Register_id :: <?php echo $row["Register_id"];?></label><br>
	           <label>รหัสประจำตัวประชาชน :: <?php echo $row["ID_card"];?></label><br>
	           <label>E-mail ::<?php echo $row["E_mail"];?></label><br>
             <label>ชื่อ ::<?php echo $row["First_name"];?></label><br>
             <label>นามสกุล ::<?php echo $row["Last_name"];?></label><br>
             <label>ชื่อ-ภาษาอังกฤษ ::<?php echo $row["First_name_E"];?></label><br>
             <label>นามสกุล-ภาษาอังกฤษ ::<?php echo $row["Last_name_E"];?></label><br>
             <label>วัน/เดือน/ปี เกิด ::<?php echo $row["Birthday"];?></label><br>
             <label>เชื้อชาติ ::<?php echo $row["Nationality"];?></label><br>
             <label>ศาสนา ::<?php echo $row["Faith"];?></label><br>
             <label>หมู่โลหิต ::<?php echo $row["Blood_Type"];?></label><br>
             <label>บ้านเลขที่	 ::<?php echo $row["House_number"];?></label><br>
             <label>หมู่ ::<?php echo $row["Swine"];?></label><br>
             <label>ซอย ::<?php echo $row["Alley"];?></label><br>
             <label>ถนน  ::<?php echo $row["street"];?></label><br>
             <label>จังหวัด   ::<?php echo $row["f_entryid2"];?></label><br>
             <label>แขวง/ตำบล ::<?php echo $row["zone"];?></label><br>
             <label>รหัสไปรษณีย์  ::<?php echo $row["Postcode"];?></label><br>
             <label>โทรศัพท์ ::<?php echo $row["Telephone"];?></label><br><br>
             <p><a href="Form_edit_Description.php?ID_card=<?php echo $row["ID_card"];?>">แก้ไขข้อมูล</a></p>
             <p><a href="Delete_Description.php?ID_card=<?php echo $row["ID_card"];?>">ลบข้อมูล</a></p>
	          <?php } ?>





    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
