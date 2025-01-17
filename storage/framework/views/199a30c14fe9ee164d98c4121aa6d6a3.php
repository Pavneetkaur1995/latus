<?php $__env->startSection('title', 'Jokes'); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-content">
        <div class="page-heading">
            <h1>Jokes</h1>
        </div>
        <div class="page-sub-section">
            <!-- Table prints three random jokes -->
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Joke</th>
                    <th scope="col">Punchline</th>
                    </tr>
                </thead>
                <tbody id="jokes-table-body">
                    <div class="loader"></div>
                    <?php $__currentLoopData = $random_jokes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($value['setup']); ?></td>
                            <td><?php echo e($value['punchline']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <!-- Table ends -->
            <div class="page-btn-section">
                <button type="button" class="btn btn-primary refresh-btn">Refresh Jokes</button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    // On click refresh button it will refresh the jokes
$(".refresh-btn").on('click', function(){
    $("#jokes-table-body").html('');
    $(".loader").css('display','block');
    $(".refresh-btn").hide();
    var index = 1;
    $.ajax({
        url: "<?php echo e(url('/refresh-jokes')); ?>",
        type: "GET",
        data: {
            _token: '<?php echo e(csrf_token()); ?>'
        },
        dataType: 'json',                 
        success: function (result) {    
            $.each(result, function (key, value) {                          
                $("#jokes-table-body").append('<tr><td>' + index + '</td> <td>' + value.setup + '</td> <td>' + value.punchline + '</td></tr>');
                index = index + 1;
            });                         
            $(".loader").css('display','none');
            $(".refresh-btn").show();
        }
    });
});
</script>
<?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latus\resources\views/api/index.blade.php ENDPATH**/ ?>