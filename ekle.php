<?php

include_once('newclass.php');
include_once('baslik.php');



if(isset($_POST['ekle']))
	{
		
		date_default_timezone_set('Europe/Istanbul');

		$islem = new Database();
		$islem->connect();


		$baslik = $_POST['baslik'];
		$icerik = $_POST['icerik'];
		$tarih = date('d.m.Y - H:i:s');



			$ekle = array('', $baslik, $icerik, $tarih);
			$islem->insert('mesajlar',$ekle,null);
			echo  "Başarıyla Eklendi ...<br>";
			echo  "<img src='onay.png' height='40px' width='48px'><br>";

			echo  "<img src='islem.gif' height='50px' width='50px'>";
			header("refresh:2;icerik.php");
			

	}

?>

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   
	
	
	<form method="post" enctype="multipart/form-data" class="form-horizontal">
	    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">Başlık.</label></td>
        <td><input class="form-control" type="text" name="baslik" placeholder="Başlık" /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">İçerik</label></td>
        <td><input class="form-control" type="text" name="icerik" placeholder="İçerik" /></td>
    </tr>
    

    
    <tr>
        <td colspan="2"><button type="submit" name="ekle" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
        </td>
    </tr>
    
    </table>
    
</form>

