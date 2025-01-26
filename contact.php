<?php
$message = ""; // Initialize the message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $messageContent = htmlspecialchars($_POST['message']);

    // Save to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact_form";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO submissions (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $messageContent);

    if ($stmt->execute()) {
        $message = "Message saved successfully.";
    } else {
        $message = "Failed to save message.";
    }

    $stmt->close();
    $conn->close();

    // Send email
    $to = "kalasiddhi@gmail.com";
    $subject = "Message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$messageContent";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $message .= " Message sent successfully.";
    } else {
        $message .= " Failed to send message.";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>CONTACT PAGE</title>
        <link rel="stylesheet" href="haha.css">
    </head>
    <body>
        <section class="container">
            <nav>
                <img src="img/logo.jpg" width="100px" class="logo">
            </nav> 
            <header>CONTACT PAGE</header>
            <p>Feel free to contact us and convey your message</p>
            <ul>
                <li><strong>Address:</strong> Kala Siddhi, Betbari Alimur, Sivasgar, Assam, 785640</li>
                <li><strong>Phone:</strong> +919643682649</li>
                <li><strong>Email:</strong> kalasiddhi@gmail.com</li>
            </ul>
            <form class="form" method="POST">
                <div class="input-box">
                    <label>NAME</label>
                    <input type="text" id="name" name="name" placeholder="Enter full name" required>
                </div>
                <div class="input-box">
                        <label>PHONE NO</label>
                        <input type="text" id="phone_no" name="phone_no" placeholder="Enter Phone number" required>
                    </div>
                </div>
                <div class="input-box">
                        <label>EMAIL ID</label>
                        <input type="email" id="email" name="email" placeholder="Enter email id">
                </div>
                <div class="input-box">
                    <label>MESSAGE</label>
                    <input type="message" id="message" name="message" placeholder="Enter your message">
                </div>
                <button type="submit" name="join">SUBMIT</button>
            </form>
            <script>
        // Show the pop-up if there's a message
        const message = "<?= $message; ?>";
        if (message.trim() !== "") {
            const popup = document.getElementById("messagePopup");
            popup.style.display = "block";

            // Hide after 3 seconds
            setTimeout(() => {
                popup.style.display = "none";
            }, 3000);
        }
    </script>
        </section>
    </body>
</html>