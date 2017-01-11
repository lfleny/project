<?php 

function student_get_by_stud_id($stud_id) {
	return query("SELECT * FROM `bad_students` WHERE stud_id = '".$stud_id."'");
}

function student_get_students() {
	return query("SELECT * FROM `bad_students`");
}

function student_add($first_name, $second_name, $middle_name, $group_numb) {
	$student_counter = query("SELECT COUNT(*) as count FROM `bad_studentss` WHERE `stud_name` = '".$first_name."' AND `stud_second_name` = '".$second_name."' AND `stud_middle_name` = '".$middle_name."' AND `group_numb` = '".$group_numb."'");
		if ($student_counter[0]['count']>0){
			return array("state"=>false,"mesage"=>"Студент с таким именем уже существует");
		}

		$stud=query("INSERT INTO `bad_students`(`stud_name`, `stud_second_name`, `stud_middle_name`, `group_numb`) VALUES ('".$first_name."','".$second_name."','".$middle_name."','".$group_numb."')");

		return array("state"=>true,"mesage"=>"Студент успешно добавлен",'stud'=>$stud);
}

function student_edit($stud_id, $first_name, $second_name, $middle_name, $group_numb) {
	query("UPDATE `bad_students` SET `stud_name` = '".$first_name."', `stud_second_name` = '".$second_name."', `stud_middle_name` = '".$middle_name."', `group_numb` = '".$group_numb."' WHERE stud_id = '".$stud_id."'");

	return array("state"=>true,"mesage"=>"Данные студента успешно обновлены");

}

function student_delete($stud_id) {
	query("DELETE FROM `bad_students` WHERE stud_id = '".$stud_id."'");
	return array("state"=>true,"mesage"=>"Студент успешно удален");
}

function curent_student_delete($first_name, $second_name, $middle_name, $group_numb) {
	$student_counter = query("SELECT COUNT(*) as count FROM `bad_students` WHERE `stud_name` = '".$first_name."' AND `stud_second_name` = '".$second_name."' AND `stud_middle_name` = '".$middle_name."' AND `group_numb` = '".$group_numb."'");
		if ($student_counter[0]['count']>0){
			query("DELETE FROM `bad_students` WHERE `stud_name` = '".$first_name."' AND `stud_second_name` = '".$second_name."' AND `stud_middle_name` = '".$middle_name."' AND `group_numb` = '".$group_numb."'");
			return array("state"=>true,"mesage"=>"Студент успешно удален");
		} else {
		return array("state"=>false,"mesage"=>"Студент не найден");
	}
	
}

?>
