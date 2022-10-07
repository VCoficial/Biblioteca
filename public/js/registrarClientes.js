const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("registrarClientes");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(
    document.getElementById("formClientesRegistrar")
  );

  console.log(...formulario);

  fetch(URLROOT + "Clientes/insertarClientes", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {
      console.log(data);
      Swal.fire({
        icon: "success",
        title: "Buen trabajo",
        text: "Cliente registrado con exito",
        footer: `<a class="btn btn-success" href='${URLROOT} Clientes '>Ver tabla</a>`,
      });
      //window.location.assign(URLROOT + "Libros");
    });
});
