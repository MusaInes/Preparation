<?php
if (isset($_REQUEST['year']))
    session_start();
    require 'connection/connection.php';
{
    $query = "select * from grades join subjects on subjects.id=grades.subject_id where grades.user_id=" . $_SESSION['user']['ID'];
    if ($_REQUEST['year'] != 0) {
        $query .= " and subjects.year=" . $_REQUEST['year'];
    }
    $result = mysqli_query($connection, $query);
    ?>
    <table class="ocjene">
        <tr>
            <th>Predmet</th>
            <th>Godina</th>
            <th>Ocjena</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['year'] ?></td>
                <td><?= $row['grade'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
?>