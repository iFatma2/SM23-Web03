<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="web.css">
</head>
<body>
    <div class="voice_to_text"> 
        <h1>Voice to Text Converter</h1>
  
        <button id="click_to_record">Voice To Text</button>
        <button id="stop_recording" style="display: none;">Stop Recording</button>
        <form action="save.php" method="POST">
            <textarea name="convert_text" id="convert_text"></textarea>
            <button name="Save" id="Save" type="submit">Save</button>
        </form>
    </div>

    <script type="text/javascript" src="webj.js"></script>
</body>
</html>