<?php 
    $title = 'view_records';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $results = $crud->getAttendees();
?>


<table class='table'>
    <tr>
        <th>#</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Date of birth</th>
        <th>E-mail</th>
        <th>Phone number</th>
        <th>Speciality</th>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td> <?php echo $r['attendance_id'];  ?> </td>
            <td><?php echo $r['firstname']; ?> </td>
            <td> <?php echo $r['lastname'];  ?></td>
            <td><?php echo $r['dob'];  ?> </td>
            <td><?php echo $r['email'];  ?> </td>
            <td><?php echo $r['phone'];  ?> </td>
        
            <td><?php echo $r['name'];  ?> </td>
           
        </tr>
    <?php } ?>
</table>




<br>
<br>


<?php 
    require_once 'includes/footer.php'; 
?>