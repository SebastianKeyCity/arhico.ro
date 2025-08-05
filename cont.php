<?php include('components/navbar.php'); ?>
<?php include('components/head.php'); ?>

<main>
  <section id="creare-cont" class="form-container">
    <h2>Crează-ți contul Arhico</h2>
    <form id="signup-form">
      <label for="nume">Nume complet:</label>
      <input type="text" id="nume" name="nume" required>
      <label for="telefon">Număr de telefon:</label>
      <input type="tel" id="telefon" name="telefon" required>
      <label for="zi-nastere">Zi de naștere:</label>
      <input type="date" id="zi-nastere" name="zi-nastere" required>
      <label for="adresa">Adresă de livrare:</label>
      <textarea id="adresa" name="adresa" rows="2" required></textarea>
      <button type="submit">Creează cont</button>
    </form>
    <p id="confirmare" style="display:none; color: green; margin-top: 1rem;">✅ Cont creat cu succes!</p>
  </section>
</main>

<?php include('components/footer.php'); ?>

<script>
  document.getElementById('signup-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const user = {
      nume: document.getElementById('nume').value,
      telefon: document.getElementById('telefon').value,
      ziNastere: document.getElementById('zi-nastere').value,
      adresa: document.getElementById('adresa').value
    };
    localStorage.setItem('arhicoUser', JSON.stringify(user));
    document.getElementById('confirmare').style.display = 'block';
    setTimeout(() => {
      window.location.href = 'index.php';
    }, 2000);
  });
</script>