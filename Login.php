<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Lista de elementos</h1>
<ul id="lista_elementos"></ul>
<button onclick="openModal();">Añadir elemento</button>

<!-- Modal oculto -->
<dialog id="formModal">
<h3>Añadir elemento</h3>
<label for="nuevo_elemento">Nombre</label>
<input type="text" name="" id="nuevo_elemento">
<br><br>
<button onclick="añadirElemento();document.getElementById('nuevo_elemento').value = ''">Añadir</button>
<button onclick="closeModal();">Cerrar</button>
</dialog>
<script>
	// Muestra el modal
function openModal(){
const modal = document.getElementById('formModal');
modal.showModal();
}
	// Oculta el modal
function closeModal(){
const modal = document.getElementById('formModal');
modal.close();
}
</script>
<script>

    function
</script>

<!-- Function añadir elemento -->
<script>
function añadirElemento() {
const elemento = document.getElementById("nuevo_elemento").value;
if (elemento != "") {
const lista_elementos = document.getElementById("lista_elementos");
const li = document.createElement('li');
li.textContent = elemento;
lista_elementos.appendChild(li);
} else {
alert("Debe ingresar un nombre");
}
}
</script>

    
</body>
</html>
