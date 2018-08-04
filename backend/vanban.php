<html>
    <head>
        <meta charset="utf-8">
        <title>Quản lý văn bản</title>
		<link rel="stylesheet" type="text/css" href="main_css.css">
    </head>
	<body>
		<?php
		include "header.php";
		?>		
		<div class="body">
			<div class="left_menu">
				<div id="van_ban_den">
					<a style="font-size:22px; color:#004d00; font-weight:bold;">
					VĂN BẢN ĐẾN
					</a>
					<ul>
						<a>
							<li>
							select distinct ten_loai_van_ban
							from loai_van_ban
							order by ten_loai_van_ban
							</li>
						</a>
					</ul>
					<a>
					Xem tất cả
					</a>
				</div>
				<div id="van_ban_di" style="margin-top:20px;">
					<a style="font-size:22px; color:#004d00; font-weight:bold;">
					VĂN BẢN ĐI<a style="font-size:22px; color:#004d00; font-weight:bold;">
					VĂN BẢN ĐẾN
					</a>
					<ul>
						<a>
							<li>
							select distinct ten_loai_van_ban
							from loai_van_ban
							order by ten_loai_van_ban
							</li>
						</a>
					</ul>
					<a>
					Xem tất cả
					</a>
					<ul>
						<a>
							<li>
							select distinct ten_loai_van_ban
							from loai_van_ban
							order by ten_loai_van_ban
							</li>
						</a>
					</ul>
					<a>
					Xem tất cả
					</a>
				</div>
				
			</div>
			<?php
		include "load_vanban.php";
		?>
		</div>
		
		
		<?php
			include "footer.php";
			?>
	</body>
	

</html>