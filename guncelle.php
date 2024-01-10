<?php

include_once('newclass.php');
include_once('baslik.php');



if(isset($_POST['guncelle']))
	{
		
		$islem= new Database();
		$islem->connect();
	
		$ids = $_POST['ids'];
		date_default_timezone_set('Europe/Istanbul');
		$baslik = $_POST['baslik'];
		$icerik = $_POST['icerik'];
		$tarih = date('d.m.Y - H:i:s');

		
		$guncelle=array('baslik'=>"$baslik",'icerik'=>"$icerik",'tarih'=>"$tarih");
		$islem->update('mesajlar',$guncelle,array("id=$ids"));
		
		echo  "Başarıyla Güncellendi ...<br>";
		echo  "<img src='islem.gif' height='50px' width='50px'>";
		header("refresh:2;icerik.php");

}

?>


<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
<?php

	$islem= new Database();
	$islem->connect();
		
	$id = $_GET["guncelleid"];
	
	$ab=$islem->select('mesajlar');
	
	while($islem=$ab->fetch_array()){

?>
   
    
	<table class="table table-bordered table-responsive">
	
    <tr>
    	<td><label class="control-label">ID.</label></td>
        <td><input class="form-control" type="text" name="ids" value="<?php echo $islem[0]; ?>" required /></td>
    </tr>    <tr>
    	<td><label class="control-label">Başlık.</label></td>
        <td><input class="form-control" type="text" name="baslik" value="<?php echo $islem[1]; ?>" required /></td>
    </tr>
    
    <tr>
    	<td><label class="control-label">içerik.</label></td>
        <td><input class="form-control" type="text" name="icerik" value="<?php echo $islem[2]; ?>" required /></td>
    </tr>  


    

    
    <tr>
        <td colspan="2"><button type="submit" name="guncelle" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-default" href="index.php"> <span class="glyphicon glyphicon-backward"></span> cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>




<?php
}
?>