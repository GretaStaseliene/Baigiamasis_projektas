<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="left-footer">Visos teisės saugomos, 2022.</p>
            </div>
            <div class="col">
                <p class="right-footer">Autorius: Greta Stašelienė</p>
            </div>
        </div>
    </div>
</footer>


<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
      loop: true,
    
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
</script>

<script>
  $("#button").click(function()) {
    alert("Here");
  }
</script>

</body>
</html>

<?php

$conn->close();