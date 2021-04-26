function usingGetElementById() {
  var cod = document.getElementById("cantidad");
  var input = document.getElementById('input');
  var input1 = document.getElementById('input1');
  var input2 = document.getElementById('input2');

  // if (cod.value == "1") {
  //   document.getElementById("input").style.display = 'block';    
  // }else{
  //   document.getElementById("input").style.display  = 'none';      
  // } 

  // if (cod.value == "2") {
  //   document.getElementById("input1").style.display = 'block';    
  // }else{
  //   document.getElementById("input1").style.display  = 'none';      
  // } 
    
  // if (cod.value == "3") {
  //   document.getElementById("input2").style.display = 'block';    
  // }else{
  //   document.getElementById("input2").style.display = 'none';    
  // }

  if (cod.value == "1") {
    input.disabled = false;        
  }else{
    input.disabled = true;        
  } 

  if (cod.value == "2") {
    input1.disabled = false;        
    input.disabled = false; 
  }else{
    input1.disabled = true;      
    input.disabled = true;  
  } 
    
  if (cod.value == "3") {
    input2.disabled = false;        
  }else{
    input2.disabled = true;        
  }


  

//   Activar y desactivar un botón
    
  
    // var button = document.getElementById('calcular');
    // var buttonn = document.getElementById('texto');

    // if (codd.value == "texto") {
    //     buttonn.disabled = false;    
    //   }else{
    //     buttonn.disabled = true;      
    //   } 
    
    //   if (codd.value == "morse") {
    //     button.disabled = false;    
    //   }else{
    //     button.disabled = true;      
    //   } 
}




    
