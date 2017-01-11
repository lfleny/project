<?php
	switch ($_POST['action']) {

		case 'group_add':
			load_model('group');
			$res = group_add(
				$_POST['group_numb']
				);
			echo json_encode($res);
			break;

		case 'get_all_groups':
			load_model('group');
			$res = group_get_groups();
			echo json_encode(array('list'=>$res));
			break;

		case 'group_del':
			load_model('group');
			$res = group_delete(
				$_POST['group_numb']
				);
			echo json_encode($res);
			break;

		case 'group_edit':
			load_model('group');
			$res = group_edit(
				$_POST['group_numb_old'],
				$_POST['group_numb_new']
				);
			echo json_encode($res);
			break;

		case 'student_add':
			load_model(student);
			$res = student_add(
				$_POST['name'],
				$_POST['second_name'],
				$_POST['middle_name'],
				$_POST['group_numb']
				);
			echo json_encode($res);
			break;

		case 'get_all_students':
			load_model(student);
			$res = student_get_students();
			echo json_encode(array('list'=>$res));
			break;

		case 'student_edit':
			load_model(student);
			$res = student_edit(
				$_POST['stud_id'],
				$_POST['name'],
				$_POST['second_name'],
				$_POST['middle_name'],
				$_POST['group_numb']
				);
			echo json_encode($res);
			break;

		case 'student_del':
			load_model(student);
			$res = student_delete(
				$_POST['stud_id']
				);
			echo json_encode($res);
			break;

		case 'curent_student_delete':
			load_model(student);
			$res = curent_student_delete(
				$_POST['name'],
				$_POST['second_name'],
				$_POST['middle_name'],
				$_POST['group_numb']
				);
			echo json_encode($res);
			break;

		default:
			echo json_encode(array("state"=>false, "mesage"=>"unknown action"));
			break;
	}
?>