// select
var select = document.querySelector('#tema');
// texarea
var textarea = document.querySelector('#eltexto');

// evento change para obtener el valor del select
select.addEventListener('change', function() {
  // concateno al textarea el valor seleccionado y le agrego
  // un salto de línea
  textarea.value += this.value + '\r\n';
});