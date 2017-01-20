<?php   
class Student_model extends CI-Model {   
   
    function student_get_students() {   
        return $this->db->get('bad_students');     
    }

    function student_get_by_stud_id($stud_id) {
        return $this->db->get_where('bad_students', array('stud_id' => $stud_id));
    }

    function student_add($first_name, $second_name, $middle_name, $group_numb) {
        $data = array(
            'stud_name' => $first_name,
            'stud_second_name' => $second_name,
            'stud_middle_name' => $middle_name,
            'group_numb' => $group_numb
        );

        $this->db->like($data);
        $this->db->from('bad_students');
        $student_counter = $this->db->count_all_results();
        
        if ($student_counter > 0)
        {
            return array("state"=>false,"mesage"=>"Студент с таким именем уже существует");
        }

        $this->db->insert('bad_students',$data);

        return array("state"=>true,"mesage"=>"Студент успешно добавлен");
    }

    function student_edit($stud_id, $first_name, $second_name, $middle_name, $group_numb){
        $date = array(
            'stud_name' => $first_name, 
            'stud_second_name' => $second_name,
            'stud_middle_name' => $middle_name,
            'group_numb' => $group_numb
            );
        this->db->where('stud_id' = $stud_id);
        this->db->update('bad_students', $data);

        return array("state"=>true,"mesage"=>"Данные студента успешно обновлены");
    }

    function student_delete($stud_id) {
        $this->db->where('stud_id', $stud_id);
        $this->db->delete('bad_students');
        return array("state"=>true,"mesage"=>"Студент успешно удален");
    }

    function curent_student_delete($first_name, $second_name, $middle_name, $group_numb) {
        $data = array(
            'stud_name' => $first_name,
            'stud_second_name' => $second_name,
            'stud_middle_name' => $middle_name,
            'group_numb' => $group_numb
        );

        $this->db->like($data);
        $this->db->from('bad_students');
        $student_counter = $this->db->count_all_results();
        
        if ($student_counter > 0)
        {
            $this->db->where($data);
            $this->db->delete('bad_students');
            return array("state"=>true,"mesage"=>"Студент успешно удален");
        }

        return array("state"=>false,"mesage"=>"Студент не найден"); 
    } 
 
}   
?>