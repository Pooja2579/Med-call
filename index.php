<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Med-call</title>

     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <!-- custom css file link -->
     <link href="style.css" rel="stylesheet">
 
</head>
<body>
   <!-- header section starts -->
   <header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i><strong>Med</strong>-Call</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#doctors">Doctors</a>
        <a href="#appointment">Appoinment</a>
        <a href="#review">Review</a>
        <a href="#blogs">Blogs</a>


    </nav>

    <div id="menu-btn" class="fas fa- bars"></div>
   </header>


<!-- home section -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.png" alt="">
    </div>

    <div class="content">
        <h3>We take care of your healthy life</h3>
        <p>A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> Appoinment Us<span class="fas fa-chevron-right"></span></a>
    </div>

</section>

<!-- icon section starts -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>Doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>Satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>Bed Facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>Available hospitals</p>
    </div>
</section>

<!-- about section  -->
<section class="about" id="about">

    <div class="row">

        <div class="image">
            <img src="image/dp.jpg" alt="">
        </div>

        <div class="content">
            <h3>Take the world's best quality treatment.</h3>
            <p>Med-Call has been dedicated to delivering compassionate and excellent healthcare. With a bed capacity of 576 and 47 specialties, our hospital boasts state-of-the-art laboratories and diagnostic facilities, and over 100 specialty clinics. </p>
            <p>Their presence ensures that our patients receive world-class care and treatment.</p>
            <a href="#" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
        </div>
    </div>
</section>

<!-- services section  -->

<section class="services" id="services">

    <h1 class="heading"> Our <span>services</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Free Checkups</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert Doctors</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Medicines</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Bed Facility</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Total Care</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
        </div>

        
    </div>
</section>


<!-- doctors section  -->


<section class="doctors" id ="doctors">
    <h1 class="heading"> our <span>doctors</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc1.jpg" alt="">
            <h3>Dr. Neerav</h3>
            <span>Expert doctor</span>
            <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
        </div>
    


    <div class="box">
        <img src="image/doc2.jpg" alt="">
        <h3>Dr. Aum</h3>
        <span>Expert doctor</span>
        <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>
</div>

<div class="box">
    <img src="image/doc3.jpg" alt="">
    <h3>Dr. Shambhavi</h3>
    <span>Expert doctor</span>
    <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
</div>
</div>

<div class="box">
    <img src="image/doc4.jpg" alt="">
    <h3>Dr. Ritika</h3>
    <span>Expert doctor</span>
    <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
</div>
</div>

<div class="box">
    <img src="image/doc5.jpg" alt="">
    <h3>Dr. Sukanya</h3>
    <span>Expert doctor</span>
    <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
</div>
</div>

<div class="box">
    <img src="image/doc6.jpg" alt="">
    <h3>Dr. Sanskriti</h3>
    <span>Expert doctor</span>
    <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-twitter"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-linkedin"></a>
</div>
</div>
</div>
</section>

 <!-- Appoinment section strats    -->

 <section class="appointment" id="appointment">

    <h1 class="heading"> <span>Appointment</span> Now </h1>

    <div class="row">

        <div class="image">
            <img src="image/ap.jpg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>

            <h3>Make Appoinment</h3>
            <input type="text" name="name" placeholder="your name" class="box">
            <input type="number" name="number" placeholder="your number" class="box">
            <input type="email" name="email" placeholder="your email" class="box">
            <input type="date" name="date" class="box">
            <input type="submit" name="submit" value="appoinment now" class="btn">
        </form>
    </div>
 </section>

<!-- Review section  -->

<section class="review" id="review">

    <h1 class="heading"> client's <span>review</span></h1>

    <div class="box-container">

    <div class="box">
        <img src="image/user1.png" alt="">
        <h3>User1</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

        </div>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
    </div>

    <div class="box">
        <img src="image/user1.png" alt="">
        <h3>User1</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

        </div>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.Lorem ipsum dolorLorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.Lorem ipsum dolor</p>
    </div>

    <div class="box">
        <img src="image/user1.png" alt="">
        <h3>User1</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

        </div>
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
    </div>
    

    
    </div>

</section>

<!-- blogs section  -->

<section class="blogs" id="blogs">
    <h1 class="heading"> our <span>blogs</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 November 2022</a>
                    <a href="#"> <i class="fas fa-user"></i> by Pooja</a>
                </div>
                <h3>Blog title Pooja goes here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 November 2022</a>
                    <a href="#"> <i class="fas fa-user"></i> by Pooja</a>
                </div>
                <h3>Blog title Pooja goes here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 November 2022</a>
                    <a href="#"> <i class="fas fa-user"></i> by Pooja</a>
                </div>
                <h3>Blog title Pooja goes here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 November 2022</a>
                    <a href="#"> <i class="fas fa-user"></i> by Pooja</a>
                </div>
                <h3>Blog title Pooja goes here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 November 2022</a>
                    <a href="#"> <i class="fas fa-user"></i> by Pooja</a>
                </div>
                <h3>Blog title Pooja goes here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 11 November 2022</a>
                    <a href="#"> <i class="fas fa-user"></i> by Pooja</a>
                </div>
                <h3>Blog title Pooja goes here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed aliqua.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </div>
            
</section>

<!-- footer section  -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i>home</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>about</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>services</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>doctors</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>appointment</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>review</a>
            <a href="#"> <i class="fas fa-chevron-right"></i>blogs</a>

    </div>

    <div class="box">
        <h3>Our Services</h3>
        <a href="#"> <i class="fas fa-chevron-right"></i>dental care</a>
        <a href="#"> <i class="fas fa-chevron-right"></i>message theraphy</a>
        <a href="#"> <i class="fas fa-chevron-right"></i>cardioloty</a>
        <a href="#"> <i class="fas fa-chevron-right"></i>diagnosis</a>
        <a href="#"> <i class="fas fa-chevron-right"></i>ambulance service</a>
</div>

<div class="box">
    <h3>Appointment Info</h3>
    <a href="#"> <i class="fas fa-phone"></i>+898968690707</a>
    <a href="#"> <i class="fas fa-phone"></i>+9796869550</a>
    <a href="#"> <i class="fas fa-envelope"></i>abc@gmail.com</a>
    <a href="#"> <i class="fas fa-envelope"></i>xyz@gmail.com</a>
    <a href="#"> <i class="fas fa-map-marker-alt"></i>Gurgaon, Haryana</a>
</div>

<div class="box">
    <h3>Follow Us</h3>
    <a href="#"> <i class="fab fa-faceappointment-f"></i>faceappointment</a>
    <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
    <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
    <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>

</div>
</div>

<div class="credit"> Created by <span>Pooja</span> | all right reserved</div>

</section>

<!-- js file links  -->
<script src="script.js"></script>
</body>
</html>