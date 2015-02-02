<?php require_once "../path.php";?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Library:National Institute of Technology, Sikkim</title>
<link type="text/css" rel="stylesheet" href="<?php echo $path;?>styles/main.css">
<link href="<?php echo $path;?>images/tablogo.png" rel="icon" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="<?php echo $path;?>styles/animate.css">
<script type="text/javascript" src="<?php echo $path;?>js/animate.js"></script>
<script type="text/javascript" src="<?php echo $path;?>js/jquery.min.js"></script>
</head>

<body>
<div id="page">						<!--div for page  -->
	 
<!--header--> 
<?php include $path."includes/header.php"; ?>
	 
	<div id="pageBody">		
    <table>
		<tr>
		<td>
    		<div id="menuSpace">
    		 
			 <!--menu-->
			 <?php include $path."includes/menu.php"; ?>
			 
			 
    	</div>
		</td>
    	<td>
        <div id="bodySpace">
		
		<!--contents-->
		<?php include "/faq.php"; ?>
          
		  
    	</div>
		</td>
		</tr>
	</table>

	<!--links-->
	<?php include $path."includes/links.php"; ?>
	
	</div>
</div>     							

<!--footer-->
<?php include $path."includes/footer.php"; ?>
</body>
</html>