<?php
session_start();
if(isset( $_SESSION['error'])
){
$errors = $_SESSION['error'];

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-fit</title>
    <link rel="stylesheet" href="./index.css">
  </head>
  <body>
    <main>
      <section class="container">
       <div class="left">
        <div class="top">
            <img src="./bck_image.jpg" alt="A lady gyming">
        <p class="bottom">
            Track all your fitness activities
        </p>
        </div>
       </div>
       <div class="signup__wrapper right">
        <div class="signup__header">
            <h2>E-fit</h2>
        </div>
         <form action="register.php" method="post" class="signup__form">
            <div class="signup__title">
                <p class="title">Welcome to e-fit</p>
                <p class="subtitle">Please sign up to begin your journey to finer health</p>
            </div>
            <section>
                <div>
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" placeholder="Enter first name">
                <p class="error">
               <?php if (isset($_SESSION['error']) && isset($errors['fnameErr']) ) {echo $errors['fnameErr'];}?>
                </p>
                </div>
              <div>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" placeholder="Enter last name">
                 <p class="error">
               <?php if (isset($_SESSION['error']) && isset($errors['lnameErr'])) {echo $errors['lnameErr'];}?>
                </p>
                 </div>

         </section>
         <section>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Your email address">
                 <p class="error">
               <?php if (isset($_SESSION['error']) && isset($errors['emailErr'])) {echo $errors['emailErr'];}?>
                </p>
            </div>
             <div>
                <label for="dob">Date of birth</label>
                <input type="date" name="dob" id="dob" placeholder="Enter date of birth">
                  <p class="error">
               <?php if (isset($_SESSION['error']) && isset($errors['dobErr'])) {echo $errors['dobErr'];}?>
                </p>
            </div>
         </section>
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Enter your residential address">
                  <p class="error">
               <?php if (isset($_SESSION['error']) && isset($errors['addressErr'])) {echo $errors['addressErr'];}?>
                </p>

            </div>
             <div>
                <label for="phonenum">Phone number</label>
                <input type="text" name="phonenum" id="phonenum" placeholder="Enter your phone number">
                  <p class="error">
               <?php if (isset($_SESSION['error'])&& isset($errors['phoneErr'])) {echo $errors['phoneErr'];}?>
                </p>

            </div>
            <div>
                <label for="batch">Batch</label>
                <select name="batch" id="batch">
                    <option value="">Please select batch</option>
                    <option value="morning">Morning</option>
                    <option value="afternoon">Afternoon</option>
                    <option value="night">Night</option>
                </select>
                  <p class="error">
               <?php if (isset($_SESSION['error'])&& isset($errors['batchErr'])) {echo $errors['batchErr'];}?>
                </p>
            </div>
            <div>
                <p>Gender</p>
               <section>
                    <input type="radio"  name="gender" value="male" checked>
                    <label for="gender_male">Male</label>

                    <input type="radio"  name="gender" value="female">
                    <label for="gender_female">Female</label>

                    <input type="radio"  name="gender" value="not_say">
                    <label for="not_say">Rather Not Say</label>

            </section>
              <p class="error">
               <?php if (isset($_SESSION['error'])&& isset($errors['genderErr'])) {echo $errors['genderErr'];}?>
                </p>
            </div>

            <div>
                <button>Sign up</button>
            </div>
        </form>
        
       </div>
      </section>
    </main>
  </body>
</html>
<?php unset($_SESSION['error']) ?>

