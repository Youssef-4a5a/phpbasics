 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel='stylesheet' href='//fonts.googleapis.com/css?family=font1|font2|etc' type='text/css'>
  <style type="text/css">
   
  </style>
  </head>
  <body>
      <form name="formOne" method="POST" action="page2.php">
        Name:
        <input type="text" name="name" size="15" maxlength="10">

        Pick a random number from 1 to 10:
        <input type="number" name="aNumber" size="8" maxlength="2">  
        <input type="hidden" name="updateFile" value="blahblah" size="9" maxlength="2">
        <input type="submit" name="submit" value="submit"/>
        <input type="submit" name="delete" value="delete"/>
        <input type="submit" name="update" value="update"/>
      </form>
  </body>
</html>

