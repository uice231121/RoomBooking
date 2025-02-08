<!--   Core JS Files   -->
<script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url() . 'assets/argon-dashboard-master' ?>/assets/js/argon-dashboard.min.js?v=2.0.4"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<!-- data table -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        new DataTable('#example');
    });
</script>