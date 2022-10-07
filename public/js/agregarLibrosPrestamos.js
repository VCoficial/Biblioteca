let btnbuscarLibro1 = document.getElementById("agregarLibrosPrestamos1");

let btninsertar = document.getElementById("insertarDatos1");

btnbuscarLibro1.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formAgregarLibro"));

  console.log(...formulario);

  let mitablita = document.getElementById("mitablita");

  mitablita.innerHTML += `

  <input readonly  class="form-control" name="idLibroInsertar" id="idLibroInsertar" value="${
    document.getElementById("idtraerLibro").value
  }" type="hidden">

  <input readonly  class="form-control" name="idClienteInsertar" id="idClienteInsertar" value="${
    document.getElementById("idtraerCliente").value
  }" type="hidden">

  <td> 
    <input readonly class="form-control" name="nomLibroInsertar" id="nomLibroInsertar" value="${
      document.getElementById("idtraerLibro").text
    }" type="text">
  <td>

  <td>
    <input readonly class="form-control  " name="nomClienteInsertar" id="nomClienteInsertar" value="${
      document.getElementById("idtraerCliente").text
    }" type="text" >
  <td>

  <td><input readonly class="form-control  " name="fechaInicioInsertar" id="fechaInicioInsertar" value="${
    document.getElementById("fechaInicioPrestamo").value
  }" type="text"> <td>
  <td><input readonly class="form-control  " name="fechaFinInsertar" id="fechaFinInsertar" value="${
    document.getElementById("fechaEntregaLibro").value
  }" type="text"> <td>
  <td><input readonly class="form-control  " name="cantidadInsertar" id="cantidadInsertar" value="${
    document.getElementById("cantidadLibros1").value
  }" type="text"> <td>

  <td><input readonly class="form-control  " name="prestadorInsertar" id="prestadorInsertar" value="${
    document.getElementById("idPrestador").value
  }" type="text"> <td>

  <td><button type="submit" class="btn btn-danger">Descartar</button><td>
  `;

  //window.location.assign(URLROOT + "usuarios");
});

btninsertar.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("insertarDatos"));

  //console.log(...formulario);

  fetch(URLROOT + "Prestamos/insertarPrestamos", {
    method: "post",
    body: formulario,
  })
    .then((Response) => Response.json())
    .then((data) => {
      console.log(data);

      //window.location.assign(URLROOT + "usuarios");
    });
});
