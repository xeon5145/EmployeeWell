<div class="row ms-5 me-5 mt-5">
    <div class="col-1"></div>
    <div class="col-10 block-back">
        <span class="h3">Add New Employee</span>
        <form id="addEmployee" onsubmit="return false">
            <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6 mt-3">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label for="employeeId">Employee ID</label>
                    <input type="text" class="form-control" id="employeeId" placeholder="Employee ID" required>
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>

    </div>
    <div class="col-1"></div>
</div>