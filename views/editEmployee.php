<?php
if ($rowGUD > 0) {
?>

    <div class="row ms-5 me-5 mt-5">
        <div class="col-12 block-back p-4">
            <span class="h3">Edit Employee Profile</span>
            <form id="editUser" onsubmit="return false">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mt-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $resGUD[0]['username']; ?>" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $resGUD[0]['email']; ?>" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="employeeId">Employee ID</label>
                            <input type="text" class="form-control" id="employeeId" placeholder="Employee ID" name="employeeId" value="<?php echo $resGUD[0]['id']; ?>" required>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group mt-3">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First name" name="firstName" value="<?php echo $resGUD[0]['firstname']; ?>" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastName" value="<?php echo $resGUD[0]['lastname']; ?>" required>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 text-center mt-3" id="updateStatus"></div>

                <div class="col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-primary">Confirm Update</button>
                </div>
            </form>
        </div>
    </div>

<?php
}
?>

<script>
    $(document).ready(function() {
        $("#editUser").on("submit", function(evt) {
            evt.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: "api/addUpdProfile.php",
                type: "POST",
                data: formData,
                success: function(data) {

                    if (data = 1) {
                        $("#updateStatus").html("<div class='alert alert-success' role='alert'>Account has been created and email for password generation has been sent</div>");
                    }
                    if (data = 0) {
                        $("#updateStatus").html("<div class='alert alert-danger' role='alert'>Something went wrong , Please try again</div>");
                    }
                },
                error: function() {
                    // Handle error

                }
            });
        });
    });
</script>