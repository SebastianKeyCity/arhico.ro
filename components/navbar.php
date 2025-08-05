<nav class="navbar">
  <div class="logo">Arhico</div>
  <ul class="nav-links">
    <li><a href="index.php">Acasă</a></li>
    <li><a href="meniu.php">Meniu</a></li>
    <li><a href="#" onclick="verificaCont()">Contul meu</a></li>
    <li><a href="oferte.php">Oferte</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>
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