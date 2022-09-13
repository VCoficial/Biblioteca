const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("actualizarClientes");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(
    document.getElementById("formActualizarCliente")
  );

  console.log(...formulario);

  fetch(URLROOT + "Clientes/actualizarCliente", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {
      console.log(data);
      Swal.fire({
        icon: "success",
        title: "Buen trabajo",
        text: "Cliente Actualizado con exito",
        footer: `<a class="btn btn-success" href='${URLROOT}Clientes '>Ver tabla</a>`,
      });
      //window.location.assign(URLROOT + "usuarios");
    });
});
