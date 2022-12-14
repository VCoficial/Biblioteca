const URLROOT = "http://localhost/Biblioteca/";

let btnInsertarUsuarios = document.getElementById("enviarDatos");

btnInsertarUsuarios.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formUsuarios"));

  console.log(...formulario);

  fetch(URLROOT + "Usuarios/InsertarUsuarios", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {
      Swal.fire({
        icon: "success",
        title: "Buen trabajo",
        text: "Penalizacion registrada con exito",
        footer: `<a class="btn btn-success" href='${URLROOT} Penalizaciones '>Ver tabla</a>`,
      });
      //location.assign(URLROOT +"Usuarios"); // o

      let table = document.getElementById("mitabla");

      table.innerHTML = `
      <tr>
        <th scope="col">ID</th>
        <th scope="col">PrimerNombre</th>
        <th scope="col">SegundoNombre</th>
        <th scope="col">PrimerApellido</th>
        <th scope="col">segundoApellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Usuario</th>
        <th scope="col">Password</th>
        <th scope="col">RolID</th>
      </tr>`;
      data.forEach((i) => {
        table.innerHTML += `<tr>
            <td>${i.idUsuarios}</td>
            <td>${i.Nombre1}</td>
            <td>${i.Nombre2}</td>
            <td>${i.Apellido1}</td>
            <td>${i.Apellido2}</td>
            <td>${i.Telefono}</td>
            <td>${i.correo}</td>
            <td>${i.Usuario}</td>
            <td>${i.Passwordd}</td>
            <td>${i.Roles_idRoles}</td>
            <td><a href='${URLROOT}Usuarios/buscarUsuario/${i.idUsuarios}' class = 'btn btn-primary'>editar</a></td>
        </tr>`;
      });
    });
});
