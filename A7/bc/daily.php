<?php include 'includes/config.php';?>
<?php
if(isset($_GET['day'])){//day comes from link on page
    $day = $_GET['day'];
}else{//current day of week
    $day = date('l');
}

switch($day){
    case 'Sunday': 
        $cat= 'Archie';
        $image= 'archie.png';
        $info= "On this Sunday, we feature Archie. This handsome boy came to us from North Carolina. He is quite the talker and is quick to tell you all his secrets. With Archie around there is never a dull moment. Snuggling, snacking, playing and purring. Archie is an absolute gem! He has tested positive for Feline Leukemia (FeLV).";
   
    break; 
    
        case 'Monday': 
        $cat= 'Chili Pepper';
        $image= 'chilipepper.png';
        $info= "On this Monday, we feature Chili Pepper. She is very easy going and would be a good companion to another animal or human. Her relaxed attitude and stunning good looks will make you swoon. Come meet this hot chili peppa soon! She has tested positive for Feline Leukemia (FeLV).";
        
    break;
        
        case 'Tuesday': 
        $cat= 'Diego';
        $image= 'diego.png';
        $info= "On this Tuesday, we feature Diego. As curious as he is handsome, Diego has you at hello! This mischievous fella would be the purrrfect match for a family who has lots of love to give (as long as he gets to be the only kitty in the house!) Diego has tested positive for FeLV.";
    
    break;
    
        case 'Wednesday': 
        $cat= 'Wren';
        $image= 'wren.png';
        $info= "On this Wednesday, we feature Wren. This long haired tuxedo is a huge sweetheart! She is the perfect combination of playful and snuggly and is equipped with a professional-grade purring machine. She loves belly rubs, chin scratches and warm laps. Wren would be happiest in a home where she can get lots of attention! She has tested positive for FeLV.";
        
    break;
    
        case 'Thursday': 
        $cat= 'Ella';
        $image= 'ella.png';
        $info= "On this Thursday we feature Ella. Ella absolutely PAWsitively loves snuggles, like aggressive nonstop snuggles. Well, unless she is getting her beauty rest. She is a very sweet and sensitive all gray kitty. Playtime is usually beyond hilarious and she is all about the treats. She has tested positive for FeLV.";
        
    break;
    
        case 'Friday': 
        $cat= 'Daisy';
        $image= 'daisy.png';
        $info= "On this Friday, we feature Daisy. Tiny little Daisy came to us from North Carolina! She is a tiny little tabby who has had a rough start to her first 11 months of life. She is very busy begging for pets and snuggles. She spends most days lounging on fluffy things and winking at you. She has tested positive for FeLV.";
        
    break;
    
        case 'Saturday': 
        $cat= 'Bailee';
        $image= 'bailee.png';
        $info= "On this Saturday, we feature Bailee. Our sweet wiggly worm Bailee is a crowd favorite for a reason! This girl loves treats, belly scritches, and playing with guests from the other side of the cat room door. Her easygoing nature and good behavior make her an excellent role model for the other kitties, and the ideal candidate for purrrmanent resident.";
    break;
}

?>
<?php include 'includes/header.php';?>
<h2> Daily Cat </h2>
    
        <h3>Today's cat is <b><?=$cat?></b></h3>
        <img src="<?=$image?>"> 
        <p><?=$info?></p>
<p> Click below to check out the cat for each day of the week </p>

<p> <a href="daily.php?day=Monday">Monday</a> </p>
<p> <a href="daily.php?day=Tuesday">Tuesday</a> </p>
<p> <a href="daily.php?day=Wednesday">Wednesday</a> </p>
<p> <a href="daily.php?day=Thursday">Thursday</a> </p>
<p> <a href="daily.php?day=Friday">Friday</a> </p>
<p> <a href="daily.php?day=Saturday">Saturday</a> </p>
<p> <a href="daily.php?day=Sunday">Sunday</a> </p>

<?php include 'includes/footer.php'; ?>