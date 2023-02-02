<div class="form-group ">
    <label id="captcha_label"
           for="captcha">Captcha: <?php echo e(config("binshopsblog.captcha.basic_question", "[error - undefined captcha question]" )); ?> </label>
    <input type='text' required class="form-control" name='captcha' id="captcha" placeholder=""
           value="<?php echo e(old("captcha")); ?>">
</div><?php /**PATH /home/c/cq12260/test/public_html/resources/views/vendor/binshopsblog/captcha/basic.blade.php ENDPATH**/ ?>