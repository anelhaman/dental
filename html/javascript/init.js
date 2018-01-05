$(document).ready(()=>{

  //init
  $progressbar = $("#progressbar")
  
  $progressbar.fadeIn();
	$progressbar.width('0%');
	$progressbar.animate({width:'100%'},200);
  $progressbar.fadeOut();

  // event save
  $("#btnSubmit").on("click",()=>{
    $progressbar.fadeIn();
    $progressbar.width('0%');
    $progressbar.animate({width:'30%'},600,e=>{
      $progressbar.animate({width:'70%'},200,e=>{
        $progressbar.animate({width:'100%'},75,e=>{
        $progressbar.fadeOut();
        })
      })
    })  
  })

  //event clear
  $("#btnClear").on("click",()=>{
    $progressbar.fadeIn();
    $progressbar.width('100%');
    $progressbar.animate({width:'85%'},500,e=>{
      $progressbar.animate({width:'70%'},1000,e=>{

      $('#hn').html("")
      $('#prescriptionno').val("")
      $('#visitdate').val("")
      $('#fullname').html("")
      $('#gender').html("")
      $('#age').html("")
      $('#rightname').html("")
      $progressbar.animate({width:'0%'},150,e=>{
        $('html,body').animate({
          scrollTop: 0
        }, 800);
        
          $progressbar.fadeIn();
          $progressbar.width('0%');
          
              $progressbar.animate({width:'100%'},150,e=>{
                $progressbar.fadeOut();
          })       
        })
      })
    })
  })

  
    // event enter input
    $('#visitdate, #prescriptionno').bind("enterKey",function(e){
    
      $prescriptionno = $("#prescriptionno").val();
      $visitdate      = $("#visitdate").val();

      
      console.log("Wait a moment....")
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
        console.log("Request Error",request.responseText);
      }

    }).done(function(data){
      console.log(data)

      if(data.data == false){
        console.log("error")
        $(".notification").css('display','block');
      }else{
        $(".notification").css('display','none');
      }

      $progressbar.fadeIn();
      $progressbar.width('0%');
      $progressbar.animate({width:'100%'},1000,e=>{
      
        $('#hn').html(data.data.hn)
        $('#visitdate').val(data.data.visitdate)
        $('#fullname').html(data.data.fullname)
        $('#gender').html(data.data.gender)
        $('#age').html(data.data.age)
        $('#rightname').html(data.data.rightname)

        
        
      });
      $progressbar.fadeOut();

    }).fail(function(e){
      
    });

      
    });
    $('#visitdate, #prescriptionno').keyup(function(e){
      if(e.keyCode == 13)
      {
          $(this).trigger("enterKey");
      }
    });
  

}) // document ready
