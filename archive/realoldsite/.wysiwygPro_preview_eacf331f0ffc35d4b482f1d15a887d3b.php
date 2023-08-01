<?php
if ($_GET['randomId'] != "3eWjmHBVMPVWqm5TeWP_hUviqJJcITwGag15ZWTPjEbaB7Wpmo83Q1kH8NxUsw8L") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
