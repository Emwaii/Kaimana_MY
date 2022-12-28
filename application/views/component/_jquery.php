    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>    
    <script src="assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <!-- <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script> -->
    <script src="assets/js/pages/simple-datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/pages/sweetalert2.js"></script>
    <script>
        $(document).ready(function(){
            $("#table1").DataTable();
        });

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        
        $(function() {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: "linked",
            todayHighlight: true
        });
    });

    </script>
    
    </body>
</html>
