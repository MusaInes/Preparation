<?php
require 'connection/connection.php';
$query="select distinct year from subjects join grades on grades.subject_id=subjects.id where grades.user_id=".$_SESSION['user']['ID'];
$result=mysqli_query($connection,$query);
?>
Godina:
<select onchange="ucitajNovuTabelu(this)">
    <option value="0"></option>
    <?php
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
    <option value="<?= $row['year'] ?>">
        <?php echo $row['year'] ?>
    </option>
    <?php
    }
    ?>
</select>
