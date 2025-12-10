<!DOCTYPE html>
<html>
<head>
    <title>Lab 3.2 PHP Validation</title>
    <style>
        body { font-family: sans-serif; }
        .container { border: 1px solid #000; padding: 10px; width: 350px; margin-bottom: 20px; }
        .error { color: red; font-size: 0.9em; }
        .success { color: green; font-size: 0.9em; }
        fieldset { border: 1px solid #ccc; padding: 10px; }
        legend { font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <fieldset>
            <legend>NAME</legend>
            <form method="post" action="">
                <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"><br>
                <hr>
                <input type="submit" name="submit_name" value="Submit">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['submit_name'])) {
            $name = trim($_POST['name']);
            
            
            if (empty($name)) {
                echo "<p class='error'>Error: Name cannot be empty.</p>";
            } 
            
            elseif (str_word_count($name) < 2) {
                echo "<p class='error'>Error: Name must contain at least two words.</p>";
            } 
           
            elseif (!ctype_alpha($name[0])) {
                echo "<p class='error'>Error: Name must start with a letter.</p>";
            } 
            
            
            elseif (!preg_match('/^[a-zA-Z0-9\.\-\s]+$/', $name)) { 
                echo "<p class='error'>Error: Name can only contain letters, periods, and dashes.</p>";
            } 
            else {
                echo "<p class='success'>Success: Valid Name.</p>";
            }
        }
        ?>
    </div>

    <div class="container">
        <fieldset>
            <legend>EMAIL</legend>
            <form method="post" action="">
                <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br>
                <hr>
                <input type="submit" name="submit_email" value="Submit">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['submit_email'])) {
            $email = trim($_POST['email']);
            
            
            if (empty($email)) {
                echo "<p class='error'>Error: Email cannot be empty.</p>";
            } 
           
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class='error'>Error: Invalid email format.</p>";
            } 
            else {
                echo "<p class='success'>Success: Valid Email.</p>";
            }
        }
        ?>
    </div>

    <div class="container">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <form method="post" action="">
                <table>
                    <tr>
                        <td align="center">dd</td>
                        <td align="center">mm</td>
                        <td align="center">yyyy</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="dd" style="width: 40px;" value="<?php echo isset($_POST['dd']) ? $_POST['dd'] : ''; ?>"> /</td>
                        <td><input type="text" name="mm" style="width: 40px;" value="<?php echo isset($_POST['mm']) ? $_POST['mm'] : ''; ?>"> /</td>
                        <td><input type="text" name="yyyy" style="width: 60px;" value="<?php echo isset($_POST['yyyy']) ? $_POST['yyyy'] : ''; ?>"></td>
                    </tr>
                </table>
                <hr>
                <input type="submit" name="submit_dob" value="Submit">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['submit_dob'])) {
            $dd = $_POST['dd'];
            $mm = $_POST['mm'];
            $yyyy = $_POST['yyyy'];

           
            if (empty($dd) || empty($mm) || empty($yyyy)) {
                echo "<p class='error'>Error: Date fields cannot be empty.</p>";
            } 
           
            elseif (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
                echo "<p class='error'>Error: Inputs must be numbers.</p>";
            }
            elseif ($dd < 1 || $dd > 31) {
                echo "<p class='error'>Error: Day must be between 1 and 31.</p>";
            }
            elseif ($mm < 1 || $mm > 12) {
                echo "<p class='error'>Error: Month must be between 1 and 12.</p>";
            }
            elseif ($yyyy < 1953 || $yyyy > 1998) {
                echo "<p class='error'>Error: Year must be between 1953 and 1998.</p>";
            }
            else {
                echo "<p class='success'>Success: Valid Date of Birth.</p>";
            }
        }
        ?>
    </div>

    <div class="container">
        <fieldset>
            <legend>GENDER</legend>
            <form method="post" action="">
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
                <hr>
                <input type="submit" name="submit_gender" value="Submit">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['submit_gender'])) {
            
            if (!isset($_POST['gender'])) {
                echo "<p class='error'>Error: Please select a gender.</p>";
            } else {
                echo "<p class='success'>Success: You selected " . $_POST['gender'] . ".</p>";
            }
        }
        ?>
    </div>

    <div class="container">
        <fieldset>
            <legend>DEGREE</legend>
            <form method="post" action="">
                <input type="checkbox" name="degree[]" value="SSC"> SSC
                <input type="checkbox" name="degree[]" value="HSC"> HSC
                <input type="checkbox" name="degree[]" value="BSc"> BSc
                <input type="checkbox" name="degree[]" value="MSc"> MSc
                <hr>
                <input type="submit" name="submit_degree" value="Submit">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['submit_degree'])) {
            
            if (!isset($_POST['degree']) || count($_POST['degree']) < 2) {
                echo "<p class='error'>Error: Please select at least two degrees.</p>";
            } else {
                echo "<p class='success'>Success: Valid Selection.</p>";
            }
        }
        ?>
    </div>

    <div class="container">
        <fieldset>
            <legend>BLOOD GROUP</legend>
            <form method="post" action="">
                <select name="blood_group">
                    <option value="">Select</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                </select>
                <hr>
                <input type="submit" name="submit_bg" value="Submit">
            </form>
        </fieldset>
        <?php
        if (isset($_POST['submit_bg'])) {
            $bg = $_POST['blood_group'];
            
            
            if (empty($bg)) {
                echo "<p class='error'>Error: Please select a blood group.</p>";
            } else {
                echo "<p class='success'>Success: Valid Blood Group ($bg).</p>";
            }
        }
        ?>
    </div>

</body>
</html>