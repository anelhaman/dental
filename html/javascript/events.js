$("#schooltype").on("change",()=>{
  let value = $("#schooltype").val()
  
  $.ajax({
    url   : "api/opt.api.php",
    type : "POST",
    data  : {
      "value" : value
    }
  }).done(function(data){
    console.log(data.data.value)
  })
})