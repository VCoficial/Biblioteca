const URLROOT = "http://localhost/Biblioteca/";


let btnbuscarLibro = document.getElementById("buscarLibro");

btnbuscarLibro.addEventListener("click" , function(e){
  let tablaLibros = document.getElementById("tablaLibros");
  e.preventDefault();
  //alert("hola");
  let formulario = new FormData(document.getElementById("formbuscarLIbro"));
  


  fetch(URLROOT + "Libros/buscarLibro", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {

      tablaLibros.innerHTML = `
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NombreLibro</th>
        <th scope="col">idEditorial</th>
        <th scope="col">FechaDeIngreso</th>
        <th scope="col">Autor</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Estado</th>
      </tr>`;
      
      data.forEach((i) => {
        tablaLibros.innerHTML += `<tr>
            <td>${i.idLibro}</td>
            <td>${i.Nombre}</td>
            <td>${i.Editoriales_idEditoriales }</td>
            <td>${i.fechaDeIngreso}</td>
            <td>${i.Autor}</td>
            <td>${i.FechaPublicacion}</td>
            <td>${i.Cantidad}</td>
            <td>${i.Estado}</td>
        </tr>`;
        
      });


        //window.location.assign(URLROOT + "usuarios");
      
    });

} );