<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <title>Document</title>
</head>


<body>

    <button type="submit" id="show_btn" ><b>Show List</b></button>
    <div id="responsecontainer"></div>
   
</body>

<script>
//     $( document ).ready(function() {
//     $("#show_btn").click();
// });
    $('#show_btn').click(function(e) {
            e.preventDefault();
            $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "getData.php",           
            dataType: "html",   //expect html to be returned                
            success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
            
        });
 
    </script>
</html>


