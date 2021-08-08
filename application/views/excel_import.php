
<!DOCTYPE html>
<html>
<head>
    <title>How to Import Excel Data into Mysql in Codeigniter</title>
   
</head>

<body>
   <?php
   echo form_open_multipart('excel-import/import-data');
   echo form_upload('file');
   echo'<br>';
   echo form_submit(null,'Upload');
   echo form_close();
   ?>
</body>
</html>