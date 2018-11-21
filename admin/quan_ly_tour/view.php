
		
		<form action="" method="POST" role="form">
			<h3 class="alert alert-info">Quản trị tour</h3>
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="alert-info alert" style="font-size: 13px" >
						<th>Mã tour</th>
						<th>Tên tour</th>
						<th>Hình</th>
						<th>Mã khu vực</th>
						<th>Giá</th>
						<th>Số ngày</th>
						<th>Số lượt xem</th>
						<th>Số lượt yêu thích</th>
						<th>Ngày khởi hành</th>
						<th>Chi tiết</th>
						<th>Thao tá</th>

					</tr>
				</thead>
				<tbody>
					<?php foreach ($tour as $key => $value):
						extract($value); ?>
					<tr>
						<td><?php echo $value["ma_tour"] ?></td> 
						<td><?php echo $value["ten_tour"] ?></td> 
						<td><img style="height: 100px" class="img-responsive" src="<?=$ROOT_URL?>/css/images/<?=$hinh?>"></td>
						<td><?php echo $value["ma_kvt"] ?></td> 
						<td><?php echo $value["gia"] ?></td> 
						<td><?php echo $value["so_ngay"] ?></td> 
						<td><?php echo $value["so_luot_xem"] ?></td> 
						<td><?php echo $value["so_luot_yeu_thich"] ?></td> 
						<td><?php echo $value["ngay_khoi_hanh"] ?></td> 
						<td><?php echo $value["chi_tiet"] ?></td> 

						<td>
							<button><a href="index.php?delete&ma_tour=<?=$value['ma_tour']?>">Delete</a></button>
							<button><a href="index.php?edit&ma_tour=<?=$value['ma_tour']?>">Edit</a></button>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>	
		</form>
		<a href="index.php?new" class="btn btn-default"> Thêm mới</a>

		
			
		







