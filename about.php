<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/sandip.png" alt="">
      </div>

      <div class="content">
         <h3>Sandip<span> Khadka</span></h3>
         <p>Hey There! Highly skilled and innovative programmer with proven experience in developing, and
implementing cutting-edge software solutions. Proficient in multiple programming
languages including HTML, CSS, JavaScript, PHP, ReactJs, Python, WordPress with a strong
aptitude for problem-solving. Demonstrated ability to collaborate effectively in crossfunctional teams to deliver projects on time and within budget. Strong communication and
interpersonal skills, able to effectively communicate technical concepts to non-technical
stakeholders. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>




<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>



</body>
</html>