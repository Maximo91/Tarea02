<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelo extends CI_Model{

    public function construct(){
        parent::__construct();
    }
    public function consulta_simple(){
    	$consulta = $this->db->query('SELECT * FROM departments ');
   		return $consulta->result();
    }
    public function consulta_media(){
    	$consulta = $this->db->query('SELECT de.emp_no,d.dept_no FROM departments as d JOIN dept_emp as de WHERE d.dept_no = "d008" and de.dept_no = "d008" and de.emp_no < 10999;
');
   		return $consulta->result();
    }

//SELECT de.emp_no,d.dept_no FROM departments as d JOIN dept_emp as de WHERE d.dept_no = "d008" and de.dept_no = "d008" and de.emp_no < 10999;

    public function consulta_compleja(){
    	$consulta = $this->db->query('SELECT title,birth_date,salary, first_name,last_name,hire_date FROM 
                departments as d , dept_emp as de , employees as e , titles as t , salaries as s WHERE 
                d.dept_no = de.dept_no and
                de.emp_no = e.emp_no and 
                e.emp_no = s.emp_no and 
                e.emp_no = t.emp_no and 
                s.emp_no = t.emp_no and 
                s.emp_no = de.emp_no and
                t.emp_no = de.emp_no and
                d.dept_no = "d008" ');
   		return $consulta->result();
    }
}


// SELECT title,birth_date,salary, first_name,last_name,hire_date FROM 
//                 departments as d JOIN dept_emp as de JOIN employees as e JOIN titles as t JOIN salaries as s WHERE 
//                 d.dept_no = de.dept_no and
//                 de.emp_no = e.emp_no and 
//                 e.emp_no = s.emp_no and 
//                 e.emp_no = t.emp_no and 
//                 s.emp_no = t.emp_no and 
//                 s.emp_no = de.emp_no and
//                 t.emp_no = de.emp_no and
//                 d.dept_no = "d008"