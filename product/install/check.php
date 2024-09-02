<?php

if (isset($_POST['step01'])) {   
    $permissions_success = $_POST['permissions_success'];
    $requirements_success = $_POST['requirements_success'];

    if ($permissions_success == 1 && $requirements_success == 1) {
        header('Location: index.php?database');
        exit;
    } else {
        header('Location: index.php?database&msg=requirements');
    }
};

if (isset($_POST['step02'])) {
    $host = $_POST['host'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $userdb = $_POST['userdb'];
    $base_url = $_POST['base_url'];
    
    // Attempt to connect to the database
    $mysqli = new mysqli($host, $user, $password, $userdb);
    if ($mysqli->connect_error) {
        // If connection fails, redirect to profile page with error message
        header('Location: index.php?database&msg=nodatabase');
        exit();
    }
    
    // If connection succeeds, write config file
    $config_file = fopen('../include/config.php', 'w');
    fwrite($config_file, '<?php' . "\n");
    fwrite($config_file, '$host = "' . $host . '";' . "\n");
    fwrite($config_file, '$user = "' . $user . '";' . "\n");
    fwrite($config_file, '$password = "' . $password . '";' . "\n");
    fwrite($config_file, '$userdb = "' . $userdb . '";' . "\n");
    fwrite($config_file, '$base_url = "' . $base_url . '";' . "\n");
    fwrite($config_file, '?>' . "\n");
    fclose($config_file);
    
    // Run install.sql file to set up the database
    $install_sql = file_get_contents('database/install.sql');
    if ($mysqli->multi_query($install_sql)) {
        // Redirect to profile page
        header('Location: index.php?profile');
        exit();
    } else {
        // If database setup fails, redirect to profile page with error message
        header('Location: index.php?database&msg=installfail');
        exit();
    }
};


if (isset($_POST['step03'])) {
    require '../include/config.php';
define('BASEURL', $base_url);

define('DATABASE_HOST', $host);
define('DATABASE_USER', $user);
define('DATABASE_PASS', $password);
define('DATABASE_NAME', $userdb);
$db = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); 
    $user_access = 1; 
    $state = 1; 

    $sql = "INSERT INTO admin_users (username, email, password, user_access, state) VALUES ('$username', '$email', '$password', '$user_access', '$state')";

    if ($db->query($sql) === TRUE) {
        header('Location: index.php?finish');
    } else {
        header('Location: index.php?profile&msg=err');
    }

    $db->close();
};


if(isset($_POST['step04'])) {
    // Rename the installation folder
    $old_dir_name = '../install';
    $new_dir_name = '../installold';
    if (file_exists($old_dir_name)) {
        if (rename($old_dir_name, $new_dir_name)) {
            echo "Directory name changed successfully!";
        } else {
            echo "Error: Directory name could not be changed.";
        }
    } else {
        echo "Error: Directory does not exist.";
    }

    header('Location: ../index.php');
    exit;
};


?>
