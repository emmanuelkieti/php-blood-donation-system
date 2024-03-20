<main>
    <div class="banner">
    <div>
            <p>We save lifes through easy, efficient and reliable access of blood and providing interconnectivity between blood-distribution entities.</p>
            <h4>UPCOMING EVENTS & ALERTS</h4>
            <ul>
                <li>International Breast Cancer Day </li>
                <li>International AIDS day</li>
                <li>Cancer awereness month</li>
            </ul>
    </div>
    <div class="banner-img">
        <img src="./assets/images/photo-12227661.webp" />
    </div>
    </div>
    <h2>Our core values:</h2>
    <div class="homepage-content">
        <?php 
        $core_values = array("Life saving", "Efficient", "Love", "Integrity", "Inteconnection");
        $core_values_images = array("./assets/images/home3.webp", "./assets/images/home1.jpeg", "./assets/images/home2.jpg", "./assets/images/home4.webp", "./assets/images/home5.webp");
        $index = 0;
        foreach($core_values as $x) {
            echo "<article><figure><figcaption>".$core_values[$index]."</figcaption><img src='$core_values_images[$index]' /></figure></article>";
            $index++;
        }
        ?>
    </div>
</main>