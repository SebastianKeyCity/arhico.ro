<?php include('components/navbar.php'); ?>
<?php include('components/head.php'); ?>

<main>
  <section class="form-container">
    <h2>Profilul Meu</h2>
    <div id="profil-content"></div>
    <button onclick="logout()">Ieșire din cont</button>
  </section>
</main>

<?php include('components/footer.php'); ?>

<script>
  function logout() {
    localStorage.removeItem('arhicoUser');
    location.href = 'index.php';
  }

  const user = JSON.parse(localStorage.getItem('arhicoUser'));
  if (user) {
    document.getElementById('profil-content').innerHTML = `
      <p><strong>Nume:</strong> ${user.nume}</p>
      <p><strong>Telefon:</strong> ${user.telefon}</p>
      <p><strong>Zi de naștere:</strong> ${user.ziNastere}</p>
      <p><strong>Adresă:</strong> ${user.adresa}</p>
      <p><strong>Puncte de fidelizare:</strong> 0 ⭐</p>
    `;
  } else {
    location.href = 'cont.php';
  }
</script>