<?php 
    $title = 'view';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
  
    
    //Gert attendee by id
    if(!isset($_GET['id'])){
        include "includes/errormessage.php";
    
    } else {
        $id = $_GET['id'];
        $result = $crud->getAttendeesDetails($id);

?>

<div class="card" style="width: 18rem;">
    <img src="game-steam-wallpaper-engine-wallpaper-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $result['firstname'] ." ". $result['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $result['name']; ?></h6>
        <p class="card-text">Date of birth: <?php echo $result['dob']; ?></p>
        <p class="card-text">E-mail: <?php echo $result['email']; ?></p>
        <p class="card-text">Phone number: <?php echo $result['phone']; ?></p>
        
    </div>
</div> 
    <a href="viewrecords.php" class="btn btn-info">Back to list</a></td>
    <a href="edit.php?id=<?php echo $result['attendance_id'] ?>" class="btn btn-warning">Edit</a>
    <a onclick="return confirm('Are you sure you want to delete?')" 
    href="delete.php?id=<?php echo $result['attendance_id']; ?>" class="btn btn-danger">Delete</a></td>
<?php } ?>



<br>
<br>


<?php 
    require_once 'includes/footer.php'; 
?>