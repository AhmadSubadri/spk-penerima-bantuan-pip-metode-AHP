</div>
</main>
<footer class="py-4 bg-info mt-auto" style="box-shadow: 1px 1px 2px grey;">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-dark">Copyright &copy; SPK PIP <?php echo date('Y'); ?></div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>dashboard/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>dashboard/js/datatables-simple-demo.js"></script>

<!-- Bottom Scripts -->
<script src="<?= base_url() ?>dashboard/js/gsap/main-gsap.js"></script>
<script src="<?= base_url() ?>dashboard/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="<?= base_url() ?>dashboard/js/jquery-1.11.0.min.js"></script>

<script src="<?= base_url() ?>dashboard/js/bootstrap.js"></script>
<script src="<?= base_url() ?>dashboard/js/joinable.js"></script>
<script src="<?= base_url() ?>dashboard/js/resizeable.js"></script>
<script src="<?= base_url() ?>dashboard/js/neon-api.js"></script>
<script src="<?= base_url() ?>dashboard/js/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>dashboard/js/raphael-min.js"></script>
<script src="<?= base_url() ?>dashboard/js/morris.min.js"></script>
<script src="<?= base_url() ?>dashboard/js/toastr.js"></script>
<script src="<?= base_url() ?>dashboard/js/neon-chat.js"></script>
<script src="<?= base_url() ?>dashboard/js/neon-custom.js"></script>
<script src="<?= base_url() ?>dashboard/js/neon-demo.js"></script>
<script src="<?= base_url() ?>dashboard/js/fileinput.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?= base_url() ?>dashboard/js/datatables-simple-demo.js"></script>
<!-- modal hapus -->
<div class="modal fade" id="confirm-delete">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi!</h4>
            </div>

            <div class="modal-body">
                Yakin ingin menghapus data ini ?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger btn-ok">Hapus saja</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>


<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
</script>
</body>

</html>