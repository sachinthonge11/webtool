<?php session_start();
 include_once('header.php');
 include_once('../includes/page.php');
//include_once('adminmenu.php');\

$_SESSION['username']='sachin';
$_SESSION['userid']=2;
$userid=$_SESSION['userid'];
$viewpage=new Page();
$Type='byuser';
$res=$viewpage->Fetchpageinfo($userid,$Type);//  To fetch pages by user_id 
//echo $res;
$db=new DBConnection();
if($res>0){	
		echo "<table id='pages' border='2' cellspacing='2px' cellwidth='5px' >";
		echo "<tr><th>Sr.No.</th><th>Pages</th><th>Actions</th></tr>";
		$count=0;
 		while($pagerow=$db->fetch_assoc($res))
 		{
 			$count++;
 			//extract($pagerow);
 		 	echo "<tr>";
 		 	echo "<td>$count</td><td>$pagerow[page_name]</td><td><a href='viewpage.php?pageurlid=$pagerow[page_id]'>view</a>  |  <a href='editpage.php?pageurlid=$pagerow[page_id]'>Edit</a>   |   <a href='deletepage.php?pageurlid=$pagerow[page_id]' onclick=\"return confirm('Are you Sure?');\"> Delete </a> </td>";
 		 	 echo"</tr>";

 		}
 		echo "</table>";

 		echo "<br><div id='pageNavPosition'></div>";
	}
	else{
  		echo "no pages found for particular users";
	}


?>
<body>
	<script type="text/javascript"><!--
        var pager = new Pager('pages',<?php echo PAGERECORD;?>); 
        pager.init(); 
        pager.showPageNav('pager', 'pageNavPosition'); 
        pager.showPage(1);
    //--></script>

<?php include_once('footer.php');	?>