<div class="row ms-5 me-5 mt-5">
    <div class="col-12 block-back p-4">
        <span class="h3">Add New Employee</span>
        <form id="addEmployee" onsubmit="return false">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="employeeId">Employee ID</label>
                        <input type="text" class="form-control" id="employeeId" name="employeeId" placeholder="Employee ID" required>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group mt-3">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" required>
                    </div>

                </div>
            </div>

            <div class="col-md-12 text-center mt-3">
                <div class="mt-3" id="updateStatus"></div>
            </div>

            <div class="col-md-12 text-center mt-3">
                <span class="textInfo">An email will be sent to user to generate their password</span>
            </div>

            <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Add Employee</button>
            </div>
        </form>
    </div>
</div>



<script>
    $(document).ready(function() {
        $("#addEmployee").on("submit", function(evt) {
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
                    if (data = 0)
                    {
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