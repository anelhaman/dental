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

    if($visi == '') { $visi = date("Y-m-d");  }
    
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
  public function newRecord($a){
		 $query = "INSERT INTO  visit_dent(
    id,
    DENTTYPE,
    SERVPLACE,
    PTEETH,
    PCARIES,
    PFILLING,
    PEXTRACT,
    DTEETH,
    DCARIES,
    DFILLING,
    DEXTRACT,

    NEED_FLUORIDE,
    NEED_SCALING,
    NEED_SEALANT,
    NEED_PFILLING,
    NEED_DFILLING,
    NEED_PEXTRACT,
    NEED_DEXTRACT,
    NPROSTHESIS,

    PERMANENT_PERMANENT,
    PERMANENT_PROSTHESIS,
    PROSTHESIS_PROSTHESIS,

    GUM1,GUM2,GUM3,GUM4,GUM5,GUM6,

    SCHOOLTYPE,CLASS
    )VALUES (
      :id ,  :denttype , :servplace ,
     :pteeth  , :pcaries , :pfilling , :pextract , :dteeth , :dcaries , :dfilling , :dextract ,
     :need_fluoride , :need_scaling , :need_sealant , :need_pfilling , :need_dfilling , :need_pextract , :need_dextract , :nprosthesis ,
     :permanent_permanent , :permanent_prosthesis , :prosthesis_prosthesis ,
     :gum1 , :gum2 ,  :gum3 ,  :gum4 , :gum5 , :gum6 ,
     :schooltype , :class )";

    $this->db->query($query);
    $this->db->bind(':id',$a['id']);
    $this->db->bind(':denttype',$a['denttype']);
    $this->db->bind(':servplace',$a['servplace']);
    $this->db->bind(':pteeth',$a['pteeth']);
    $this->db->bind(':pcaries',$a['pcaries']);
    $this->db->bind(':pfilling',$a['pfilling']);
    $this->db->bind(':pextract',$a['pextract']);
    $this->db->bind(':dteeth',$a['dteeth']);
    $this->db->bind(':dcaries',$a['dcaries']);
    $this->db->bind(':dfilling',$a['dfilling']);
    $this->db->bind(':dextract',$a['dextract']);
    $this->db->bind(':need_fluoride',$a['need_fluoride']);
    $this->db->bind(':need_scaling',$a['need_scaling']);
    $this->db->bind(':need_sealant',$a['need_sealant']);
    $this->db->bind(':need_pfilling',$a['need_pfilling']);
    $this->db->bind(':need_dfilling',$a['need_dfilling']);
    $this->db->bind(':need_pextract',$a['need_pextract']);
    $this->db->bind(':need_dextract',$a['need_dextract']);
    $this->db->bind(':nprosthesis',$a['nprosthesis']);
    $this->db->bind(':permanent_permanent',$a['permanent_permanent']);
    $this->db->bind(':permanent_prosthesis',$a['permanent_prosthesis']);
    $this->db->bind(':prosthesis_prosthesis',$a['prosthesis_prosthesis']);
    $this->db->bind(':gum1',$a['gum1']);
    $this->db->bind(':gum2',$a['gum2']);
    $this->db->bind(':gum3',$a['gum3']);
    $this->db->bind(':gum4',$a['gum4']);
    $this->db->bind(':gum5',$a['gum5']);
    $this->db->bind(':gum6',$a['gum6']);
    $this->db->bind(':schooltype',$a['schooltype']);
    $this->db->bind(':class',$a['class']);
    
    $this->db->execute();

    return $this->db->lastInsertId();
  }
  public function getDataVisitDent($id){
    $query = "SELECT id
    FROM visit_dent
    WHERE id = :id";

    $this->db->query($query);
    $this->db->bind(':id',$id);
    $this->db->execute();
    $count = $this->db->rowCount();
		return $count;

  }
}
  
?>