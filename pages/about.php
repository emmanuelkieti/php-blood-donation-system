<?php 
$page_variables = array("title"=>"About");

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";

$myfile = fopen("../data/about.json", "r") or die("Unable to open file!");
$about_data = json_decode(fread($myfile,filesize("../data/about.json")));
fclose($myfile);
?>
<main id="about-info">
    <?php 
    $index = 0;
    foreach($about_data->questions as $x) {
        echo "<h3>$x</h3>";
        echo $about_data->answers[$index++];
    }
    ?>
</main>
<?php 
include "../includes/footer.php";
?>