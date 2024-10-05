<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurFriends - Join Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="title-bar">
            <h1 class="logo">FurFriends</h1>
            <nav>
                <a href="index.html">HOME</a>
                <a href="joinus.html">JOIN US</a>
                <a href="rescuee.html">OUR RESCUEES</a>
            </nav>
        </div>
    </header>

    <section class="section join-us">
        <h2>Join Us</h2>
        <p>
            Become part of a dedicated team of volunteers and professionals working tirelessly to rescue and care 
            for animals in need. Your involvement helps provide shelter, medical care, and love to countless animals.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ipsa consequuntur sit eius magnam, nemo corporis, culpa repudiandae aperiam, enim reiciendis perspiciatis possimus et pariatur animi? Necessitatibus aliquid distinctio cumque.
        </p>
    </section>
    
    <div class="join-options">
        <div class="option">
            <h3>Become a Volunteer</h3>
            <p>
                Join our team and make a difference in the lives of animals. Volunteers are the backbone of our mission, 
                helping with rescues, care, and spreading awareness. Whether you're an experienced animal handler or a 
                passionate beginner, we have a place for you.
            </p>
            <button class="join-link" onclick="openPopup('volunteerPopup')">Join Us as Volunteer</button>

        </div>
        <div class="option">
            <h3>As Hospital/Vet</h3>
            <p>
                Collaborate with us to provide the best care for rescued animals. We are looking for hospitals and 
                veterinarians Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa. to join our network, offering medical services and support for our furry friends in need.
            </p>
            <button class="join-link" onclick="openPopup('hospitalPopup')">Join Our Network</button>

        </div>
    </div>

<!-- Volunteer Form -->
<div class="popup" id="volunteerPopup">
    <div class="popup-content">
        <div class="popup-header">
            <h3>Join Us as a Volunteer</h3>
        </div>
        <div class="popup-body">
            <p>Help us in making a difference in the lives of animals.</p>
            <form>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Full Name" required>

                <label for="number">Contact Number:</label>
                <input type="tel" id="number" name="number" placeholder="Contact Number" required>

                <div class="form-row">
                    <div class="form-column">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" placeholder="City" required>
                    </div>
                    <div class="form-column">
                        <label for="state">State:</label>
                        <input type="text" id="state" name="state" placeholder="State" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-column">
                        <label>Gender:</label>
                        <div class="gender-options">
                            <input type="radio" name="gender" value="Male" required> Male
                            <input type="radio" name="gender" value="Female"> Female
                            <input type="radio" name="gender" value="Other"> Other
                        </div>
                    </div>
                    <div class="form-column">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" placeholder="Age" required>
                    </div>
                </div>

                <button type="submit">Submit</button>
            </form>
            <span class="close-btn" onclick="closePopup('volunteerPopup')">&times;</span>
        </div>
    </div>
</div>


<!-- Hospital Form -->
<div class="popup" id="hospitalPopup">
    <div class="popup-content">
        <div class="popup-header">
            <h3>Join Us as a Hospital/Vet</h3>
        </div>
        <div class="popup-body">
            <p>Collaborate to provide care to rescued animals.</p>
            <form>
                <label for="hospitalName">Hospital Name:</label><br>
                <input type="text" id="hospitalName" name="hospitalName" placeholder="Hospital Name" required>

                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" placeholder="City" required>

                <label for="number">Contact Number:</label><br>
                <input type="tel" id="number" name="number" placeholder="Contact Number" required>

                <label for="speciality">Speciality:</label><br>
                <input type="text" id="speciality" name="speciality" placeholder="Speciality" required>

                <button type="submit">Submit</button>
            </form>
            <span class="close-btn" onclick="closePopup('hospitalPopup')">&times;</span>
        </div>
    </div>
</div>


    <footer>
        <p>&copy; 2024 FurFriends. All rights reserved.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
