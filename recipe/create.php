<?php
session_start();



?>
<html>
  <head>
    
  </head>
  <body>
    <form method="POST" action="">
      <div>
        <label>Title</label> <br>
        <input name="title" type="text" required />
      </div>
      <div>
        <label>Cook Time</label>
        <input name="cTime" type="text" required />
      </div>
      <div>
        <label>Add image (optional)</label>
        <input name="image" type="file" accept="image/png, image/jpeg" />
      </div>
      <div>
        <label>Description</label>
        <input name="description" type="text" maxLength="1000" />
      </div>
    </form>
  </body>
</html>
