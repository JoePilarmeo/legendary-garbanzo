<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
    if(isset($_POST)){
        if($_POST['username']!=null){
            if(isset($_POST['color'])){
                if($_POST['dish']!=null){

                    echo 'Thanks for your selection '.($_POST['username']).'<br>';
                    echo 'You really enjoyed '.($_POST['dish']);
                    echo ' especially with a nice '.($_POST['color']).' wine';
                    
                } else {echo 'Please input your favorite dish';}      
            } else {echo 'Please select your favorite wine color';}
        } else {echo 'Please input your name!';}
    }
    
        
    ?>

</body>
</html>