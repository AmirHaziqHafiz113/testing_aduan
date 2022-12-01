
<?php
$id = $_GET["did"];
$connection = new mysqli("localhost", "root", "", "aduan");
$query = "SELECT A.*, B.Description As 'desc' FROM aduan_tb A JOIN status B ON B.Status_ID = A.Status_ID  WHERE Aduan_ID = $id ORDER BY Aduan_ID DESC";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$q_pembetulan = "SELECT * FROM pembetulan WHERE Aduan_ID = $id";
$result_pembetulan = mysqli_query($connection, $q_pembetulan);
$row_pembetulan = mysqli_fetch_array($result_pembetulan);

$q_pencegahan = "SELECT * FROM pencegahan WHERE Aduan_ID = $id";
$result_pencegahan = mysqli_query($connection, $q_pencegahan);
$row_pencegahan = mysqli_fetch_array($result_pencegahan);
?>
       
       
       <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Maklumat aduan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <?php
                        // while ($row = mysqli_fetch_assoc($result)) {
                            echo "<form>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Nama_Pengadu:</label>";
                            echo "<input type='text' class='form-control' id='recipient-name' value='" . $row['Nama_Pengadu'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Email:</label>";
                            echo "<input type='text' class='form-control' id='recipient-email' value='" . $row['Email'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>No. Telefon Pengadu:</label>";
                            echo "<input type='text' class='form-control' id='recipient-phone' value='" . $row['No_Tel'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Info Aduan:</label>";
                            echo "<input type='text' class='form-control' id='recipient-aduan' value='" . $row['Aduan_Info'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Status:</label>";
                            echo "<input type='text' class='form-control' id='recipient-status' value='" . $row['desc'] . "' readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Pembetulan:</label>";
                            if ($row_pembetulan['Description']) {
                                echo "<input type='text' class='form-control' id='recipient-pembetulan' value='" . $row_pembetulan['Description'] . "' readonly>";
                            } else {
                                echo "<input type='text' class='form-control' id='recipient-pembetulan' value='' readonly>";
                            }
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Pencegahan:</label>";
                            if ($row_pencegahan['Description']) {
                                echo "<input type='text' class='form-control' id='recipient-pencegahan' value='" . $row_pencegahan['Description'] . "' readonly>";
                            } else {
                                echo "<input type='text' class='form-control' id='recipient-pencegahan' value='' readonly>";
                            }
                            echo "</div>";
                            echo "</form>";
                        // }
                       ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        