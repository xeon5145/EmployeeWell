<div class=" ms-5 me-5 row block-back mt-5">
    <p class="h4">Hi <?php echo getuserData($conn, $userid, 'firstname') . " " . getuserData($conn, $userid, 'lastname') ?></p>
</div>

<div class="row ms-5 me-5 block-back mt-3">
    <p class="h5">List of Employees</p>
    <div>
        <a class="btn btn-primary w-25 float-end mt-2" href="#" title="Add new employee">Add new employee</a>
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
                            <td>" . $resGU[$i]['firstname'] ." ".$resGU[$i]['lastname']. "</td>
                            <td>" . $resGU[$i]['email'] . "</td>
                            <td>
                            <a class='me-2' href='#' title='Edit Employee profile'><img width='30' height='30' src='https://img.icons8.com/ios-glyphs/30/edit--v1.png' alt='edit--v1' /></a>
                            <a class='me-2' href='#' title='Delete Employee profile'><img width='30' height='30' src='https://img.icons8.com/ios-glyphs/30/filled-trash.png' alt='filled-trash' /></a>
                            </td>
                        </tr>";

                }
            }
            ?>
        </tbody>
    </table>
</div>