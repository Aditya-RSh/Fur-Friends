<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurFriends - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header >
        <div class="title-bar">
            <h1 class="logo">Fur-Friends</h1>
            <nav>
                <a href="index.php">HOME</a>
                <a href="joinus.php">JOIN US</a>
                <a href="rescuee.php">OUR RESCUEES</a>
            </nav>
        </div>
    <section><p></p></section>
    <!--show case of using inline css-->
        <section class="rescue" style="background: url('https://www.fourpaws.com/-/media/Project/OneWeb/FourPaws/Images/articles/cat-corner/how-to-play-with-your-cat/cat-playtime-927x388.jpg') fixed center / cover;">
        <div class="help-section">
            <!--<img src="https://www.fourpaws.com/-/media/Project/OneWeb/FourPaws/Images/articles/cat-corner/how-to-play-with-your-cat/cat-playtime-927x388.jpg" alt="Dog" class="help-image">
        --><div class="donation">
                <h2>Donation</h2>
                <div class="amounts">
                    <button>Rs.50</button>
                    <button>Rs.100</button>
                    <button>Rs.200</button>
                    <button>Rs.500</button>
                </div>
                <input type="number" placeholder="Custom Amount" class="custom-amount">
                <button class="donate-btn">Donate</button>
            </div>
        </div>
        </section>
    </header>
    <section><p></p></section>
    <section class="rescue" >
        <div class="rescue-container">
            <h2>Emergency Rescue</h2>
            <form class="rescue-form" action ="index.php" method ="POST" enctype="multipart/form-data">
                <input type="text" placeholder="Name" name ="fullname" required>
                <input type="tel" placeholder="Phone Number" name ="number" required>
                <input type="text" placeholder="Address of Rescue" name ="address" required>
                <select name="pet" required>
                    <option value="" disabled selected>Species</option>
                    <option value="cat">Cat</option>
                    <option value="dog">Dog</option>
                    <option value="cow">Cow</option>
                    <option value="bird">Bird</option>
                    <option value="snake">Snake</option>
                </select>
                <input type="file" name="image" accept="image/*" required>
                <!-- <input type="file" accept="image/*" > -->
                <button type="submit" name ="submit">Submit</button>
            </form>            
        </div>
    </section>

    <section class="section">
        <h2>Join Us</h2>
        <p>
            Are you passionate about making a real difference in the lives of pets? At FurFriends, we invite you to become a part of our compassionate community dedicated to giving every animal a chance at a loving home. 
            Whether you’re interested in volunteering your time, fostering a pet in need, donating to support our mission, advocating for our cause, or partnering with us for events and collaborations, your involvement will have a meaningful impact.
            Together, we can ensure that every furry friend gets the care, love, and attention they deserve. Reach out to us through our contact page or sign up for our newsletter to discover how you can help make a difference. Join us in transforming lives, one paw at a time!
        </p>
    </section>
    
    <section class="section">
        <h2>About Us</h2>
        <p>
            At FurFriends, we're dedicated to giving every pet a second chance at a happy life. Our mission is to rescue, care for, and find loving homes for pets in need. With the support of our passionate team and community, 
            we ensure each animal receives the care and attention they deserve.
            Whether you're looking to adopt, volunteer, or support our cause, we welcome you to join us in making a difference—one paw at a time.




        </p>
    </section>
    
    <div class="creators">
        <div class="card">
            <img src="https://static.licdn.com/aero-v1/sc/h/9c8pery4andzj6ohjkjp54ma2" alt="Creator 1">
            <p>Aklavya Bhagat is a B.Tech undergraduate of Electronics and Computer Engineering, and he brings together technology capabilities with a drive for innovation to create meaningful digital offerings; an engineer by profession, he is keen on combining tech expertise with creative problem-solving to design applications that are purposeful, engaging, and effective. </p>
        </div>
        <div class="card">
            <img src="https://static.licdn.com/aero-v1/sc/h/9c8pery4andzj6ohjkjp54ma2" alt="Creator 2">
            <p>Aditya Raj Srivastava - A skilled ML Engineer and Entreprenure ensures that every animal rescued by FurFriends receives the best medical care possible. His expertise and empathy make him an invaluable member of our team. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, repellendus, itaque deleniti aperiam nobis ea ip a.</p>
        </div>
        <div class="card">
            <img src="https://static.licdn.com/aero-v1/sc/h/9c8pery4andzj6ohjkjp54ma2" alt="Creator 3">
            <p>Ayush Gupta - As our Software Developer, Ayush works tirelessly to make our website functioable. His love for animals and community is at the heart of our organization. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa iste eius possimus aliquid quam vel. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam null.</p>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2024 FurFriends. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

<?php
// Include the database connection
require_once 'config.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Collect form data
    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $pet = $_POST['pet'];

    $image = $_FILES['image'];
    $imageName = time() . "_" . basename($image['name']);
    $imagePath = "images/" . $imageName; 

    if (!file_exists('images')) {
        mkdir('images', 0777, true);
    }

    if (move_uploaded_file($image['tmp_name'], $imagePath)) {
        $stmt = $connect->prepare("INSERT INTO `rescue` (`name`, `number`, `address`, `pet`, `pet_images`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullname, $number, $address, $pet, $imagePath);
        if ($stmt->execute()) {
            echo "Success: Form and image uploaded successfully!";
        } else {
            echo "Database insertion failed.";
        }

        $stmt->close();
    } else {
        echo "Failed to upload image.";
    }
}
?>