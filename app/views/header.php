<header class="w3-mobile w3-container w3-red">
    <div class="w3-col s2 m2 l2 w3-left">
        <img class="w3-image" src="../images/logo.png" alt="pokedex" style="max-width: 4em">
    </div>
    <div class="w3-col s8 m8 l8 w3-center">
        <h2><b>Pokedex</b></h2>
    </div>
    <div class="w3-col s2 m2 l2 w3-right-align">
        <?php
        if($_SESSION["rol"]!=null){
            echo "<h5><b>".$_SESSION["user"]."</b></h5>";
            echo "<a href=\"/useCases/LogoutUseCase.php\"><p>Logout</p></a>";
        }
        ?>
    </div>
</header>