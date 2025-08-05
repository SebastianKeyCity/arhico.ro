<!DOCTYPE html>
<html lang="ro">

<?php include('components/head.php'); ?>

<body>

  <?php include('components/navbar.php'); ?>

  <main>
    <section id="hero" class="hero">
      <div class="hero-content">
        <h1>Bun venit la Arhico</h1> #deploy
        <p>Gustul evenimentelor locale, zilnic în farfuria ta.</p>
        <a href="meniu.php" class="btn btn-primary">Vezi Meniul</a>
      </div>
    </section>

    <section id="meniu">
      <h2>Meniul Zilei</h2>
      <div class="grid-meniu">
        <div class="produs">
          <h3>Ciorbă de burtă</h3>
          <p>Porție generoasă, cu smântână și ardei iute</p>
          <span class="pret">25 RON</span>
        </div>
        <div class="produs">
          <h3>Sarmale cu mămăligă</h3>
          <p>Tradițional românesc, servite cu ardei și smântână</p>
          <span class="pret">30 RON</span>
        </div>
        <div class="produs">
          <h3>Desert surpriză</h3>
          <p>O dulceață zilnică din partea casei</p>
          <span class="pret">15 RON</span>
        </div>
      </div>
    </section>

    <section id="cont" class="cont">
      <h2>Contul Meu</h2>
      <p>Autentificare simplificată bazată pe telefon. Gestionează comenzi și datele tale.</p>
      <a href="cont.php" class="btn">Intră în cont</a>
    </section>
  </main>

  <?php include('components/footer.php'); ?>
  <script src="js/main.js"></script>
<button id="scrollTopBtn" title="Înapoi sus">↑</button>

</body>
<div class="promo-bar">
  🎉 Comandă online și primești 10% reducere! 🎉
</div>
</html>