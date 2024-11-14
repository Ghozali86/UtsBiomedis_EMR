			</div>
        </div>
    </div>
	<script src="<?= base_url('_assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('_assets/js/bootstrap.min.js'); ?>"></script>

    <!-- load DataTables -->
    <script src="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.js"></script>
    <footer class="footer bg-dark text-white py-3 mt-4">
    <div class="container text-center">
        <p class="mb-0">&copy; 2024 Rumah Sakit EMR. All Rights Reserved.</p>
    </div>
</footer>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>
