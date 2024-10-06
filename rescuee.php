<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurFriends - Adoption</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="title-bar">
            <h1 class="logo">FurFriends</h1>
            <nav>
                <a href="index.php">HOME</a>
                <a href="joinus.php">JOIN US</a>
                <a href="rescuee.php">OUR RESCUEES</a>
            </nav>
        </div>
    </header>

    <section class="section">
        <h2>All the Friends FurEver Saved</h2>
        <p>
            A pet from FurFriends means more than just bringing home a new friend; it means giving a deserving animal a second chance at happiness. Each of our pets has a unique story, and we're here to help you find the one that best fits into your life and heart.<br>
            By choosing to adopt, you're not only saving a life but also making a positive impact on your community. Our rescuees process is designed to be supportive and straightforward, ensuring that both you and your new furry friend have a smooth transition into your new life together.
            Explore our available pets today and discover the joy of giving a FurFriend a loving home. Together, we can make a difference, one paw at a time. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, excepturi. Lorem ipsum dolor sit.
        </p>
    </section>

    <div class="adoption-list">
        <div class="pet-card">
            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTx_J-pWMcyuxVHWqKQv5eHQkkIldmDIVxuxQ3nbdUh9SVzCDdL" alt="Dog 1">
            <h3>Tiger</h3>
            <p>Breed: Labrador Retriever</p>
            <p>Age: 3 years</p>
            <a href="#" class="adopt-link">Tiger</a>
        </div>
        <div class="pet-card">
            <img src="https://d3544la1u8djza.cloudfront.net/APHI/Blog/2022/02-11/domestic+shorthair+tabby+cat+hiding+behind+a+cat+tower-min.jpg" alt="Cat 1">
            <h3>Whiskers</h3>
            <p>Breed: Domestic Shorthair</p>
            <p>Age: 2 years</p>
            <a href="#" class="adopt-link">Whiskers</a>
        </div>
        <div class="pet-card">
            <img src="https://m.media-amazon.com/images/I/61N4Vb291QL.jpg" alt="Dog 2">
            <h3>Max</h3>
            <p>Breed: German Shepherd</p>
            <p>Age: 4 years</p>
            <a href="#" class="adopt-link">Max</a>
        </div>
        <div class="pet-card">
            <img src="https://goldenhearts.co/wp-content/uploads/2020/04/golden-retriever-164221_1280-1024x998.jpg" alt="Dog 2">
            <h3>Bub</h3>
            <p>Breed: Golden Retriever</p>
            <p>Age: 4 years</p>
            <a href="#" class="adopt-link">Bub</a>
        </div>
        <div class="pet-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQTHocES5Eer0UwreWs9HxDATLet_AS1RyMA&s" alt="Dog 2">
            <h3>Pinky</h3>
            <p>Breed: Persian Cat/p>
            <p>Age: 2 years</p>
            <a href="#" class="adopt-link">Pinky</a>
        </div>
        <div class="pet-card">
            <img src="https://t3.ftcdn.net/jpg/06/97/20/50/360_F_697205094_mIHTPAdi4M0ReTyIInsa5GUI5JKixBD0.jpg" alt="Dog 2">
            <h3>Dodo</h3>
            <p>Breed: Siberian husky</p>
            <p>Age: 4 years</p>
            <a href="#" class="adopt-link">Dodo</a>
        </div>
        <div class="pet-card">
            <img src="https://puppiezo.com/wp-content/uploads/2023/06/IMG_2155.jpeg" alt="Dog 2">
            <h3>Oggy</h3>
            <p>Breed: British Shorthair</p>
            <p>Age: 4 years</p>
            <a href="#" class="adopt-link">Oggy</a>
        </div>
        <div class="pet-card">
            <img src="https://qph.cf2.quoracdn.net/main-qimg-c0571c3d3e8926aa5b65beb9a95a39f8" alt="Dog 2">
            <h3>Jackie</h3>
            <p>Breed: German Shepherd</p>
            <p>Age: 4 years</p>
            <a href="#" class="adopt-link">Jackie</a>
        </div>
        <!--to add more cards-->
    </div>

    <footer>
        <p>&copy; 2024 FurFriends. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

<?php

require_once 'config.php';

// SQL query to retrieve all records
$sql = "SELECT * FROM rescue";
$result = mysqli_query($connect, $sql);

// Check if records were found
if (mysqli_num_rows($result) > 0) {
    // Include the CSS file
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Persons List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>List of Persons</h1>
    <div class="container">';

    // Loop through each record and display the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">
                <img src="' . htmlspecialchars($row['pet_images']) . '" alt="Image of ' . htmlspecialchars($row['name']) . '">
                <h2>' . htmlspecialchars($row['name']) . '</h2>
                <p><strong>Address:</strong> ' . htmlspecialchars($row['address']) . '</p>
                <p><strong>Phone Number:</strong> ' . htmlspecialchars($row['pet']) . '</p>
              </div>';
    }

    echo '</div>
</body>
</html>';
} else {
    echo "No records found.";
}

// Close the database connection
mysqli_close($connect);
?>
