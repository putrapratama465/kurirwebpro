<!DOCTYPE html>
<html>
<head>
    <title>Date Picker</title>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
require_once('koneksi.php');

$query = "SELECT * FROM tb_paket";
$urlcrud = "index.php?page=crud/";
?>
<div class="container">
    <form action="<?= $urlcrud.'lihatlaporan' ?>" method="post">
<legend>Masukan Tanggal</legend>
        <fieldset>
   <div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Dari Tanggal</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="dari">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
					<input type="hidden" id="dtp_input2" value=""/>
    </div>
	<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Sampai Tanggal</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="10" type="text" name="sampai">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
					<input type="hidden" id="dtp_input2" value=""/>

    </div>
        </fieldset>
	<input class="btn btn-success btn-lg" type='submit' Value='Lihat'>
    </form>
</div>

<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
 $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script>

</body>
</html>
