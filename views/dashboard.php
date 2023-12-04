<div class=" ms-5 me-5 row block-back mt-5">
    <p class="h4">Hi <?php echo getuserData($conn, $userid, 'firstname') . " " . getuserData($conn, $userid, 'lastname') ?></p>
</div>

<div class="row ms-5 me-5 block-back mt-3">
    <p class="h5">List of Employees</p>
    <div>
        <a class="btn btn-primary w-25 float-end mt-2" href="addEmployee.php" title="Add new employee">Add new employee</a>
    </div>
    <div class="mt-2 text-center" id="updateStatus"></div>
    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>Employee Id</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($rowGU > 0) {
                for ($i = 0; $i < $rowGU; $i++) {
                    echo "<tr>
                            <td>" . $resGU[$i]['id'] . "</td>
                            <td>" . $resGU[$i]['firstname'] . " " . $resGU[$i]['lastname'] . "</td>
                            <td>" . $resGU[$i]['email'] . "</td>
                            <td>
                            <a class='me-2' href='editEmployee.php?id=" . $resGU[$i]['id'] . "' title='Edit Employee profile'><img width='30' height='30' src='https://img.icons8.com/ios-glyphs/30/edit--v1.png' alt='edit--v1' /></a>
                            <a class='me-2' href='#' data-bs-toggle='modal' data-bs-target='#Modal" . $resGU[$i]['id'] . "' title='Delete Employee profile'><img width='30' height='30' src='https://img.icons8.com/ios-glyphs/30/filled-trash.png' alt='filled-trash' /></a>

                            <div class='modal fade' id='Modal" . $resGU[$i]['id'] . "' tabindex='-1' aria-labelledby='ModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='ModalLabel'>Delete " . $resGU[$i]['firstname'] . " " . $resGU[$i]['lastname'] . "'s account</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <form action='' id='deleteUser" . $resGU[$i]['id'] . "' onsubmit='return false' method='post'>
                                    <div class='modal-body'>
                                        <input type='text' name='userid' value='" . $resGU[$i]['id'] . "' hidden>
                                        </div>
                                        <p class='ms-3'>Are you want to delete " . $resGU[$i]['firstname'] . " " . $resGU[$i]['lastname'] . "'s account</p>
                                        <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                                        <input type='submit' class='btn btn-danger' value='Delete'>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </td>
                        </tr>";
            ?>
                    <script>
                        $(document).ready(function() {
                            $("#deleteUser<?php echo $resGU[$i]['id']; ?>").on("submit", function(evt) {
                                evt.preventDefault();
                                var formData = $(this).serialize();
                                $.ajax({
                                    url: "api/deleteProfile.php",
                                    type: "POST",
                                    data: formData,
                                    success: function(data) {
                                        console.log('user deleted');
                                        if (data == 1) {
                                            $("#updateStatus").html("<div class='alert alert-success' role='alert'>Account deleted Successfuly</div>");
                                            location.reload(true);
                                        }
                                        if (data == 0) {
                                            $("#updateStatus").html("<div class='alert alert-danger' role='alert'>Something went wrong , Please try again</div>");
                                            location.reload(true);
                                        }
                                    },
                                    error: function() {
                                        // Handle error                 
                                    }
                                });
                            });
                        });
                    </script>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>