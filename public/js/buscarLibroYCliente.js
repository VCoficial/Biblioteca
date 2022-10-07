const URLROOT = "http://localhost/Biblioteca/";

let btnbuscarLibro = document.getElementById("buscarLibroYCliente");

btnbuscarLibro.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(
    document.getElementById("formBuscarLibroYCliente")
  );

  fetch(URLROOT + "Prestamos/buscarLibroYCLiente", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {
      //console.log(data);

      document.getElementById("idtraerLibro").text = data.Nombre;
      document.getElementById("idtraerLibro").value = data.idLibro;

      document.getElementById("idtraerCliente").text = data.Nombre1;
      document.getElementById("idtraerCliente").value = data.idCliente;

      //window.location.assign(URLROOT + "usuarios");
    });
});
