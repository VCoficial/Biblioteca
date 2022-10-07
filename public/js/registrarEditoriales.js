const URLROOT = "http://localhost/Biblioteca/";

let btnInsertarUsuarios = document.getElementById("enviarDatos");

btnInsertarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formEditoriales"));

  console.log(...formulario);

  fetch(URLROOT + "Editoriales/insertarEditoriales", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

      Swal.fire({
        icon: 'success',
        title: 'Buen trabajo',
        text: 'editorial registrado con exito'
      })
      //location.assign(URLROOT +"Usuarios"); // o
      
      let table = document.getElementById("mitabla");
      
      table.innerHTML = `
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>
      </tr>`;
      data.forEach((i) => {
        table.innerHTML += `<tr>
            <td>${i.idEditoriales }</td>
            <td>${i.NombreEditorial}</td>
            <td>${i.Estado}</td>
            <td><a href='' class = 'btn btn-primary'>editar</a></td>
        </tr>`;
        
      });
    });
});



