<section id="welcome-section">
    <div class="container-responsive j-c-flex-end" id="welcome-container">
        <div id="connexion-box">
          <h1>Bienvenue</h1>
            <?php if (isset($_GET['error'])){
                echo "<div id=\"msg-error\"><div>Identifiant et/ou mot de passe incorrect(s)</div>
                    <a href=\"#\" id=\"btn-error-close\"><img src=\"../../admin/img/close.svg\" alt=\"\"></a></div>";
            }?>
          <form action="?connect" method="post">
            <div class="box-input">
              <div>Votre Login</div>
              <label for="login"></label>
              <input type="text" name="login" id="login">
            </div>
            <div class="box-input">
              <div>Votre Mot de Passe</div>
              <label for="password"></label>
              <input type="password" name="password" id="password"><br>
            </div>
            <input type="submit" value="Valider">
          </form>
        </div>
    </div>
</section>
<script src="../../public/js/welcome.js"></script>