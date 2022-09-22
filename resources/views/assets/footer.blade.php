<footer class="text-center">
    <span class="footer_text">© 2022 Tous droits réservés Massar Al Moukawil</span>
    <br>
    <span class="footer_text">Conception par <a href="#">NERYOU</a></span>
</footer>
</div>

<!--  MODAL -->
@include('assets.modal_2')

</body>
<script>
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>