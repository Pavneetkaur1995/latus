
<?php $__env->startSection('title', 'Jokes'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center" id="password-container">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Please Enter Password</div>
                <div class="card-body">
                    <form action="<?php echo e(route('check.password')); ?>" method="POST" id="handleAjax">
                        <?php echo csrf_field(); ?>
                        <div id="errors-list"></div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password">
                                <?php if($errors->has('password')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Proceed
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="jokes"></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(function() {
        $(document).on("submit", "#handleAjax", function() {
            var e = this;
            $(this).find("[type='submit']").html("Processing...");

            $.ajax({
                url: $(this).attr('action'),
                data: $(this).serialize(),
                type: "POST",
                dataType: 'json',
                success: function (data) {
                $(e).find("[type='submit']").html("Proceed");
                if (data.status) {
                    $("#password-container").html('');
                    $('#jokes').html(data.jokesPage);
                }else{
                    $(".alert").remove();
                    $.each(data.errors, function (key, val) {
                        $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
                    });
                }
                }
            });

            return false;
        });
    });
</script>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latus\resources\views/api/authenticate.blade.php ENDPATH**/ ?>