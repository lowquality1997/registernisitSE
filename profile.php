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
				<table width="100%" border="3">
	      <tr>
	        <th scope="col"><table width="100%" border="0">
	          <tr>
	            <th width="16%" scope="col">ลำดับที่</th>
	            <th width="34%" scope="col">รหัสประจำตัวประชาชน</th>
	            <th width="34%" scope="col">ชื่อ-นามสกุล</th>
	            <th width="16%" scope="col">เบอร์โทร</th>
	            </tr>
	            <?php

	            $n = new USER();
	            $result = $n->selectallregister();
	            foreach ($result as $row)
	             {
								 $l=$row["Register_id"];

	             ?>
	          <tr>
							<td><?php echo $row["Register_id"];?></td>
	            <td><a href="Description.php?ID_card=<?php echo $row["ID_card"];?>"><?php echo $row["ID_card"];?></a></td>
	            <td><?php echo $row["First_name"];?></td>
	            <td><?php echo $row["Telephone"];?></td>

	            </tr>
	          <?php } ?>
	        </table></th>
	      </tr>
	    </table>




    </div>

</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
