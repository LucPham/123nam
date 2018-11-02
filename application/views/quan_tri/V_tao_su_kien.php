<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="title_su_kien">
		<h2>Tạo sự kiện</h2>
	</div>

	<div class="col-md-12">

	<?php
		if (isset($tb))
		{
	?>
		<div class="alert alert-success" role="alert"><p><?php echo $tb; ?></p><p><b><a href="<?php echo site_url('quan_tri/C_su_kien/tao_su_kien') ?>">Thêm một sự kiện khác</a></b></p></div>
	<?php
		}

	?>
	<form method="post" enctype="multipart/form-data">
		<div class="su_kien_col2">

			
			    <select class="sk_ngay" name="sk_ngay">
			    	<option value="0">---Chọn ngày---</option>
			   		<?php
			   		for ($i = 1; $i <=31; $i ++)
			   		{
			   		?>
			   		<option value="<?php echo $i ?>"><?php if ($i<=9) echo '0'.$i; else echo $i ?></option>
			   		<?php
			   	}
			   	?>
			    </select>
			    <span style="color: red; font-weight: bold">(*)</span>
			    <select class="sk_thang" name="sk_thang">
			    	<option value="0">---Chọn tháng---</option>
			   		<?php
			   		for ($i = 1; $i <=12; $i ++)
			   		{
			   		?>
			   		<option value="<?php echo $i ?>"><?php if ($i<=9) echo '0'.$i; else echo $i ?></option>
			   		<?php
			   	}
			   	?>
			    </select>
			    <span style="color: red; font-weight: bold">(*)</span>
			    <select class="sk_nam" name="sk_nam">
			    	<option value="">---Chọn năm---</option>
			   		<?php
			   		for ($i = date("Y"); $i >= 1945; $i --)
			   		{
			   		?>
			   		<option value="<?php echo $i ?>"><?php  echo $i ?></option>
			   		<?php
			   	}
			   	?>
			    </select>

				<p style="color: #FD0303; font-size: 12px; margin-top: 10px;" class="su_kien_ngay_error"></p>

			<input type="button" name="su_kien_hoan_thanh" id="su_kien_hoan_thanh" value="Hoàn thành" class="su_kien_hoan_thanh">

		</div>

		<div class="su_kien_col1">

			<input type="text" name="ten_su_kien" id="ten_su_kien" placeholder="Tên sự kiện (chủ đề)" class="form-control" value="<?php if (isset($_POST['ten_su_kien'])) echo $_POST['ten_su_kien']?>"><span style="color: red; font-weight: bold;">(*)</span>
			<p style="color: #FD0303; font-size: 12px; margin-top: 10px;" class="su_kien_ten_error"></p>
			<hr>

			<input type="text" name="doi_tuong" id="doi_tuong" placeholder="Đối tượng được quan tâm" class="form-control" value="<?php if (isset($_POST['doi_tuong'])) echo $_POST['doi_tuong']?>">

			<hr>

			<textarea name="ghi_chu" placeholder="Ghi chú thêm cho sự kiện này" class="form-control"><?php if (isset($_POST['ghi_chu'])) echo $_POST['ghi_chu']?></textarea>

		</div>

	</form>
		
	</div>

</div>
<div class="row" style="margin: 0; padding: 0">
	<div class="title_sk_2">
		<h2>Các sự kiện đã tạo</h2>
	</div>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

</div>