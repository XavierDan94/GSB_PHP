<section id="welcome-section">
  <div class="container-responsive padding-md vertical-items" id="welcome-container">
    <div id="box-head">
      <div id="head-title"><?php if ((date('H') > "6") && (date('H') < "18")){ echo "Bonjour"; } else { echo "Bonsoir"; };?></div>
      <div id="head-username"><?php echo $_SESSION['prenom'] ." ". $_SESSION['nom'];?></div>
      <div></div>
    </div>
    <div class="container-responsive" id="welcome-items">
      <div class="item-card"><img src="../admin/img/person.svg" alt="">Mon profil</div>
      <div class="item-card"><img src="../admin/img/write.svg" alt="">Saisir mes notes de frais</div>
      <div class="item-card"><img src="../admin/img/search.svg" alt="">Suivi des notes de frais</div>
      <a href="?disconnect"><div class="item-card"><img src="../admin/img/leave.svg" alt="">Me déconnecter</div></a>
    </div>
  </div>
</section>