<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Airbnbっぽく不動産物件を地図表示をするPHPスクリプト</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- ローカルホストならこのままでOK -->
<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=places" charset="UTF-8"></script>

<!-- GoogleMap APIから地図情報をjsonで取得するスクリプト -->
<script src="properties.js" charset="UTF-8"></script>

<script type="text/javascript" charset="UTF-8">
	// 現在ページのURLを指定する
	var base_url = "http://localhost/airbnb_map/";
</script>

<style type="text/css">
	#js-map-container{
		height: 500px;
	}
</style>

</head>
<body>

<div id="js-map-container"></div>

</body>
</html>