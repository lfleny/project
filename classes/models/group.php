<?php 
	function group_get_by_group_numb($group_numb) {
		return query("SELECT * FROM `bad_groups` WHERE group_numb = '".$group_numb."'");
	}

	function group_get_groups() {
		return query("SELECT `group_numb` FROM `bad_groups`");
	}

	function group_add($group_numb) {
		$group_numb_counter = query("SELECT COUNT(*) as count FROM `bad_groups` WHERE group_numb = '".$group_numb."'");
		if ($group_numb_counter[0]['count']>0){
			return array("state"=>false,"mesage"=>"Группа с таким номером уже существует");
		}

		$group_id=query("INSERT INTO `bad_groups` (`group_numb`) VALUES ('".$group_numb."')");

		return array("state"=>true,"mesage"=>"Группа успешно добавлена",'group_id'=>$group_id);
	}

	function group_edit($group_numb_old, $group_numb_new) {
		$group_id = query("UPDATE `bad_groups` SET `group_numb`=".$group_numb_new." WHERE `group_numb`=".$group_numb_old."");

		return array("state"=>true,"mesage"=>"Номер группы успешно изменен",'group_id'=>$group_id);
	}

	function group_delete($group_numb) {
		$group_numb_counter = query("SELECT COUNT(*) as count FROM `bad_groups` WHERE group_numb = '".$group_numb."'");
		if ($group_numb_counter[0]['count'] != 0){
			query("DELETE FROM `bad_groups` WHERE `bad_groups`.`group_numb` = '".$group_numb."'");
			return array("state"=>true,"mesage"=>"Группа успешно удалена");
		} else {
			return array("state"=>false,"mesage"=>"Группы с таким номером не существует");
		}
	}
?>