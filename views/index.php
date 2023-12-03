<div class="row align-items-center justify-content-center " style="margin-top: 20vh;">
    <div class="col-4"></div>
    <div class="col-4 block-back">
        <p class="h3 text-center">Login</p>
        <form id="loginForm" onsubmit="return false">
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Username/Email</label>
                <input type="text" class="form-control" name="usernameinp" id="usernameinp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="passwordinp" id="passwordinp" required>
            </div>
            <div class="mb-3">
                <a class="text-decoration-none" href="#">Forgot Password</a>
            </div>
            <div class="mb-3">
                <div class="text-center" id="loginStatus"></div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Login</button>
        </form>
    </div>
    <div class="col-4"></div>
</div>


<script>
    $(document).ready(function() {
        // Attach click event to the login button
        $('#loginForm').submit(function() {
            var user = $('#usernameinp').val();
            // Use the loginCheck API to validate login credentials
            $.ajax({
                type: 'POST',
                url: 'api/loginCheck.php',
                data: {
                    username: dataEncrypt($('#usernameinp').val()),
                    password: dataEncrypt($('#passwordinp').val())
                },
                success: function(Data) {

                    if (Data >= 0) {
                        $('#loginStatus').html('<div class="alert alert-success" role="alert">Login Successfull , Welcome</div>');
                        var loggedInUser = Data;

                        // sending data for session creation
                        $.ajax({
                            url: 'loggedInUserSession.php',
                            type: 'POST',
                            data: {
                                loggedInUser: loggedInUser
                            },
                            success: function(response) {
                                console.log(response);
                            }
                        });
                        // sending data for session creation
                        
                        // redirection to dashboard
                        window.location = 'dashboard.php';
                        // redirection to dashboard
                    } else if (Data == -1) {
                        $('#loginStatus').html('<div class="alert alert-info" role="alert">Login Failed , Please check credentials</div>');

                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                    // Handle errors here
                }
            });
        });
    });
</script>