<?php

function viewEditPokemonModal(){
    echo "<div id='editar' class='w3-modal'>
    <div class='w3-modal-content'>
        <header class='w3-container w3-red'>
        <span onclick=\"document.getElementById('editar').style.display='none'\"
              class='w3-button w3-display-topright'>&times;</span>
            <h2>Editar Pokemon</h2>
        </header>
        <div class='w3-container w3-light-grey'>
            <input type='hidden' id='idPokemonEditar'>
            <p>Desea Editarlo?</p>
            <a href='#' onclick=\"this.href='../entrypoints/EditPokemonController.php?edit='
            +document.getElementById('idPokemonEditar').value;''\" 
            id='aEliminar'><span class='w3-button'>Si</span></a>
            <span class='w3-button' onclick=\"document.getElementById('editar').style.display='none'\">cancel</span>
        </div>
    </div>
</div>";
}


