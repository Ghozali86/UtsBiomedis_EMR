<?php
require_once"_config/config.php";
?>

</div>
</div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
               
            </div>
            <div class="col-md-6">
                <div class="social-icons">
                    <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white mx-2"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?= base_url('_assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('_assets/js/bootstrap.min.js'); ?>"></script>

<!-- load DataTables -->
<script src="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>
