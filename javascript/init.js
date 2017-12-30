$(document).ready(()=>{
  $progressbar = $("#progressbar")
  
  $progressbar.fadeIn();
	$progressbar.width('0%');
	$progressbar.animate({width:'100%'},200);
  $progressbar.fadeOut();
  
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
    
    
    // alert("Saved")
  })
  $("#btnClear").on("click",()=>{
    $progressbar.fadeIn();
    $progressbar.width('100%');
    $progressbar.animate({width:'85%'},500,e=>{
      $progressbar.animate({width:'70%'},1000,e=>{
        $progressbar.animate({width:'0%'},150,e=>{
        
          $progressbar.fadeIn();
          $progressbar.width('0%');
          
              $progressbar.animate({width:'100%'},150,e=>{
                $progressbar.fadeOut();
            
          })
          
        
         
        })
      })
    })

   
    // alert("Clear")
  })
})