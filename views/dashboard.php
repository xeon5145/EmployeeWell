<div class=" ms-5 me-5 row block-back mt-5">
    <p class="h4">Hi <?php echo getuserData($conn, $userid, 'firstname') . " " . getuserData($conn, $userid, 'lastname') ?></p>
</div>

<div class="row ms-5 me-5 block-back mt-3">
    <p class="h5">List of Employees</p>
    <div>
        <a class="btn btn-primary w-25 float-end mt-2" href="addEmployee.php" title="Add new employee">Add new employee</a>
    </div>
    <table class="table table-hover mt-5">
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
                            <td>" . $resGU[$i]['empid'] . "</td>
                            <td>" . $resGU[$i]['firstname'] . " " . $resGU[$i]['lastname'] . "</td>
                            <td>" . $resGU[$i]['email'] . "</td>
                            <td>
                            <a class='me-2' href='editEmployee.php' title='Edit Employee profile'><img width='30' height='30' src='https://img.icons8.com/ios-glyphs/30/edit--v1.png' alt='edit--v1' /></a>
                            <a class='me-2' href='#' data-bs-toggle='modal' data-bs-target='#exampleModal' title='Delete Employee profile'><img width='30' height='30' src='https://img.icons8.com/ios-glyphs/30/filled-trash.png' alt='filled-trash' /></a>

                            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Delete " . $resGU[$i]['firstname'] . " " . $resGU[$i]['lastname'] . "'s account</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <p>This is the content of the modal. You can add your form or other content here.</p>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cancel</button>
                                        <button type='button' class='btn btn-danger'>Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                            </td>
                        </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>