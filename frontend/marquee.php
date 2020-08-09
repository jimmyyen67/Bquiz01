<?php
$db = new DB("ad");
$ads = $db->all(['sh' => 1]);
?>
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    <?php
    foreach ($ads as $ad) {
        echo $ad['text'] . "　";
    }
    ?>
</marquee>