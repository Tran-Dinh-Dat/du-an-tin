
		
		<form action="" method="POST" role="form">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Mã khu vực</th>
						<th>Tên khu vực</th>
						<th>Hình</th>
						<th>Thao tá</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($kvt as $key => $value):
						extract($value); ?>
					<tr>
						<td><?php echo $value["ma_kvt"] ?></td> 
						<td><?php echo $value["ten_kvt"] ?></td> 
						<td><img style="height: 100px" class="img-responsive" src="<?=$ROOT_URL?>/css/images/products/<?=$hinh?>"></td>
						<td>
							<button><a href="index.php?delete&ma_kvt=<?=$value['ma_kvt']?>">Delete</a></button>
							<button><a href="index.php?edit&ma_kvt=<?=$value['ma_kvt']?>">Edit</a></button>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a href="index.php?new" class="btn btn-default"> Thêm mới</a>

		
			
		
