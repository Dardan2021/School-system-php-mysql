<!doctype html>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form class="form-signin" action="upload.php" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Upload File</h2>
  <div class="form-group">
    <label for="InputFile">File input</label>
    <input type="file" name="file[]" multiple="" id="InputFile">
    <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
  </div>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Upload</button>
      </form>
	
</body>
</html>