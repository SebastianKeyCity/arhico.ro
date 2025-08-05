<!DOCTYPE html>
<html lang="ro">

<?php include('components/head.php'); ?>

<body>

  <?php include('components/navbar.php'); ?>

  <main>
    <section id="hero">
      <h1>Bun venit la Arhico</h1>
      <p>Gustul evenimentelor locale, zilnic în farfuria ta.</p>
      <a href="meniu.php" class="btn">Vezi Meniul</a>
    </section>

    <section id="meniu">
      <h2>Meniul Zilei</h2>
      <div class="grid-meniu">
        <div class="produs">Ciorbă de burtă</div>
        <div class="produs">Sarmale cu mămăligă</div>
        <div class="produs">Desert surpriză</div>
      </div>
    </section>

    <section id="cont">
      <h2>Contul Meu</h2>
      <p>Autentificare simplificată bazată pe telefon.</p>
      <button onclick="verificaCont()">Intră în cont</button>
    </section>
  </main>

  <?php include('components/footer.php'); ?>

  <script>
    function verificaCont() {
      const user = localStorage.getItem('arhicoUser');
      if (user) {
        location.href = 'profil.php';
      } else {
        location.href = 'cont.php';
      }
    }
  </script>

</body>
</html>