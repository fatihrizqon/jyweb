<?php
class Root_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }


  //Student Management

  public function getStudent()
  {
    $query = $this->db->get('students');
    return $query->result();
  }

  public function addStudent($data)
  {
    $this->db->insert('students', $data);
    return TRUE;
  }

  public function deleteStudent($id_student)
  {
    return $this->db->delete('students', array('id_student'=>$id_student));
  }

  // Presence
  public function presence($data)
  {
    $this->db->insert('presence', $data);
    return TRUE;
  }
  public function getPresence()
  {
    $query = $this->db->get('presence');
    return $query->result();
  }

  // Loading Data
  public function loadToday()
  {
   $query = $this->db->query('
      SELECT COUNT(*) "count" FROM presence WHERE date = DATE_SUB(CURRENT_DATE(),INTERVAL 0 DAY);
   ');
   return $query->result(); 
  }

  public function loadYesterday()
  {
   $query = $this->db->query('
      SELECT COUNT(*) "count" FROM presence WHERE date = DATE_SUB(CURRENT_DATE(),INTERVAL 1 DAY);
   ');
   return $query->result(); 
  }

  public function loadWeekly()
  {
   $query = $this->db->query('
      SELECT COUNT(id_presence) "count" FROM presence
      WHERE DATE BETWEEN DATE_SUB(NOW(),INTERVAL 1 WEEK) AND NOW();
   ');
   return $query->result(); 
  }

  public function loadMonthly()
  {
   $query = $this->db->query('
      SELECT COUNT(id_presence) "count" FROM presence
      WHERE DATE BETWEEN DATE_SUB(NOW(),INTERVAL 1 MONTH) AND NOW();
   ');
   return $query->result(); 
  }

  public function loadYearly()
  {
    $query = $this->db->query('
      SELECT EXTRACT(month FROM date) "month", count(*) "count"
      FROM presence
      WHERE EXTRACT(YEAR FROM date)
      GROUP BY EXTRACT(month FROM date)
      ORDER BY EXTRACT(month FROM date);
    ');
    return $query->result();
  }

  public function loadRank()
  {
    $query = $this->db->query('
        SELECT COUNT(*) AS count,
        "students.student_name" AS name, "students.id_student" AS id_student, "students.program" AS program, "students.years" AS years
        FROM presence 
        JOIN students 
        ON "presence.id_student" = "students.id_student"
        GROUP BY "presence.id_student"
        ORDER BY count DESC LIMIT 10;
    ');
    return $query->result();
  }
}