<div class="row mt-5">
    <div class="col-2"></div>
    <div class="col-8 block-back">
        <p class="h3">Hi , Welcome to the Employee Well</p>
    </div>
    <div class="col-2"></div>
</div>

<div class="row mt-3">
    <div class="col-2"></div>
    <div class="col-8 block-back p-3">
        <h5 class="mb-4">Please generate password</h5>
        <form action="" method="post" id='createpwd' onsubmit = "return false">
        <input type="text" name="email" id="email" value="<?php echo $email; ?>" hidden>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="cnfpassword" id="cnfpassword" placeholder="Re-enter password" required>
            </div>
            <input class="btn btn-primary" type="submit" name="createPassword" id="createPassword" value="Confirm" disabled>
        </form>
    </div>
    <div class="col-2"></div>
</div>

    <div class="pwdstatus"></div>

<script>
    $(document).ready(function() {
        var passwordInput = $('#password');
        var cnfPasswordInput = $('#cnfpassword');
        var submitButton = $('#createPassword');

        $('#password, #cnfpassword').on('input', function() {
            var password = passwordInput.val();
            var cnfpassword = cnfPasswordInput.val();

            if (password !== cnfpassword) {
                showError("Passwords do not match");
                submitButton.prop('disabled', true);
            } else {
                hideError("Passwords matched");
                submitButton.prop('disabled', false);
            }
        });

        function showError(message) {
            $('#error-message').remove();
            $('<div id="error-message" class="alert alert-danger mt-3" role="alert">' + message + '</div>').insertAfter('#cnfpassword');
        }

        function hideError(message) {
            $('#error-message').remove();
            $('<div id="error-message" class="alert alert-success mt-3" role="alert">' + message + '</div>').insertAfter('#cnfpassword');
        }
    });

    $(document).ready(function() {
        $("#createpwd").on("submit", function(evt) {

            var passwordInput = dataEncrypt($('#password').val());
            var emailInput = dataEncrypt($('#email').val());
            var submitButton = $('#createPassword');

            evt.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: "api/generatePassword.php",
                type: "POST",
                data:{
                    password : passwordInput,
                    email : emailInput
                },
                success: function(data) {
                    console.log(data);
                    $('<div id="status-message" class="alert alert-success mt-3" role="alert">' + data + '</div>').insertAfter('#cnfpassword');
                    $('#error-message').remove();
                    submitButton.prop('disabled', true);
                    $('#password').prop('disabled', true);
                    $('#cnfpassword').prop('disabled', true);
                },
                error: function() {
                    // Handle error

                }
            });
        });
    });
</script>