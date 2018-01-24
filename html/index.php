<?php
require_once 'autoload.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="description" content="<?php echo DESCRIPTION;?>">
  <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
  <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css.map">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <title><?php echo TITLE;?></title>
</head>
<body>
  <div id="progressbar"></div>
  <div class="container" id="main">
      <div class="header">
          <section class="hero is-medium is-info is-bold ">
              <div class="hero-body ">
                <div class="headcontainer">
                  <h1 class="title">
                    ระบบจัดการข้อมูลทันตกรรม
                  </h1>
                  <h2 class="subtitle">
                    Chaopraya Abhaiphubejhr Hospital eDMS
                  </h2>
                </div>
              </div>
            </section>
      </div>
      <div class="notification is-warning" id="aa">
                <button class="delete"></button>
                รายการนี้ถูก<strong> เพิ่มข้อมูลแล้ว</strong>
                </div>
      <div class="notification is-danger" id="wi">
                <button class="delete"></button>
                กรุณาตรวจสอบ <strong>เลขที่ใบสั่งยา </strong>  อีกครั้ง<br>
                - <strong>ไม่พบข้อมูล </strong>เลขที่ใบสั่งยา <br>
                </div>
      <div class="notification is-warning" id="ce">
                <button class="delete"></button>
                กรุณาตรวจสอบ <strong>การเชื่อมต่อ </strong>  อีกครั้ง <br>
                - ไม่สามารถเข้าถึงฐานข้อมูลได้ <br>
                </div>
        <div class="maincontainer">
            <div class="columns is-multiline is-desktop ">               
                    <div class="column is-1 ">
                        <label> HN</label>
                        </div>
                    <div class="column is-3">
                            <span id="hn" class="input" name="hn"> </span>
                        </div>
                    <div class="column is-1">
                        <label> วันที่</label>
                        </div>
                    <div class="column is-2">
                            <input type="date" id="visitdate" class="input" name="visitdate" >
                        </div>
                    <div class="column is-2">
                        <label> เลขที่ใบสั่งยา</label>
                        </div>
                    <div class="column is-3">
                            <input type="text" id="prescriptionno" class="input" name="prescriptionno" autofocus>
                        </div>

                    <div class="column is-1 ">
                        <label> ชื่อ</label>
                        </div>
                    <div class="column is-3">
                            <span id="fullname" class="input" name="fullname" ></span>
                        </div>
                    <div class="column is-1 ">
                        <label> เพศ</label>
                        </div>
                    <div class="column is-1">
                            <span id="gender" class="input" name="gender" ></span>
                        </div>
                    <div class="column is-1 ">
                        <label> อายุ</label>
                        </div>
                    <div class="column is-1">
                            <span id="age" class="input" name="age"></span>
                        </div>
                    <div class="column is-1 ">
                        <label> สิทธิ</label>
                        </div>
                    <div class="column is-3">
                            <span id="rightname" class="input" name="rightname" ></span>
                        </div>

            <div class="column is-one-quarter ">
                <label> ประเภทผู้รับบริการ</label>
              </div>
            <div class="column is-one-quarter ">
              <div class="select">
                <select id="denttype" class="input" name="denttype">
                <option value=1 disabled>กลุ่มผู้หญิงตั้งครรภ์ (1)</option>
                <option value=2 disabled>กลุ่มเด็กก่อนวัยเรียน (2)</option>
                <option value=3 disabled>กลุ่มเด็กวัยเรียน (3)</option>
                <option value=4 disabled>กลุ่มผู้สูงอายุ (4)</option>
                <option value=5 selected>กลุ่มอื่นๆ (5)</option>
                </select>
                </div>  
              </div>
            <div class="column is-one-quarter ">
                <label>สถานที่</label>
              </div>
            <div class="column is-one-quarter ">
                <div class="select">
                    <select id="servplace" class="input" name="servplace" >
                        <option value="1">ภายในสถานบริการ (1)</option>
                        <option value="2" disabled>ภายนอกสถานบริการ (2)</option>
                      </select>
                    </div> 
              </div>
            <div class="column is-one-quarter ">
                <label>สถานศึกษา</label>
              </div>
            <div class="column is-one-quarter ">
            <div class="select">
                <select id="schooltype" class="input" name="schooltype">
                <option value="-1">Select dropdown</option>
                <option value=1 >ศพด (1)</option>
                <option value=2 >ประถมศึกษารัฐบาล (2)</option>
                <option value=3 >ประถมศึกษาเทศบาล (3)</option>
                <option value=4 >ประถมศึกษาท้องถิ่น (4)</option>
                <option value=5 >ประถมศึกษาเอกชน (5)</option>
                <option value=6 >มัธยมศึกษารัฐบาล (6)</option>
                <option value=7 >มัธยมศึกษาเทศบาล (7)</option>
                <option value=8 >มัธยมศึกษาท้องถิ่น (8)</option>
                <option value=9 >มัธยมศึกษาเอกชน (9)</option>
                </select>
            </div>
            </div>
            <div class="column is-one-quarter ">
                <label>ระดับการศึกษา</label>
              </div>
            <div class="column is-one-quarter ">
                <input type="text" id="class" class="input" name="class">
              </div>
          </div>
        
      </div>
      <div class="containerA">
         <section class="hero is-info is-bold is-small">
            <div class="hero-body">
              <div class="contentacontainer">
                <h1 class="title">
                  Permanent
                </h1>
                <h2 class="subtitle">
                  ฟันแท้
                </h2>
              </div>
            </div>
          </section>
      <div class="contentA">
      <div class="columns is-multiline is-desktop ">
        
          <div class="column is-one-quarter ">
              <label>จำนวนฟันแท้</label>
          </div>
          <div class="column is-one-quarter">
              <input type="number" id="pteeth" class="input" name="pteeth" value=0>      
          </div>
          <div class="column is-one-quarter">
              <label>จำนวนฟันที่ผุ</label>
          </div>
          <div class="column is-one-quarter">
              <input type="number" id="pcaries" class="input" name="pcaries" value=0>       
          </div>
          <div class="column is-one-quarter">
               <label>จำนวนฟันที่อุดแล้ว</label>
          </div>
          <div class="column is-one-quarter">
              <input type="number" id="pfilling" class="input" name="pfilling" value=0>
            </div>
          <div class="column is-one-quarter">
              <label>จำนวนฟันที่ถอนแล้ว</label>
          </div>
          <div class="column is-one-quarter">
              <input type="number" id="pextract" class="input" name="pextract" value=0>
          </div>
          <div class="column is-one-quarter">
              <label>จำนวนฟันที่ต้องอุด</label>
          </div>
          <div class="column is-one-quarter">
              <input type="number" id="need_pfilling" class="input" name="need_pfilling" value=0>
          </div>
          <div class="column is-one-quarter">
              <label>จำนวนฟันที่ต้องถอน/รักษารากฟัน</label>
          </div>
          <div class="column is-one-quarter">
              <input type="number" id="need_pextract" class="input" name="need_pextract" value=0>
          </div>
          <div class="column is-one-quarter">
              <label> ต้องขูดหินน้ำลาย </label>
          </div>
          <div class="column is-one-quarter">
              <input type="checkbox" id="need_scaling" name="need_scaling" checked>
          </div>
          <div class="column is-one-quarter">
              <label>ประเภทฟันเทียมที่จำเป็นต้องใส่</label>
          </div>
          <div class="column is-one-quarter">
            <div class="select">
              <select id="nprosthesis" class="input option" name="nprosthesis">
                  <option value="-1">Select dropdown</option>
                  <option value="1">ต้องใส่ฟันเทียมบนและล่าง (1)</option>
                  <option value="2">ต้องใส่ฟันเทียมบน (2)</option>
                  <option value="3">ต้องใส่ฟันเทียมล่าง (3)</option>
                  <option value="4">ไม่ต้องใส่ฟันเทียม (4)</option>
                </select>
              </div>
          </div>
          <div class="column is-3">
              <label>จำนวนคู่สบฟันแท้ - ฟันแท้</label>
          </div>
          <div class="column is-3">
              <input type="number" id="permanent_permanent" class="input" name="permanent_permanent" value=0>
          </div>
          <div class="column is-6"></div>
          <div class="column is-3">
              <label>จำนวนคู่สบฟันแท้ - ฟันเทียม</label>
          </div>
          <div class="column is-3">
              <input type="number" id="permanent_prosthesis" class="input" name="permanent_prosthesis" value=0>
            </div>
            <div class="column is-6"></div>
          <div class="column is-3">
              <label>จำนวนคู่สบฟันเทียม - ฟันเทียม</label>
          </div>
          <div class="column is-3">
              <input type="number" id="prosthesis_prosthesis" class="input" name="prosthesis_prosthesis" value=0>
            </div>
            <div class="column is-6"></div>
        </div>
      </div>
      </div>
      <div class="containerB">
          <section class="hero is-info is-bold is-small">
              <div class="hero-body">
                <div class="contentacontainer">
                  <h1 class="title">
                    Prosthesis
                  </h1>
                  <h2 class="subtitle">
                    ฟันเทียม
                  </h2>
                </div>
              </div>
            </section>
        <div class="contentB">
            <div class="columns is-multiline is-desktop ">
        
                <div class="column is-one-quarter ">
                    <label>จำนวนฟันน้ำนม</label>
                </div>
                <div class="column is-one-quarter ">
                    <input type="number" id="dteeth" class="input" name="dteeth" value=0>
                </div>
                <div class="column is-one-quarter ">
                    <label>จำนวนฟันน้ำนมที่ผุ</label>
                </div>
                <div class="column is-one-quarter ">
                    <input type="number" id="dcaries" class="input" name="dcaries" value=0>
                </div>
                <div class="column is-one-quarter ">
                    <label>จำนวนฟันที่อุดแล้ว</label>
                </div>
                <div class="column is-one-quarter ">
                    <input type="number" id="dfilling" class="input" name="dfilling" value=0>
                </div>
                <div class="column is-one-quarter ">
                    <label>จำนวนฟันที่ถอนแล้ว</label>
                </div>
                
                
                <div class="column is-one-quarter ">
                    <input type="number" id="dextract" class="input" name="dextract" value=0>
                </div>
                <div class="column is-one-quarter ">
                    <label>จำนวนฟันที่ต้องอุด</label>
                </div>
                <div class="column is-one-quarter ">
                    <input type="number" id="need_dfilling" class="input" name="need_dfilling" value=0>
                </div>
                <div class="column is-one-quarter ">
                    <label>จำนวนฟันที่ต้องถอน/รักษารากฟัน</label>
                </div>
                <div class="column is-one-quarter ">
                    <input type="number" id="need_dextract" class="input" name="need_dextract" value=0>
                </div>
                
                <div class="column is-3">
                    <label>จำเป็นต้องเคลือบฟลูออไรด์</label>
                </div>
                <div class="column is-9">
                    <input type="checkbox" id="need_fluoride" class="" name="need_fluoride" checked> 
                </div>
                
                <div class="column is-3">
                    <label>จำนวน <b><u>ฟันแท้</u></b> ที่ต้อง sealant</label>
                </div>
                <div class="column is-3">
                    <input type="number" id="need_sealant" class="input" name="need_sealant" value=0>
                </div>
              </div>            
        </div>
      </div>
      <div class="containerC">
          <section class="hero is-info is-bold is-small">
              <div class="hero-body">
                <div class="contentacontainer">
                  <h1 class="title">
                    Periodontitis
                  </h1>
                  <h2 class="subtitle">
                    สภาวะปริทันต์
                  </h2>
                </div>
              </div>
            </section>
         <div class="contentC"> <!-- name="gum" -->
            <div class="columns is-multiline is-desktop ">
            <div class="column is-3">
                ฟันหลัง Q1
            </div>
            <div class="column is-5">
              <div class="select">
                <select name="gum1" id="gum1">
                    <option value="0" disabled>ปกติ (0)</option>
                    <option value="1" disabled>เลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(1)</option>
                    <option value="2" disabled>มีหินน้ำลาย แต่ยังเห็นแถบดำบนเครื่องมือ(2)</option>
                    <option value="3" disabled>มีร่องลึกปริทันต์ปริทันต์ 4-5 ม.ม.(ของเหงือกอยู่ภายในแถบดำ)(3)</option>
                    <option value="4" disabled>มีร่องลึกปริทันต์ 6 ม.ม. (มองไม่เห็นแถบดำบนเครื่องมือ)(4)</option>
                    <option value="5" disabled>มีหินน้ำลายและมีเลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(5)</option>
                    <option value="9" selected>ตรวจไม่ได้ / ไม่ตรวจ (9)</option>
                </select>
            </div>
            </div>
            <div class="column is-4"></div>
            
            <div class="column is-3">
                ฟันหน้าบน
            </div>
            <div class="column is-5">
                <div class="select">
                  <select name="gum2" id="gum2">
                    <option value="0" disabled>ปกติ (0)</option>
                    <option value="1" disabled>เลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(1)</option>
                    <option value="2" disabled>มีหินน้ำลาย แต่ยังเห็นแถบดำบนเครื่องมือ(2)</option>
                    <option value="3" disabled>มีร่องลึกปริทันต์ปริทันต์ 4-5 ม.ม.(ของเหงือกอยู่ภายในแถบดำ)(3)</option>
                    <option value="4" disabled>มีร่องลึกปริทันต์ 6 ม.ม. (มองไม่เห็นแถบดำบนเครื่องมือ)(4)</option>
                    <option value="5" disabled>มีหินน้ำลายและมีเลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(5)</option>
                    <option value="9" selected>ตรวจไม่ได้ / ไม่ตรวจ (9)</option>
                  </select>
              </div>
              </div>
            <div class="column is-4"></div>
            
            <div class="column is-3">
                ฟันหลัง Q2
            </div>
            <div class="column is-5">
                <div class="select">
                  <select name="gum3" id="gum3">
                    <option value="0" disabled>ปกติ (0)</option>
                    <option value="1" disabled>เลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(1)</option>
                    <option value="2" disabled>มีหินน้ำลาย แต่ยังเห็นแถบดำบนเครื่องมือ(2)</option>
                    <option value="3" disabled>มีร่องลึกปริทันต์ปริทันต์ 4-5 ม.ม.(ของเหงือกอยู่ภายในแถบดำ)(3)</option>
                    <option value="4" disabled>มีร่องลึกปริทันต์ 6 ม.ม. (มองไม่เห็นแถบดำบนเครื่องมือ)(4)</option>
                    <option value="5" disabled>มีหินน้ำลายและมีเลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(5)</option>
                    <option value="9" selected>ตรวจไม่ได้ / ไม่ตรวจ (9)</option>
                  </select>
              </div>
              </div>
            <div class="column is-4"></div>
            
            <div class="column is-3">
                ฟันหลัง Q3
            </div>
            <div class="column is-5">
                <div class="select">
                  <select name="gum4" id="gum4">
                    <option value="0" disabled>ปกติ (0)</option>
                    <option value="1" disabled>เลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(1)</option>
                    <option value="2" disabled>มีหินน้ำลาย แต่ยังเห็นแถบดำบนเครื่องมือ(2)</option>
                    <option value="3" disabled>มีร่องลึกปริทันต์ปริทันต์ 4-5 ม.ม.(ของเหงือกอยู่ภายในแถบดำ)(3)</option>
                    <option value="4" disabled>มีร่องลึกปริทันต์ 6 ม.ม. (มองไม่เห็นแถบดำบนเครื่องมือ)(4)</option>
                    <option value="5" disabled>มีหินน้ำลายและมีเลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(5)</option>
                    <option value="9" selected>ตรวจไม่ได้ / ไม่ตรวจ (9)</option>
                  </select>
              </div>
              </div>
            <div class="column is-4"></div>
            
            <div class="column is-3">
                ฟันหน้าล่าง
            </div>
            <div class="column is-5">
                <div class="select">
                  <select name="gum5" id="gum5">
                    <option value="0" disabled>ปกติ (0)</option>
                    <option value="1" disabled>เลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(1)</option>
                    <option value="2" disabled>มีหินน้ำลาย แต่ยังเห็นแถบดำบนเครื่องมือ(2)</option>
                    <option value="3" disabled>มีร่องลึกปริทันต์ปริทันต์ 4-5 ม.ม.(ของเหงือกอยู่ภายในแถบดำ)(3)</option>
                    <option value="4" disabled>มีร่องลึกปริทันต์ 6 ม.ม. (มองไม่เห็นแถบดำบนเครื่องมือ)(4)</option>
                    <option value="5" disabled>มีหินน้ำลายและมีเลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(5)</option>
                    <option value="9" selected>ตรวจไม่ได้ / ไม่ตรวจ (9)</option>
                  </select>
              </div>
              </div>
            <div class="column is-4"></div>
            
            <div class="column is-3">
                ฟันหลัง Q4
            </div>
            <div class="column is-5">
                <div class="select">
                  <select name="gum6" id="gum6" >
                    <option value="0" disabled>ปกติ (0)</option>
                    <option value="1" disabled>เลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(1)</option>
                    <option value="2" disabled>มีหินน้ำลาย แต่ยังเห็นแถบดำบนเครื่องมือ(2)</option>
                    <option value="3" disabled>มีร่องลึกปริทันต์ปริทันต์ 4-5 ม.ม.(ของเหงือกอยู่ภายในแถบดำ)(3)</option>
                    <option value="4" disabled>มีร่องลึกปริทันต์ 6 ม.ม. (มองไม่เห็นแถบดำบนเครื่องมือ)(4)</option>
                    <option value="5" disabled>มีหินน้ำลายและมีเลือดออกภายหลังจากการตรวจด้วยเครื่องมือตรวจปริทันต์(5)</option>
                    <option value="9" selected>ตรวจไม่ได้ / ไม่ตรวจ (9)</option>
                  </select>
              </div>
              </div>
            <div class="column is-4"></div>
            </div>
        </div>
      </div>
      <div class="submit ">
          <a class="btnClear" id="btnClear">Clear</a>
          <a class="btnSubmit" id="btnSubmit">เพิ่มข้อมูล</a>

        </div>
  </div>
  <div class="footercontainer">
  <footer class="footer">
      <div class="footercontent">
        <div class="content has-text-centered">
          <p>
            <strong>eDMS (Dental Management System)</strong> The source code is licensed
            by <a href="http://www/cpa.go.th">www.cpa.go.th</a>. The website content
            is licensed by <br><a href="http://www/cpa.go.th">Chaopraya Abhaiphubejhr Hospital 2017</a>.
          </p>
        </div>
      </div>
    </footer>
  </div>
    <script src="./javascript/init.js"></script>

</body>
</html>
