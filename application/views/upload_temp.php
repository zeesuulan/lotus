<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lotus</title>
    <?=setCSS(array( "bootstrap.min.css", "main.css"))?>
</head>

<body>
    <div class="bs-docs-header">
        <div class="container">
            <h1>上传</h1>
        </div>
    </div>
    <div class="container">
    	<form class="form" action="upload/getFile" method="post" enctype="multipart/form-data">
    		<label>根据上传的年级，选择不同的表！！！（重要）</label>
    		<select name="level" class="form-control" style="width:20%;margin: 10px 0;">
                <option value="1">一年级表</option>
                <option value="2">二年级表</option>
                <option value="3">三年级表</option>
                <option value="4">四年级表</option>
    			<option value="5">五年级表</option>
    			<option value="6">六年级表</option>
    		</select>
        	<input type='file' class="btn btn-info btn-lg" name="filepath" id="excelfile"></input>
        	<button class="btn btn-default" style="margin:10px 0;">上传</button>
        </form>
    	<a class="btn btn-danger" href="<?=site_url("index.php/user/logout")?>">记得要退出</a>
    </div>
</body>
<?=setJS(array( "jquery.min.js", "bootstrap.min.js", "main.js"))?>

</html>
