<?php include_once('header.php');
 include_once('../includes/page.php');
session_start();
$_SESSION['username']='sachin';
$_SESSION['userid']=2;

if(isset($_GET['pageurlid']))
{
	$pageid=$_GET['pageurlid'];
	$viewpage=new Page();
    $Type='bypage';
   if(isset($_GET[pageurlid])) {
    $res=$viewpage->Fetchpageinfo($pageid,$Type);
    $db=new DBConnection();
    $pagerow=$db->fetch_assoc($res);

    			$pageid=$pagerow[page_id];
   		 		$pagename=$pagerow[page_name];
    			$pagecontent=$pagerow[page_content];
    		}
    
}	
?>
<title>Edit Page</title>
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
	<h2>Modify page</h2>
	<form name='createpage' action='../includes/createpage_res.php' method='post' >
	<table border='0'>
	<tr><td colspan='2'><input type='hidden'  name='pageid' id="pageid" value="<?php if(!empty($pageid)) echo $pageid;?>" ></td></tr>
	  <tr><td>Page Name</td><td><input type='text'  name='pagename' id="pagename" value="<?php if(!empty($pagename)) echo $pagename;?>" ></td></tr>
	  <tr><td>Page Content</td><td><textarea name='pagecontent' id="pagecontent"  height='50' width='70'><?php if(!empty($pagecontent)) echo $pagecontent; ?></textarea></td></tr>	
	  <tr><td colspan='2' align='center'><input type='submit'  name='btnmodifypage' value="Modify page " onClick="return pagevalidate();" ></td></tr>
	</table>	
	</form>
		


<?php include_once('footer.php');?>