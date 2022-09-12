const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("btnActualizarUsuarios");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formUsuariosEditar"));

  console.log(...formulario);

  fetch(URLROOT + "Usuarios/ActualizarUsuario", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

        console.log(data);
        window.location.assign(URLROOT + "usuarios");
      
    });
});



