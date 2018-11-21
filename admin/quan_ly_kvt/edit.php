<form action="index.php" method="POST" enctype="multipart/form-data">
	<legend>Cập nhật khu vực</legend>

	<div class="form-group">
		<label for="">Mã khu vực</label>
		<input type="text" class="form-control" id="" name="ma_kvt" value="<?=$ma_kvt?>" readonly="">
	</div>
	<div class="form-group">
		<label for="">Tên khu vực</label>
		<input type="text" class="form-control" id="" name="ten_kvt" value="<?=$ten_kvt?>">
	</div>
	<div class="form-group">
		<label for="">Hình</label>
		<input name="up_hinh" type="file" class="form-control">
		<input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
	</div>
	<div class="form-group">
		<button name="edit_kvt"class="btn btn-default">Cập nhật</button>
	</div>
</form>