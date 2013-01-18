<?php include_once('header.php');
//include_once('adminmenu.php');\
session_start();
$_SESSION['username']='sachin';
$_SESSION['userid']=2;
	
?>
<title>Add Page</title>
<body>
<script type="text/javascript">
function pagevalidate()
{ 
	var page=document.getElementById('pagename').value;
	var pagecont=document.getElementById('pagecontent').value;
	if(page=="")
	{
		alert('Please Enter Page Name');
		document.getElementById('pagename').focus();
		return false;
	}
	if(pagecont=="")
	{
		alert('Please Enter Page Contents');
		document.getElementById('pagecontent').focus();
		return false;
	}

    return true

}
</script>
	<h2>Add page</h2>
	<form name='createpage' action='../includes/createpage_res.php' method='post' >
	<table border='1' width='70%'>
	  <tr><td>Page Name</td><td><input type='text'  name='pagename' id="pagename" ></td></tr>
	  <tr><td>Page Content</td><td><textarea name='pagecontent' id="pagecontent"  height='50' width='70'></textarea></td></tr>	
	  <tr><td colspan='2' align='center'><input type='submit'  name='btncreatepage' value="create page " onClick="return pagevalidate();" ></td></tr>
	</table>	
	</form>
		


<?php include_once('footer.php');?>