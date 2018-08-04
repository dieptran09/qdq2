<div class="load_vanban">
	<center>
		<div class="search_box">
			<input id="tb_search" type="text"/>
			<input class="bt_search" type ="submit" value = "TÌM KIẾM"/>
		</div>
	</center>
	<div class="load_vanban_opt">
		Loại văn bản:
	</div>
	<div class="load_vanban_opt">
		<script>
			function submit_year()
				{
				   document.forms[0].submit();
				}
		</script>
		<div style="float:left; margin-right: 10px;">
		Năm: 
		</div>
		
		<form action="/index.php" type ="submit" style="float:left; border:0px;"> 
		  <select name="year" onchange = "submit_year">
			<option value="2018">2018</option>
		  </select>
		  <br><br>
		</form>
	</div>
	
	<!vòng lặp hiện văn bản!>
	<center>
		<div class="vanban">
			<b style="font-size:18px;">
				Tên văn bản
			</b>
			</br></br>
			<b>
				Từ:
			</b>
			</br></br>
				Ngày đến:
			<hr style="border: .5px solid #e3e3e3">
			<a href="#" id= "@@mavanban" style="margin:0px;">
				<img src="img/download.png" style="width:50px;" />
			</a>
			<a href="#">
				Xem chi tiết
			</a>
		</div>
	</center>

</div>