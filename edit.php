             
<?php 
    $title = 'edit_record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    $results = $crud->getSpecialities();

    if(!isset($_GET['id'])){
        //echo "<h1 class='text-danger'> Error </h1>";
        include "includes/errormessage.php";
        header("Location: viewrecords.php");
    
    } else {
        $id = $_GET['id'];
        //$result = $crud->getAttendeesDetails($id);
        $attendee =$crud->getAttendeesDetails($id);


?>
    
    <h1 class='text-center'>Edit Record</h1>
    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendance_id'] ?>" />
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dob'] ?>" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Area of Expertise</label>
            <select class="form-select" value="<?php echo $attendee['speciality'] ?>" id="speciality" name="speciality">
                <!-- <option selected>Nie wybrano</option>
                <option value="1">Database Admin</option>
                <option value="2">Software Developer</option>
                <option value="3">Web Administrator</option>
                <option value="4">Network Engineer</option> -->
               <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['speciality_id']; ?>"  <?php if($r['speciality_id'] 
                    == $attendee['speciality_id']) echo 'selected' ?>  > 
                    <?php echo $r['name'];  ?>
                </option>


                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" value="<?php echo $attendee['email'] ?>" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="number" class="form-control" value="<?php echo $attendee['phone'] ?>" id="phone" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="submit" class="btn btn-default btn">Back To List</button>
        <button type="submit" name="submit" class="btn btn-success btn">Save Changes</button>
    </form>

<?php } ?>

<br>
    
<?php 
    require_once 'includes/footer.php';
    
    

?>









