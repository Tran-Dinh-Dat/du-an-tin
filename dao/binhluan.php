<?php function binh_luan($ma_tour){
		$sql = "SELECT * FROM binh_luan where ma_tour=?";
		return pdo_query($sql,$ma_tour);

	} 
	function gui_bl($ma_kh,$ten_kh,$ma_tour,$noi_dung){
			$sql="INSERT into binh_luan(ma_kh,ten_kh,ma_tour,noi_dung) values(?,?,?,?)";
			pdo_execute($sql,$ma_kh,$ten_kh,$ma_tour,$noi_dung);
		}
		?>