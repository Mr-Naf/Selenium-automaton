<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>The Online Jewelry Management System is a cloud-based platform designed to help jewelry businesses manage inventory, sales, customer orders, and repairs anytime, anywhere. With real-time tracking, secure data access, and user-friendly features, it streamlines operations and enhances efficiency for both retailers and wholesalers in the jewelry industry.</p>
         <p>The Online Jewelry Management System is a modern, web-based solution built to simplify and automate jewelry business operations. From managing stock and customer orders to tracking repairs and generating reports, everything is accessible in one secure platform. Designed for jewelers of all sizes, it helps save time, reduce errors, and grow your business online.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I feel our biggest differentiator is not only the ability to understand local, think local and act local, but at the same time bring in our vast experience and sourcing strength out of operating in multiple markets. Jewellery is a complicated product, because tastes vary even within the same state. What helps us here is the huge variety of products we stock from artisans across the country and even the Arab countries.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mohammded Asli</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>We have always visualized everything on a large scale. We always enjoyed making the road and never thought of following a trail. Massive marketing campaigns and launches, path-breaking ads which were never-before seen in jewellery advertising, multi-storey large format jewellery showrooms, same-day multi-launch ceremonies and events. I highly recommend this shop to and trustworthy jewelry.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kuloshani</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I recently visited SWARNHA and was truly impressed by their stunning collection and exceptional service. The staff were very friendly and knowledgeable, helping me choose the perfect piece without any pressure. The quality of the gold and the craftsmanship were top-notch. Prices were reasonable, and they even offered customization options. I highly recommend  elegant and trustworth.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>kumar</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"Absolutely loved my experience here! The staff were so patient and helpful. Found the perfect necklace for my sister’s wedding. The designs are elegant and unique!"High-quality jewelry at a fair price. I’ve bought from many places, but this shop stands out for its service and craftsmanship. Highly recommended in and trustworthy jewelry in that our shop !"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chathurangi kunaratna</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"Excellent customer service and beautiful collections. The shop was clean, organized, and had something for every budget. Will definitely come back."They customized a ring for me and it came out better than I imagined. The gold was pure and the stones were genuine. Trusted and reliable!Highly recommended in and trustworthy jewelry"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Daniyal perera</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"A hidden gem.. ! Their bridal collections are stunning and the quality is unmatched. Staff was friendly and guided me well through the purchase.Very professional staff and an amazing variety of jewelry. The packaging was neat and perfect for gifting. My wife was so happy ! Great value for money and reliable and very trustworthy jewelry !"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>mrs.Benjamin Nethan</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">Greate Authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Kuloshani</h3>
      </div>

      <div class="box">
         <img src="images/WhatsApp Image 2024-08-03 at 10.52.03_223b808b.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mohammded Asli</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>krishanth</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chathuranga Mahesi</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nadaraja</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>mrs.Rahav</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>