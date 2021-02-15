<footer class="app-footer">
    <div>
        <span>&copy; 2020 Copyright </a> </span>
    </div>
    <div class="ml-auto">
        <span>Developed by Civila</span>
        <a href="#"></a>
    </div>
</footer>

<script src="<?= base_url('assets/vendors/jquery/js/jquery.min.js') ?>">
</script>
<script src="<?= base_url('assets/vendors/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/pace-progress/js/pace.min.js') ?>"></script>
<script src="<?= base_url('assets/vendors/@coreui/coreui/js/coreui.min.js') ?>"></script>
<!-- form validation -->
<script src="<?= base_url('assets/node_modules/bootstrap-validator/dist/validator.min.js') ?>"></script>
<!-- datatables -->
<script src="<?= base_url('assets/vendors/datatables/datatables.min.js') ?>"></script>
<!-- custom js -->
<script src="<?= base_url('assets/js/custom.js') ?>" type="text/javascript" charset="utf-8"></script>
<!-- fontawesome -->
<script src="<?= base_url('assets/js/all.min.js') ?>" type="text/javascript" charset="utf-8"></script>
<!-- sweetaler 2 -->
<script src="<?= base_url('assets/js/sweetalert2.all.min.js') ?>"></script>
<!-- custom file input -->
<script src="<?= base_url('assets/node_modules/bs-custom-file-input/dist/bs-custom-file-input.min.js') ?>"></script>
<script src="<?= base_url('assets/js/easyResponsiveTabs.js') ?>"></script>

<script>
    // Setup datatables 
    $(document).ready(function() {
        // lightbox
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

        //init custom file input
        bsCustomFileInput.init()

        // sweetalert
        const flashdata = $('.flash-data').data('flashdata');
        const title = $('.flash-data').data('title');
        const type = $('.flash-data').data('type');

        if (flashdata) {
            Swal.fire({
                title: title,
                text: flashdata,
                icon: type
            })
        }

        // Setup datatables
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        //----------------------footer content-----------------------

        //datavila
        $("#datavila").dataTable()
        $("#datavila").on('click', '.remove', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama');
            hapusdata('Data Vila', "<?= base_url('admin/dashboard/delete/') ?>", id, nama)
        })

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true // 100% fit in a container
        });
    });
</script>
</body>

</html>