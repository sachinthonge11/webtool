<?php
include_once("header.php");
include_once('../includes/page.php');
include_once('../includes/library.php');
session_start();
$_SESSION['username']='sachin';
$_SESSION['userid']=2;

//echo $_GET['pageurlid'];
if(isset($_GET['pageurlid']))
{
    $pageid=Mod_addslashes($_GET['pageurlid']);
    //echo "pageid=".$pageid;
    $viewpage=new Page();
    $Type='bypage';
   if(isset($_GET[pageurlid])) {
    $res=$viewpage->Fetchpageinfo($pageid,$Type);
    $db=new DBConnection();
    $pagerow=$db->fetch_assoc($res);
                //print_r($pagerow);
                $pageid=$pagerow[page_id];
                $pagename=$pagerow[page_name];
                $pagecontent=$pagerow[page_content];
               
            }
    
}   ?>
<!-- BEGIN: Page Content -->
    <title><?php echo $pagename;?></title>
    <h2>Page Name:<?php echo $pagename;?></h2>     
     <h3> <?php echo $pagecontent;?></h3> 
  

<?php include_once("footer.php");?>
 
