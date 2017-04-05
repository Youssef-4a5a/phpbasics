 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=font1|font2|etc' type='text/css'>
  </head>
  <body>
      <form name="formOne" method="POST" action="ass011_filehandle.php">
        File Name:
        <br>
        <input type="text" name="fileName" size="15" maxlength="10" />
        <br>
        Text Area:
        <br>
        <textarea rows="4" cols="50" name="fileContent" />
            Lorem ipsum
        </textarea>
        <br>
        Multiple files:
        <input type="text" name="fileName">
        <br>
        <input type="submit" name="submit" value="create"/>
        <input type="submit" name="submit" value="update"/>
        <input type="submit" name="submit" value="read"/>
        <input type="submit" name="submit" value="delete"/>
        <input type="submit" name="submit" value="multifiles" />

      </form>
  </body>
</html>

