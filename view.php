<?php 
    $title = 'view';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
  
    
    //Gert attendee by id
    if(isset($_GET['id'])){
        echo "<h1 class='text-danger'> Please check details and check again </h1>";
        
        
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
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> 

<?php } ?>



<br>
<br>


<?php 
    require_once 'includes/footer.php'; 
?>