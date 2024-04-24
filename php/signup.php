<?php

session_start();
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {


    # let's check user email is valid on not
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // let's check that email already exist in the database or not
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");

        if (mysqli_num_rows($sql) > 0) {
            echo "$email - This email already exist!!";
        } else {

            // let's check user upload file or not
            if (isset($_FILES['image'])) {

                $image_name = $_FILES['image']['name']; //getting user uploaded image name
                $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder

                // let's explode image and get the last extension like jpg png
                $image_explode = explode('.', $image_name);
                $image_extension = end($image_explode); //here we get the extension of an user uploaded img file

                $extensions = ['png', 'jpg', 'jpeg'];
                if (in_array($image_extension, $extensions) === true) {
                    
                    $time = time();

                    $new_image_name = $time.$image_name;

                    if (move_uploaded_file($tmp_name, "images/".$new_image_name)) {
                        $status = "Active now";
                        $random_id = rand(time(), 10000000);

                        // let's insert all user data inside table
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, image, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_image_name}', '{$status}')");
                        
                        if ($sql2) {

                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }

                        }else {
                            echo "Somthing went wrong!";
                        }
                    }

                }else {
                    echo "Please select an Image file - jpeg, jpg, png!";
                }
                
            } else {
                echo "Please select an Image file!";
            }
        }
    } else {
        echo "$email - This is not a valid email!";
    }
} else {
    echo "All inpust field are required!";
}
