function myFunction() {
    // Obtener el valor del input
    var copyText = document.getElementById("myInput");
  
    // Seleccionar el texto
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
     // Copiar el texto
    navigator.clipboard.writeText(copyText.value);
  
    // Mostrar un mensaje de confirmación
    alert("Copied the text: " + copyText.value);
  }

  //Alternar entre los rojos de la paleta
  document.getElementById("checkboxR").onclick = function() {
    document.getElementById("checkboxRR").checked = false;
  };
  document.getElementById("checkboxRR").onclick = function() {
    document.getElementById("checkboxR").checked = false;
  };
  
  //Alternar entre los verdes de la paleta
  document.getElementById("checkboxG").onclick = function() {
    document.getElementById("checkboxGR").checked = false;
  };
  document.getElementById("checkboxGR").onclick = function() {
    document.getElementById("checkboxG").checked = false;
  };
    //Alternar entre los azules de la paleta
    document.getElementById("checkboxB").onclick = function() {
      document.getElementById("checkboxBR").checked = false;
    };
    document.getElementById("checkboxBR").onclick = function() {
      document.getElementById("checkboxB").checked = false;
    };
    
  
  
  
  