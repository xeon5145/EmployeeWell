<div class="row ms-5 me-5 mt-5">
    <div class="col-12 block-back p-4">
        <span class="h3">Add New Employee</span>
        <form id="addEmployee" onsubmit="return false">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="employeeId">Employee ID</label>
                        <input type="text" class="form-control" id="employeeId" placeholder="Employee ID" required>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group mt-3">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First name" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
                    </div>



                    <div class="form-group mt-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-primary">Confirm Update</button>
            </div>
        </form>
    </div>
</div>