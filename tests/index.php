<?php
if (isset($_POST) && !empty($_POST)) {
  print_r($_POST);
  die;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Transloadit test</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript" src="../build/jquery.transloadit2-latest.js"></script>
  <script type="text/javascript">
  $(function () {
    $('#entryForm').transloadit({
      wait       : true,
      autoSubmit : true,
      fields     : true,
      params     : {
        auth: {
          key: 'e946b570757b11e4a6ed718c26049668'
        },
        steps: {
          resize: {
            robot           : '/image/resize',
            use             : ':original',
            resize_strategy : 'pad',
            width           : '${fields.width}',
            height          : '${fields.height}'
          }
        }
      }
    });
  });
  </script>
</head>
<body>
  <form id="entryForm" action="" enctype="multipart/form-data" method="POST">
    <input type="file" name="my_file" id="file" /><br />
    <input name="width" type="text" placeholder="width" /><br />
    <input name="height" type="text" placeholder="height" /><br />
    <input type="submit" value="Submit" />
  </form>
</body>
</html>
