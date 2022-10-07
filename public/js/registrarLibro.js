const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("registrarLibro");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("idFormInsertarLibro"));

  console.log(...formulario);

  fetch(URLROOT + "Libros/InsertarLibro", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

        console.log(data);
        Swal.fire({
          icon: 'success',
          title: 'Buen trabajo',
          text: 'Libro registrado con exito',
          footer: `<a class="btn btn-success" href='${URLROOT}Libros '>Ver tabla</a>`
        })
        //window.location.assign(URLROOT + "Libros");
      
    });
});



