let btnEnviar = document.getElementById("btnEnviar");
//Fetch usando el post
btnEnviar.addEventListener("click", (e) => {
  //alert("diste click");
  e.preventDefault(); //previene reenvio automatico
  let datos = new FormData(document.getElementById("frmCliente"));
  //console.log(...datos);
  fetch("http://localhost/php227/fetch/destino.php", {
    method: "POST",
    body: datos, //cors
  })
    .then((response) => response.json())
    .then((data) => {
      //console.log("Exito :", data);
      alert(data);
    })
    .catch((error) => {
      console.log("hay un error :", error);
    });
});