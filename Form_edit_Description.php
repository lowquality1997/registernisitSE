<?php
    include('dbconfig.php');
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
<title>ยินดีต้อนรับ<?php print($userRow['user_email']); ?></title>
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

    	<label class="h5">ยินดีต้อนรับ: <?php print($userRow['user_name']); ?></label>
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
							 <form name="form10" method="post" action="Edit_Description.php?ID_card=<?php echo $row["ID_card"];?>">
	           <label>Register_id :: <?php echo $row["Register_id"];?></label><br>
	           <label>รหัสประจำตัวประชาชน :: </label>
						 <input type="text" name="ID_card" value="<?php echo $row["ID_card"];?>"></input><br>
	           <label>E-mail :: </label>
						 <input type="text" name="E_mail" value="<?php echo $row["E_mail"];?>"></input><br>
             <label>ชื่อ ::</label>
						 <input type="text" name="First_name" value="<?php echo $row["First_name"];?>"></input><br>
             <label>นามสกุล ::</label>
						 <input type="text" name="Last_name" value="<?php echo $row["Last_name"];?>"></input><br>
             <label>ชื่อ-ภาษาอังกฤษ ::</label>
						 <input type="text" name="First_name_E" value="<?php echo $row["First_name_E"];?>"></input><br>
             <label>นามสกุล-ภาษาอังกฤษ ::</label>
						 <input type="text" name="Last_name_E" value="<?php echo $row["Last_name_E"];?>"></input><br>
             <label>วัน/เดือน/ปี เกิด ::</label>
						 <input type="text" name="Birthday" value="<?php echo $row["Birthday"];?>"></input><br>
             <label>เชื้อชาติ ::</label>
						 <input type="text" name="Nationality" value="<?php echo $row["Nationality"];?>"></input><br>
             <label>ศาสนา ::</label>
						 <input type="text" name="Faith" value="<?php echo $row["Faith"];?>"></input><br>
             <label>หมู่โลหิต ::</label>
						 <input type="text" name="Blood_Type" value="<?php echo $row["Blood_Type"];?>"></input><br>
             <label>บ้านเลขที่	 ::</label>
						 <input type="text" name="House_number" value="<?php echo $row["House_number"];?>"></input><br>
             <label>หมู่ ::</label>
						 <input type="text" name="Swine" value="<?php echo $row["Swine"];?>"></input><br>
             <label>ซอย ::</label>
						 <input type="text" name="Alley" value="<?php echo $row["Alley"];?>"></input><br>
             <label>ถนน  ::</label>
						 <input type="text" name="street" value="<?php echo $row["street"];?>"></input><br>
             <label>จังหวัด   ::</label>
						 <input type="text" name="f_entryid2" value="<?php echo $row["f_entryid2"];?>"></input><br>
             <label>แขวง/ตำบล ::</label>
						 <input type="text" name="zone" value="<?php echo $row["zone"];?>"></input><br>
             <label>รหัสไปรษณีย์  ::</label>
						 <input type="text" name="Postcode" value="<?php echo $row["Postcode"];?>"></input><br>
             <label>โทรศัพท์ ::</label>
						 <input type="text" name="Telephone" value="<?php echo $row["Telephone"];?>"></input><br>
 					 	 <button>บันทึก</button>
             <p><a href="Delete_Description.php?ID_card=<?php echo $row["ID_card"];?>">ลบข้อมูล</a></p>
					 </form>
	          <?php } ?>



    

    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
