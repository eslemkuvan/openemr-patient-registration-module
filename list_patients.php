<?php
include "db.php";

$result = $conn->query("SELECT * FROM patients");
?>

<h2>Patient List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>National ID</th>
    <th>Phone</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['first_name'] ?></td>
    <td><?= $row['last_name'] ?></td>
    <td><?= $row['national_id'] ?></td>
    <td><?= $row['phone'] ?></td>
</tr>
<?php } ?>

</table>
