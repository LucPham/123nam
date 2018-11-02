<div id="wrapp-1">
	<div id="title">
		<span>Số Lượng User</span>
	</div>
	<div id="countUser">
		<span>
			<?php  
				if (isset($count)) {
					echo $count['countUser'];
				}
			?>
		</span>
	</div>
</div>

<div id="wrapp-2">
	<div id="title">
		<span>Giới Tính</span>
	</div>
	<div id="gender-dashboard">
		<table class="table wrap2-table">
			<tr>
				<td class="td1"><a href="#">Male</a></td>
				<td class="td2">
					<div class="progress">
					  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percentMale)) echo $percentMale.'%'; ?>">
					    <span><?php if (isset($percentMale)) echo $percentMale.'%'; ?></span>
					  </div>
					</div>
				</td>
				<td class="td3"><a href="#"><?php if (isset($countMale)) echo $countMale; ?></a></td>
			</tr>
			<tr>
				<td><a href="#">Female</a></td>
				<td>
					<div class="progress">
					  <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percentFemale)) echo $percentFemale.'%'; ?>">
					    <span><?php if (isset($percentFemale)) echo $percentFemale.'%'; ?></span>
					  </div>
					</div>
				</td>
				<td><a href="#"><?php if (isset($countFemale)) echo $countFemale; ?></a></td>
			</tr>
			<tr>
				<td><a href="#">Other</a></td>
				<td>
					<div class="progress">
					  <div class="progress-bar progress-bar-warning progress-bar-striped" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percentOther)) echo $percentOther.'%'; ?>">
					    <span><?php if (isset($percentOther)) echo $percentOther.'%'; ?></span>
					  </div>
					</div>
				</td>
				<td><a href="#"><?php if (isset($countOther)) echo $countOther; ?></a></td>
			</tr>
		</table>
	</div>
</div>


<div id="wrapp-3">
	<div id="title">
		<span>Độ tuổi</span>
	</div>

	<div id="old-mark">
		<table class="table wrap3-table">
			<tr>
				<td class="td31"><a href="#">Nhi đồng tuổi 2-9</a></td>
				<td class="td32">
					<div class="progress">
					  <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percent2to9)) echo $percent2to9.'%'; ?>">
					    <span><?php if (isset($percent2to9)) echo $percent2to9.'%'; ?></span>
					  </div>
					</div>
				</td>
				<td class="td33"><a href="#"><?php if (isset($yearsOld2to9)) echo $yearsOld2to9; ?></a></td>
			</tr>
			<tr>
				<td><a href="#">Thiếu niên tuổi 10-15</a></td>
				<td>
					<div class="progress">
					  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percent10to15)) echo $percent10to15.'%'; ?>">
					    <span><?php if (isset($percent10to15)) echo $percent10to15.'%'; ?></span>
					  </div>
					</div>
				</td>
				<td><a href="#"><?php if (isset($yearsOld10to15)) echo $yearsOld10to15; ?></a></td>
			</tr>
			<tr>
				<td><a href="#">Thanh niên tuổi 16-32</a></td>
				<td>
					<div class="progress">
					  <div class="progress-bar progress-bar-success progress-bar-striped" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percent16to32)) echo $percent16to32.'%' ?>">
					    <span><?php if (isset($percent16to32)) echo $percent16to32.'%' ?></span>
					  </div>
					</div>
				</td>
				<td><a href="#"><?php if (isset($yearsOld16to32)) echo $yearsOld16to32; ?></a></td>
			</tr>
			<tr>
				<td><a href="#">Trung niên tuổi 33-50</a></td>
				<td>
					<div class="progress">
					  <div class="progress-bar progress-bar-primary progress-bar-striped" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percent33to50)) echo $percent33to50.'%' ?>">
					    <span><?php if (isset($percent33to50)) echo $percent33to50.'%' ?></span>
					  </div>
					</div>
				</td>
				<td><a href="#"><?php if (isset($yearsOld33to50)) echo $yearsOld33to50; ?></a></td>
			</tr>
			<tr>
				<td><a href="#">Già tuổi >50</a></td>
				<td>
					<div class="progress">
					  <div class="progress-bar progress-bar-danger progress-bar-striped" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php if (isset($percentUp50)) echo $percentUp50.'%' ?>">
					    <span><?php if (isset($percentUp50)) echo $percentUp50.'%' ?></span>
					  </div>
					</div>
				</td>
				<td><a href="#"><?php if (isset($yearsOldUp50)) echo $yearsOldUp50; ?></a></td>
			</tr>
		</table>
	</div>
</div>