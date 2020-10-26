function removePokemon(p1) {
    document.getElementById('idPokemonBorrar').setAttribute('value',p1);
    document.getElementById('eliminar').style.display='block';
}

function editarPokemon(p1) {
    document.getElementById('idPokemonEditar').setAttribute('value',p1);
    document.getElementById('editar').style.display='block';
}

function detailPokemon(p1) {
    document.getElementById('idPokemonEditar').setAttribute('value',p1);
    document.getElementById('editar').style.display='block';
}
