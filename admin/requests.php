<?php

include '../components/connect.php';

if(isset($_COOKIE['admin_id'])){
   $admin_id = $_COOKIE['admin_id'];
}else{
   $admin_id = '';
}

if(isset($_POST['delete'])){

   $delete_id = $_POST['delete_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

   $verify_delete = $conn->prepare("SELECT * FROM `requests` WHERE id = ?");
   $verify_delete->execute([$delete_id]);

   if($verify_delete->rowCount() > 0){
      $delete_bookings = $conn->prepare("DELETE FROM `requests` WHERE id = ?");
      $delete_bookings->execute([$delete_id]);
      $success_msg[] = 'Request deleted!';
   }else{
      $warning_msg[] = 'Request deleted already!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include '../components/admin_header.php'; ?>
<!-- header section ends -->

<!-- messages section starts  -->

<section class="grid">

            <h1 class="heading">all requests</h1>
            <div class="box-container">
            <?php
                if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
                    $search_box = $_POST['search_box'];
                    $search_box = filter_var($search_box, FILTER_SANITIZE_STRING);
                    $select_requests = $conn->prepare("SELECT * FROM `requests` WHERE property_id LIKE '%{$search_box}%' OR sender LIKE '%{$search_box}%' OR receiver LIKE '%{$search_box}%'");
                    $select_requests->execute();
                 }else{
                    $select_requests = $conn->prepare("SELECT * FROM `requests`");
                    $select_requests->execute();
                 }
                 if($select_requests->rowCount() > 0){
                    while($fetch_request = $select_requests->fetch(PDO::FETCH_ASSOC))
                    { 
                        $select_sender = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                        $select_sender->execute([$fetch_request['sender']]);
                        $fetch_sender = $select_sender->fetch(PDO::FETCH_ASSOC);
        
                        $select_property = $conn->prepare("SELECT * FROM `property` WHERE id = ?");
                        $select_property->execute([$fetch_request['property_id']]);
                        $fetch_property = $select_property->fetch(PDO::FETCH_ASSOC);
        
            ?>
            <div class="box">
                <p>name : <span><?= $fetch_sender['name']; ?></span></p>
                <p>number : <a href="tel:<?= $fetch_sender['number']; ?>"><?= $fetch_sender['number']; ?></a></p>
                <p>email : <a href="mailto:<?= $fetch_sender['email']; ?>"><?= $fetch_sender['email']; ?></a></p>
                <p>enquiry for : <span><?= $fetch_property['property_name']; ?></span></p>
                <form action="" method="POST">
                <input type="hidden" name="request_id" value="<?= $fetch_request['id']; ?>">
                <input type="submit" value="delete request" class="btn" onclick="return confirm('remove this request?');" name="delete">
                <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">view property</a>
            </form>
            </div>
            <?php
                }
            }else{
                echo '<p class="empty">you have no requests!</p>';
            }?>

   </div>

</section>

<!-- messages section ends -->
















<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

<?php include '../components/message.php'; ?>

</body>
</html>