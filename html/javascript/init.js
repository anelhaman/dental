$(document).ready(()=>{

    //init
    $progressbar = $("#progressbar")
    $progressbar.fadeIn()
    $progressbar.width('0%')
    $progressbar.animate({width:'100%'},400)
    $progressbar.fadeOut()
  

  // event save
    $("#btnSubmit").on("click",()=>{
      $progressbar.fadeIn()
      $progressbar.width('0%')
      $progressbar.animate({width:'30%'},600,e=>{

        getDataContainer()

        $progressbar.animate({width:'70%'},200,e=>{

          // เพิ่มข้อมูลใหม่
          newRecord()

          $progressbar.animate({width:'100%'},75,e=>{
          $progressbar.fadeOut()
          
              $('html,body').animate({
                scrollTop: 0
              }, 800)
              $('#prescriptionno').focus()

          })
        })
      })  
    })
  //event clear
    $("#btnClear").on("click",()=>{
      $progressbar.fadeIn()
      $progressbar.width('100%',100)
      $progressbar.animate({width:'85%'},500,e=>{
        $progressbar.animate({width:'70%'},1000,e=>{

        $('#hn').html("")
        $('#prescriptionno').val("")
        $('#visitdate').val("")
        $('#fullname').html("")
        $('#gender').html("")
        $('#age').html("")
        $('#rightname').html("")
        $('#prescriptionno').focus()
          $progressbar.animate({width:'0%'},150,e=>{
            $('html,body').animate({
              scrollTop: 0
            }, 800)
        $("#ce,#aa,#wi").fadeOut()
          
            $progressbar.fadeIn()
            $progressbar.width('0%')
            
                $progressbar.animate({width:'100%'},150,e=>{
                  $progressbar.fadeOut()
            })       
          })
        })
      })
    }) 
    // event enter input
    $('#visitdate, #prescriptionno').bind("enterKey",function(e){

      $progressbar.fadeIn()
      $progressbar.width('0%')
      console.log("Wait a moment....")
      $progressbar.animate({width:'33%'},1000,e=>{
        
        getRecord()

      }) // 33%

    }) // close event
    $('#visitdate, #prescriptionno').keyup(function(e){
      if(e.keyCode == 13)
      {
          $(this).trigger("enterKey")
      }
    })
    $(".delete").on("click",(e)=>{
      
      $('#prescriptionno').val("")
      $('#visitdate').val("")
      $('#hn').html("")
      $('#fullname').html("")
      $('#gender').html("")
      $('#age').html("")
      $('#rightname').html("")

      $(".notification").fadeOut(200)
      $('#prescriptionno').focus()
    })
    const getDataContainer = function(){
      

      $denttype    = $("#denttype").val()
      $servplace   = $("#servplace").val()
      $schooltype  = $("#schooltype").val()
      $class       = $("#class").val()
      
      $pteeth        = $("#pteeth").val()
      $pcaries       = $("#pcaries").val()
      $pfilling      = $("#pfilling").val()
      $pextract      = $("#pextract").val()
      $pextract      = $("#pextract").val()
      $need_pfilling = $("#need_pfilling").val()
      $need_pextract = $("#need_pextract").val()
      $need_scaling  = $("#need_scaling:checked").val()
      $nprosthesis   = $("#nprosthesis").val()
    
      $permanent_permanent   = $("#permanent_permanent").val()
      $permanent_prosthesis  = $("#permanent_prosthesis").val()
      $prosthesis_prosthesis = $("#prosthesis_prosthesis").val()
      
      $dteeth        = $("#dteeth").val()
      $dcaries       = $("#dcaries").val()
      $dfilling      = $("#dfilling").val()
      $dextract      = $("#dextract").val()
      $need_dfilling = $("#need_dfilling").val()
      $need_dextract = $("#need_dextract").val()
      $need_fluoride = $("#need_fluoride:checked").val()
      $need_sealant  = $("#need_sealant").val()
      
      $gum1 = $("#gum1").val()
      $gum2 = $("#gum2").val()
      $gum3 = $("#gum3").val()
      $gum4 = $("#gum4").val()
      $gum5 = $("#gum5").val()
      $gum6 = $("#gum6").val()

      if ($need_scaling  == undefined){ $need_scaling   = "0"}else{$need_scaling  ="1"}
      if ($need_fluoride == undefined){ $need_fluoride  = "0"}else{$need_fluoride ="1"}

      
    
    }
    const getRecord = function(){

      $prescriptionno = $("#prescriptionno").val()
      $visitdate      = $("#visitdate").val()

      $.get({
        url         :"api/patient.api.php",
        cache       : false,
        dataType    :"json",
        type        :"get",
        data        : {
          "visitdate"       : $visitdate,
          "prescriptionno"  : $prescriptionno
        },
        error: function (request, status, error) {
          $("#wi").fadeOut(100)
          $("#ce").fadeIn(1500)
          $progressbar.animate({width:'0%'},500,e=>{
            console.log("Request Error : ",request.responseText)    
          }) 
        }
  
      }).done(function(data){
        
        console.log(data) 
        $("#ce").fadeOut(1500)
        $id = data.data.id

        
        if(data.data == false){
          console.log("error")
          $progressbar.animate({width:'0%'},500,e=>{
            $("#ce,#aa").fadeOut()
            $("#wi").fadeIn()
          })
        }else{
          $("#wi,#aa").css('display','none')

          if(data.countStatus != 0){
            $("#aa").fadeIn(1500)
            // console.log("count: "+data.countStatus)

          }
          
          $progressbar.animate({width:'100%'},100,e=>{
            
            $('#hn').html(data.data.hn)
            $('#visitdate').val(data.data.visitdate)
            $('#fullname').html(data.data.fullname)
            $('#gender').html(data.data.gender)
            $('#age').html(data.data.age)
            $('#rightname').html(data.data.rightname)
          
          })

          $progressbar.fadeOut()

        }
  
        }) //close done
    }
    const newRecord = function(){ 

      $.get({
        url         :"api/patient.api.php",
        cache       : false,
        dataType    :"json",
        type        :"POST",
        data        : {
          "denttype"            : $denttype,  
          "servplace"           : $servplace,
          "schooltype"          : $schooltype,
          "class"               : $class, 
                      
          "pteeth"              : $pteeth,      
          "pcaries"             : $pcaries,     
          "pfilling"            : $pfilling,    
          "pextract"            : $pextract,     
          "need_pfilling"       : $need_pfilling,
          "need_pextract"       : $need_pextract,
          "need_scaling"        : $need_scaling,
          "nprosthesis"         : $nprosthesis, 
                    
          "permanent_permanent"     : $permanent_permanent,   
          "permanent_prosthesis"    : $permanent_prosthesis,  
          "prosthesis_prosthesis"   : $prosthesis_prosthesis, 

          "dteeth"              : $dteeth,
          "dcaries"             : $dcaries,       
          "dfilling"            : $dfilling,      
          "dextract"            : $dextract,     
          "need_dfilling"       : $need_dfilling, 
          "need_dextract"       : $need_dextract,
          "need_fluoride"       : $need_fluoride,
          "need_sealant"        : $need_sealant,
                      
          "gum1": $gum1,
          "gum2": $gum2,
          "gum3": $gum3,
          "gum4": $gum4,
          "gum5": $gum5,
          "gum6": $gum6,

          "id"  : $id

        },
        error: function (request, status, error) {
          $progressbar.animate({width:'0%'},500,e=>{
            console.log("Request Error : ",request.responseText)    
          }) 
        }
      
      }).done(function(data){
        console.log(data)
        swal({
          title: "สำเร็จ!",
          text: "เพิ่มข้อมูลเรียบร้อยแล้ว!",
          icon: "success",
          button: "ตกลง",
        });

      }).fail(function(){
        swal({
          title: "มีบางอย่างผิดพลาด!",
          text: "ไม่สามารถเพิ่มข้อมูลผู้ป่วยได้ กรุณาตรวจสอบข้อมูล!",
          icon: "warning",
          button: "ตกลง",
        });
      })

    }
  
  }) // document ready
