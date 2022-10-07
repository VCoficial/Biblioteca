const URLROOT = "http://localhost/Biblioteca/";

let btnActualizarUsuarios = document.getElementById("registrarPrestamo");

btnActualizarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formRegistrarPenalizaciones"));

  console.log(...formulario);

  fetch(URLROOT + "Penalizaciones/insertarPenalizacion", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

        console.log(data);
        Swal.fire({
          icon: 'success',
          title: 'Buen trabajo',
          text: 'Penalizacion registrada con exito',
          footer: `<a class="btn btn-success" href='${URLROOT} Penalizaciones '>Ver tabla</a>`
        })
        //window.location.assign(URLROOT + "Libros");
      
    });
});



