<?php
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Bloom & Bliss - Bouquet Shop</title>";
echo "<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #FAE9FC;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #D749E4;
        text-align: center;
        padding: 20px;
    }
    .gallery {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 20px;
    }
    .bouquet {
        background-color: #E79BEE;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        margin: 10px;
        width: 200px;
        text-align: center;
    }
    .contact {
        background-color: #D749E4;
        padding: 20px;
        text-align: center;
    }
    input, textarea {
        margin: 10px;
        padding: 8px;
        width: 300px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
    button {
        background-color: #9827F5;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
    footer {
        background-color: #8867AB;
        text-align: center;
        padding: 10px;
    }
</style>";
echo "</head>";
echo "<body>";

echo "<header>
    <h1>Bloom & Bliss</h1>
    <p>Your destination for handcrafted floral bouquets</p>
</header>";

echo "<section class='gallery'>
    <h2>Our Bouquets</h2>
    <div class='bouquet'>
        <img src='rose delight.jpeg' width=150,height=75 alt='Rose Delight'>
        <h3>Rose Delight</h3>
        <p>₹799 - A romantic blend of red and pink roses.</p>
    </div>
    <div class='bouquet'>
        <img src='DSC05093_11_10176.webp' width=150,height=75 alt='Sunshine Charm'>
        <h3>Sunshine Charm</h3>
        <p>₹699 - Bright sunflowers with a touch of lavender.</p>
    </div>
    <div class='bouquet'>
        <img src='orchids-flowers.webp'  width=150,height=75 alt='Orchid Elegance'>
        <h3>Orchid Elegance</h3>
        <p>₹999 - Exotic orchids for a luxurious feel.</p>
    </div>
</section>";

echo "<section class='contact'>
    <h2>Contact Us</h2>
    <form method='POST'>
        <input type='text' name='name' placeholder='Your Name' required><br>
        <input type='email' name='email' placeholder='Your Email' required><br>
        <textarea name='message' placeholder='Your Message' required></textarea><br>
        <button type='submit'>Send Message</button>
    </form>
</section>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<section class='contact'>";
    echo "<h3>Thank you, $name!</h3>";
    echo "<p>We received your message:</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<p>We'll get back to you at <strong>$email</strong>.</p>";
    echo "</section>";
}

echo "<footer>
    <p>&copy; 2025 Bloom & Bliss. All rights reserved.</p>
</footer>";

echo "</body>";
echo "</html>";
?>
