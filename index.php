
<?php 
    $title = 'index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

?>
    
    <h1 class='text-center'>Registration for IT conferance.</h1>
   
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
        <div class="mb-3">
            <label for="speciality" class="form-label">Area of Expertise</label>
            <select class="form-select" id="speciality" name="speciality">
                <option selected>Nie wybrano</option>
                <option value="1">Database Admin</option>
                <option value="2">Software Developer</option>
                <option value="3">Web Administrator</option>
                <option value="4">Network Engineer</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="number" class="form-control" id="phone" name="phone">
            <div id="phoneHelp" class="form-text">We'll never share your phone number with anyone else.</div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
    
<?php 
    require_once 'includes/footer.php'; 
?>