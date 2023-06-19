<?php
require_once "./inc/config.php";

$first_name = $middle_name = $last_name = $email = $mobile = $sex = $age = $address = $suburb = $code = $city = $province = $country = $education = $skills = $answer1 = $agree = "";
$first_name_err = $middle_name_err = $last_name_err = $email_err = $mobile_err = $sex_err = $age_err = $address_err = $suburb_err = $code_err = $city_err = $province_err = $country_err = $education_err = $skills_err = $answer1_err = $agree_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate first name
    if (empty(trim($_POST["first_name"]))) {
        $first_name_err = "Please enter your first name.";
    } else {
        $first_name = trim($_POST["first_name"]);
    }

    // Validate middle name
      if (empty(trim($_POST["middle_name"]))) { 
          $last_name_err = "Please enter your middle name.";
     } else {
         $middle_name = trim($_POST["middle_name"]);
     }

    // Validate last name
    if (empty(trim($_POST["last_name"]))) {
        $last_name_err = "Please enter your last name.";
    } else {
        $last_name = trim($_POST["last_name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $sql = "SELECT id FROM members WHERE email = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = trim($_POST["email"]);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already taken.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
    }

// Validate mobile number
      if (empty(trim($_POST["mobile"]))) { 
          $mobile_err = "Please enter your mobile number.";
      } else {
          $mobile = trim($_POST["mobile"]);
    }

// Validate gender
       if (empty(trim($_POST["sex"]))) {     
            $sex_err = "Please enter your gender.";
        } else {
            $sex = trim($_POST["sex"]);
     }

// Validate address
        if (empty(trim($_POST["address"]))) {     
            $address_err = "Please enter your address.";
        } else {
            $address = trim($_POST["address"]);
        }
// Validate suburb
	if (empty(trim($_POST["suburb"]))) {
	    $suburb_err = "Please enter your suburb.";
	} else {
	    $suburb = trim($_POST["suburb"]);
 	}

// Validate postal code
        if (empty(trim($_POST["code"]))) {     
            $code_err = "Please enter your postal code.";
        } else {
            $code = trim($_POST["code"]);
        }

// Validate city
        if (empty(trim($_POST["city"]))) {     
            $city_err = "Please enter your City.";
        } else {
            $city = trim($_POST["city"]);
      }
// Validate province
	if (empty(trim($_POST["province"]))) {     
            $province_err = "Please enter your Province.";
        } else {
            $province = trim($_POST["province"]);
      }
// Validate country
        if (empty(trim($_POST["country"]))) {     
            $country_err = "Please enter your country.";
        } else {
            $country = trim($_POST["country"]);
      }

// Validate education
        if (empty(trim($_POST["education"]))) {     
            $education_err = "Please enter your highest level of education.";
        } else {
            $education = trim($_POST["education"]);
      }

// Validate skills
        if (empty(trim($_POST["skills"]))) {     
            $skills_err = "Please enter your skills.";
        } else {
            $skills = trim($_POST["skills"]);
      }

// Validate radio button group answer one
        if (empty(trim($_POST["answer1"]))) {     
            $answer1_err = "Please select one answer";
        } else {
            $answer1 = trim($_POST["answer1"]);
        }

 // Validate radio button group agree one
         if (empty(trim($_POST["agree"]))) { 
             $agree_err = "Please agree to the terms & conditions";
         } else {
             $agree = trim($_POST["agree"]);
         }

// Check input errors before inserting in the database
    if (empty($first_name_err) && empty($middle_name_err) && empty($last_name_err) && empty($email_err) && empty($mobile_err) && empty($sex_err) && empty($age_err) && empty($address_err) && empty($suburb_err) && empty($code_err) && empty($city_err) && empty($province_err) && empty($country_err) && empty($education_err) && empty($skills_err) && empty($answer1_err) && empty($agree_err)) {

        $sql = "INSERT INTO members (first_name, middle_name, last_name, email, mobile, sex, age, address, suburb, code, city, province, country, education, skills, answer1, agree) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $param_first_name, $param_middle_name, $param_last_name, $param_email, $param_mobile, $param_sex, $param_age, $param_address, $param_suburb, $param_code, $param_city, $param_province, $param_country, $param_education, $param_skills, $param_answer1, $param_agree);

            $param_first_name = $first_name;
            $param_middle_name = $middle_name; 
            $param_last_name = $last_name;
            $param_email = $email;
 	    $param_mobile = $mobile;
	    $param_sex = $sex;
            $param_age = $age;
	    $param_address = $address;
  	    $param_suburb = $suburb;
	    $param_code = $code;
	    $param_city = $city;
	    $param_province = $province;
	    $param_country = $country;
            $param_education = $education;
	    $param_skills = $skills;
            $param_answer1 = $answer1;
            $param_agree = $agree;

            if (mysqli_stmt_execute($stmt)) {
                header("location: finish.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            mysqli_stmt_close($stmt);
        }
     }   
   mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script  src="./js/script.js"></script>
 
   <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<img src="logo.png" alt="logo" class="responsive-img">
<span class="quote">"Do It With Others"</span>
    <div class="wrapper">
        <h2>Muizenberg Electricity Cooperative Sign-up</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                <span class="help-block"><?php echo $first_name_err; ?></span>
            </div>
            
  	    <div class="form-group <?php echo (!empty($middle_name_err)) ? 'has-error' : ''; ?>">
                 <label>Middle Name</label>
                 <input type="text" name="middle_name" class="form-control" value="<?php echo $middle_name; ?>">
                 <span class="help-block"><?php echo $middle_name_err; ?></span>
             </div>
	    
             <div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                <span class="help-block"><?php echo $last_name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
	     <div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?>">
                 <label>Mobile Number</label>
                 <input type="tel" name="mobile" class="form-control" value="<?php echo $mobile; ?>">
                 <span class="help-block"><?php echo $mobile_err; ?></span>
	     </div>

	     <div class="form-group <?php echo (!empty($sex_err)) ? 'has-error' : ''; ?>">
                  <label>Gender</label>
                  <input type="text" name="sex" class="form-control" value="<?php echo $sex; ?>">
                  <span class="help-block"><?php echo $sex_err; ?></span>
              </div>

            <div class="form-group <?php echo (!empty($age_err)) ? 'has-error' : ''; ?>">
                   <label>Age</label>
                   <input type="text" name="age" min="1" max="120" required class="form-control" value="<?php echo $age; ?>">
                   <span class="help-block"><?php echo $age_err; ?></span>
	   </div>
	    <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                   <label>Address</label>
                   <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                   <span class="help-block"><?php echo $address_err; ?></span>
            </div>
	    <div class="form-group <?php echo (!empty($suburb_err)) ? 'has-error' : ''; ?>">
                   <label>Suburb</label>
                   <input type="text" name="suburb" class="form-control" value="<?php echo $suburb; ?>">
                   <span class="help-block"><?php echo $suburb_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($code_err)) ? 'has-error' : ''; ?>">
                   <label>Postal Code</label>
                   <input type="text" name="code" pattern="[0-9]{4}" class="form-control" value="<?php echo $code; ?>">
                   <span class="help-block"><?php echo $code_err; ?></span>
           </div>
           <div class="form-group">
                   <label for="city">City</label>
                   <select id="city" class="form-control"></select>
           </div>
	    <div class="form-group">
                   <label for="state">Province</label>
                   <select id="state" class="form-control"></select>
            </div>
            <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" class="form-control"></select>  
           </div>
           <div class="form-group <?php echo (!empty($education_err)) ? 'has-error' : ''; ?>">
                     <label>Education (Highest level achieved)</label>
                     <input type="text" name="education" class="form-control" value="<?php echo $education; ?>">
                     <span class="help-block"><?php echo $education_err; ?></span>
           </div>
           <div class="form-group <?php echo (!empty($skills_err)) ? 'has-error' : ''; ?>">
                     <label>Skills</label>
                     <input type="text" name="skills" class="form-control" value="<?php echo $skills; ?>">
                     <span class="help-block"><?php echo $skills_err; ?></span>
           </div>
	  <div class="form-group <?php echo (!empty($answer1_err)) ? 'has-error' : ''; ?>">
    	             <label>Membership Type:</label><br>

                    <label>Member</label><input type="radio" name="answer1" class="form-control" value="option1" <?php if ($answer1 === 'option1') echo 'checked'; ?>><br>

                     <label>Supporter</label><input type="radio" name="answer1" class="form-control" value="option2" <?php if ($answer1 === 'option2') echo 'checked'; ?>><br>

                     <label>Affiliate</label><input type="radio" name="answer1" class="form-control" value="option3" <?php if ($answer1 === 'option3') echo 'checked'; ?>><br>

    	            <span class="help-block"><?php echo $answer1_err; ?></span>
	   </div>
	   <div class="form-group <?php echo (!empty($agree_err)) ? 'has-error' : ''; ?>">
                     <label>Have you read our <a href="./inc/constitution.pdf">Constitution?</a></label>
                     <input type="radio" name="agree" class="form-control" value="agree" <?php if ($agree === 'agree') echo 'checked'; ?>>
                     <span class="help-block"><?php echo $agree_err; ?></span>
            </div>
             <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
