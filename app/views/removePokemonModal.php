<?php

function viewRemovePokemonModal(){
    echo "<div id='eliminar' class='w3-modal'>
    <div class='w3-modal-content'>
        <header class='w3-container w3-red'>
        <span onclick=\"document.getElementById('eliminar').style.display='none'\"
              class='w3-button w3-display-topright'>&times;</span>
            <h2>Eliminar Pokemon</h2>
        </header>
        <div class='w3-container w3-light-grey'>
            <input type='hidden' id='idPokemonBorrar'>
            <p>Desea eliminarlo?</p>
            <a href='#' onclick=\"this.href='../entrypoints/RemovePokemonController.php?remove='+document.getElementById('idPokemonBorrar').value;''\" 
            id='aEliminar'><span class='w3-button'>Si</span></a>
            <span class='w3-button' onclick=\"document.getElementById('eliminar').style.display='none'\">No</span>
        </div>
    </div>
</div>";
}


