<?php

  require_once(__ROOT__ . "controller/Controller.php");

class ContactController extends Controller
{
    public function insertCourseSuggestion() 
    {
    
	$user_id = $_REQUEST['user_id'];
	$suggested_course_name = $_REQUEST['suggested_course_name'];
	$course_faculty_id = $_REQUEST['course_faculty_id'];
	$course_img = $_REQUEST['course_img'];
	$student_message = $_REQUEST['student_message'];
	$admin_respond = $_REQUEST['admin_respond'];
	$auditor_comment = $_REQUEST['auditor_comment'];
	$ispenalty = $_REQUEST['ispenalty'];
	$hr_penalty = $_REQUEST['hr_penalty'];

      
//        if(!preg_match(!empty($question)))
//         {
              $this->model->insertMessage($course_img,$user_id,$suggested_course_name,$course_faculty_id,$student_message);
//        }
//        else
//         {
//           // Problem: please check your inputs
//             echo 'Problem: please check your inputs';
//        }
        
    }
    
            public function edit()
    {
        
	$admin_respond = $_REQUEST['admin_respond'];
    $id =$_REQUEST['id'];
            
//         if(!preg_match( '/^[0-9]+$/', $course_name) && is_numeric($course_price) && !empty($name) && !empty($price) && !empty($img))
//         {
              $this->model->editAdminRespond($admin_respond, $id);
//        }else
//         {
//           // Problem: please check your inputs
//             echo 'Problem: please check your inputs';
//        }

      
    }
    
            public function editAuditor()
    {
        $auditor_comment = $_REQUEST['auditor_comment'];
        $id =$_REQUEST['id'];
            
//         if(!preg_match( '/^[0-9]+$/', $course_name) && is_numeric($course_price) && !empty($name) && !empty($price) && !empty($img))
//         {
              $this->model->editComment($auditor_comment, $id);
//        }else
//         {
//           // Problem: please check your inputs
//             echo 'Problem: please check your inputs';
//        }

      
    }
    
                public function editHR()
    {
        $hr_penalty = $_REQUEST['hr_penalty'];
        $id =$_REQUEST['id'];
            
//         if(!preg_match( '/^[0-9]+$/', $course_name) && is_numeric($course_price) && !empty($name) && !empty($price) && !empty($img))
//         {
              $this->model->editPenalty($hr_penalty, $id);
//        }else
//         {
//           // Problem: please check your inputs
//             echo 'Problem: please check your inputs';
//        }

      
    }
	
	 public function delete()
    {
      $id = $_REQUEST['id'];
      $this->model->deleteMessage($id); 
    }

  }
?>