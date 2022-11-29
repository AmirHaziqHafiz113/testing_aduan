<?php
$id = $_GET["did"];
$connection = new mysqli("localhost", "root", "", "aduan");
$query = "SELECT A.*, B.Description As 'desc' FROM aduan_tb A JOIN status B ON B.Status_ID = A.Status_ID  WHERE Aduan_ID = $id ORDER BY Aduan_ID DESC";
$result = mysqli_query($connection, $query);

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
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<form>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Nama_Pengadu:</label>";
                            echo "<input type='text' class='form-control' id='recipient-name' value='" . $row['Nama_Pengadu'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Email:</label>";
                            echo "<input type='text' class='form-control' id='recipient-name' value='" . $row['Email'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>No. Telefon Pengadu:</label>";
                            echo "<input type='text' class='form-control' id='recipient-name' value='" . $row['No_Tel'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Info Aduan:</label>";
                            echo "<input type='text' class='form-control' id='recipient-name' value='" . $row['Aduan_Info'] . "'readonly>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='recipient-name' class='col-form-label'>Status:</label>";
                            echo "<input type='text' class='form-control' id='recipient-name' value='" . $row['desc'] . "' readonly>";
                            echo "</div>";
                            echo "</form>";
                        }
                       ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        