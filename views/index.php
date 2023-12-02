<div class="row align-items-center justify-content-center mt-5">
    <div class="col-4"></div>
    <div class="col-4">
        <p class="h3 text-center">Login</p>
        <form id="loginForm" onsubmit="return false">
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Username/Email</label>
                <input type="text" class="form-control" name="usernameinp" id="usernameinp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="passwordinp" id="passwordinp">
            </div>
            <div class="mb-3">
                <a class="text-decoration-none" href="#">Forgot Password</a>
            </div>
            <button type="submit" class="btn btn-primary float-end" >Login</button>
        </form>
    </div>
    <div class="col-4"></div>
</div>

<div id="loginStatus"></div>
<script>

$(document).ready(function() {
    // Attach click event to the login button
    $('#loginForm').submit(function() {

        // Use the loginCheck API to validate login credentials
        $.ajax({
            type: 'POST',
            url: 'api/loginCheck.php',
            data: {
                username : dataEncrypt($('#usernameinp').val()),
                password: dataEncrypt($('#passwordinp').val())
            },
            success: function(data) {
                console.log('Success:', data);
                // Handle the success response here
            },
            error: function(error) {
                console.error('Error:', error);
                // Handle errors here
            }
        });
    });
});
</script>
