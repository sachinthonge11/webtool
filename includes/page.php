<?php 
include_once("../includes/dbconnect.php");
class Page 
{
	var $database = null;
	function __construct() {
		$this->database = new DBConnection();
	}

	function Adduserpage($userid,$pagename,$pagecontent){
		$query ="INSERT INTO page (user_id, page_name, page_content)values('$userid','$pagename','$pagecontent')";
		$result_set = $this->database->query($query);
		return $result_set;
	}
	function updateuserpage($pageid,$userid,$pagename,$pagecontent){
		$query =" update page set page_name='$pagename',page_content='$pagecontent',modified_by='$userid' where user_id = '$userid' and page_id ='$pageid'";
		//echo "query=".$query;
		$result_set = $this->database->query($query);
		return $result_set;
	}
	function deletepageinfo($pageid,$userid){
		$query =" Delete from page where page_id='$pageid' and user_id='$userid' ";
		$result_set = $this->database->query($query);
		//echo "query=".$query; die;
		return $result_set;
	}
	function Fetchpageinfo($id,$Type)
	{
			 //echo "url id=".$pageid."type=".$Type;
		$query = "select page_id,user_id, page_name, page_content from page where ";
		if($Type == 'byuser')
		{
		 $query.=" user_id='$id' ";
		}
		if($Type == 'bypage')
		{
			$query.= " page_id ='$id' ";
		}
		//echo "query=".$query;
		$result_set = $this->database->query($query);
		return $result_set;

	}
}
?>