<?php require_once "root.php";?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Library:National Institute of Technology, Sikkim</title>
<link type="text/css" rel="stylesheet" href="<?php echo $path;?>styles/main.css">
<link type="text/css" rel="stylesheet" href="<?php echo $path;?>styles/animate.css">
<link href="<?php echo $path;?>images/tablogo.png" rel="icon" type="image/x-icon">
<script type="text/javascript" src="<?php echo $path;?>js/animate.js"></script>
<script type="text/javascript" src="<?php echo $path;?>js/jquery.min.js"></script>
</head>

<body>
<div id="page">						<!--div for page  -->
	 
<!--header.php is to be loaded here--> 
<?php include $path."includes/header.php"; ?>
	 
	<div id="pageBody">		
    <table>
		<tr>
		<td>
    		<div id="menuSpace">
    		 
			 <!--menu.php is to be loaded here-->
			 <?php include $path."includes/menu.php"; ?>
			 
			 
    	</div>
		</td>
    	<td>
        <div id="bodySpace">
		
		<!--slideshow.php is to be loaded here-->
		<?php include "includes/slideshow.php"; ?>
        <!--announcement.php is to be loaded here-->   
		 <?php include "includes/announcement.php"; ?> 
    	</div>
		</td>
		</tr>
	</table>

	<!--links.php is to be loaded here-->
	<?php include $path."includes/links.php"; ?>
	
	</div>
</div>     							<!--page ends here-->

<!--footer.php is to be loaded here-->
<?php include $path."includes/footer.php"; ?>
</body>
</html>