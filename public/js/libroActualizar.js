const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("actualizarLibro");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formActualizaLibro"));

  console.log(...formulario);

  fetch(URLROOT + "Libros/actualizarLibro", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

        console.log(data);
        Swal.fire({
            icon: 'success',
            title: 'Buen trabajo',
            text: 'Libro Actualizado con exito',
            footer: `<a class="btn btn-success" href='${URLROOT}Libros '>Ver tabla</a>`
          })
        //window.location.assign(URLROOT + "usuarios");
      
    });
});



