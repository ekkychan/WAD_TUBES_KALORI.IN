<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <meta charset="utf-8">
        <title>Login</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/opensans-font.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('fonts/line-awesome/css/line-awesome.min.css')); ?>">
        <!-- Jquery -->
        <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
    </head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left" align="center">
                <h2>Welcome!</h2>
                <img src="css/Kalori.in webf.png">
                <p class="text-1">Perfectly light in every bite.</p>
                <p class="text-2"><span>Your dreams: </span>A diet catering company that aims to provide the simple
                    solutions to get fat loss. Many people out there have a wrong mindset about diet and we about to
                    cha.</p>
                <br>
                <div class="d-grid gap-2" ;">
                    <a class="btn btn-danger" href="<?php echo e(route('register')); ?>" role="button"
                        style="background-color: #d65106;">Create
                        an Account</a>
                </div>
            </div>
            <div class="form-detail">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required
                                autocomplete="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-check-label" for="remember">
                            <?php echo e(__('Remember Me')); ?>

                        </label>
                        <div class="col-md-1 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-3">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Login')); ?>

                            </button>

                            <?php if(Route::has('password.request')): ?>
                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                <?php echo e(__('Forgot Your Password?')); ?>

                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
        debug: true,
        success: function(label) {
            label.attr('id', 'valid');
        },
    });
    $("#myform").validate({
        rules: {
            password: "required",
            comfirm_password: {
                equalTo: "#password"
            }
        },
        messages: {
            first_name: {
                required: "Please enter a firstname"
            },
            last_name: {
                required: "Please enter a lastname"
            },
            your_email: {
                required: "Please provide an email"
            },
            password: {
                required: "Please enter a password"
            },
            comfirm_password: {
                required: "Please enter a password",
                equalTo: "Wrong Password"
            }
        }
    });
    </script>
</body>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\WAD_TUBES_KALORI.IN\kalori.in\resources\views/auth/login.blade.php ENDPATH**/ ?>