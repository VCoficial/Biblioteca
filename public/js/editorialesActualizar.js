const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("editorialesActualizar");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formEditorialesActualizar"));

  console.log(...formulario);

  fetch(URLROOT + "Editoriales/actualizarEditorial", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

        console.log(data);
        Swal.fire({
            icon: 'success',
            title: 'Buen trabajo',
            text: 'editorial Actualizado con exito',
            footer: `<a class="btn btn-success" href='${URLROOT}Editoriales '>Ver tabla</a>`
          })
        //window.location.assign(URLROOT + "usuarios");
      
    });
});



