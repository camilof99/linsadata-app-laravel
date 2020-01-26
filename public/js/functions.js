// select
var select = document.querySelector('#tema');
// texarea
var textarea = document.querySelector('#eltexto');

// evento change para obtener el valor del select
select.addEventListener('change', function() {
  // concateno al textarea el valor seleccionado y le agrego
  // un salto de línea
  textarea.value += this.value + ', ' + '\n';
});

const $seleccionArchivos = document.querySelector("#foto1"),
  $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});

const $seleccionArchivos2 = document.querySelector("#foto2"),
  $imagenPrevisualizacion2 = document.querySelector("#imagenPrevisualizacion2");

// Escuchar cuando cambie
$seleccionArchivos2.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos2 = $seleccionArchivos2.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos2 || !archivos2.length) {
    $imagenPrevisualizacion2.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo2 = archivos2[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL2 = URL.createObjectURL(primerArchivo2);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion2.src = objectURL2;
});