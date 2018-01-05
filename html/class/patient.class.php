<?php

class Patient{
  
	public $name;
  public $lastname;

  private $db;
  
  public function __construct() {
    global $wpdb;
    $this->db = $wpdb;
  }

  public function getDataPatient($visi,$pres){

    if($visi == ""){
       $visi = date("Y-m-d");
      }
    
    $query ="SELECT date(visitdate) as visitdate
    ,v.hn
    ,v.id
    ,vc.prescriptionno 
    ,CONCAT(cp.prenamelong,p.fname,' ',p.lname) as fullname
    ,if(p.gender =1,'ชาย','หญิง') as gender
    ,YEAR(v.visitdate) - YEAR(p.dob) as age
    ,cr.rightname
    ,pd.drug as drugallergy

    FROM visit v  
    INNER JOIN visit_clinic vc ON v.id = vc.id
    INNER JOIN patient p ON v.hn = p.hn
    INNER JOIN visit_ins vi on v.id = vi.id
    INNER JOIN c_righthos cr ON vi.inshos = cr.rightcode
    INNER JOIN c_prename cp ON p.prename = cp.prenamecode
    LEFT JOIN pt_drugallergy pd ON pd.hn = p.hn
    WHERE date(visitdate) = :visi AND vc.prescriptionno = :pres";

    $this->db->query($query);
    $this->db->bind(':pres',$pres);
    $this->db->bind(':visi',$visi);
    $this->db->execute();
    $dataset = $this->db->single();
		return $dataset;

  }
}
  
?>