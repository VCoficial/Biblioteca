let btnbuscarLibro1 = document.getElementById("agregarLibrosPrestamos1");

btnbuscarLibro1.addEventListener("click", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formAgregarLibro"));

  console.log(...formulario);

  let mitablita = document.getElementById("mitablita");

  mitablita.innerHTML += `
  <td>${document.getElementById("idtraerLibro").text}<td>
  <td>${document.getElementById("idtraerCliente").text}<td>
  <td>${document.getElementById("fechaInicioPrestamo").value}<td>
  <td>${document.getElementById("fechaEntregaLibro").value}<td>
  <td>${document.getElementById("cantidadLibros1").value}<td>`;

  //window.location.assign(URLROOT + "usuarios");
});
