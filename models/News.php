<?php

class News
{
	public static function getNewsItemById($id)
	{
		$id = intval($id);
		
		if($id){
			$db = Db::getConnection();
			
			$result = $db->query("SELECT * FROM news WHERE id=".$id." LIMIT 1");
			
			
			$newsItem = $result->Fetch(PDO::FETCH_ASSOC);
			
			return $newsItem;
		}
	}
	
	public static function getNewsList()
	{
		$newsList = array();
		$db = Db::getConnection();
		$result = $db->query("SELECT * FROM news ORDER BY date DESC LIMIT 10");
		$i = 0;
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			$newsList[$i] = $row;
			$i++;
		}
		return $newsList;
	}
}
?>