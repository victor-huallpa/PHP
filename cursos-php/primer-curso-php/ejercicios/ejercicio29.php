<?PHP
//obtener informacion mediante php de html
$txtN;
$lengua;

$chkphp;
$chkhtml;
$chkcss;

$txt;
$lsAnime;
if($_POST){
    //if ternario
    $txtN = (isset($_POST['txtname']))?$_POST['txtname']:'' ;
    $lengua = (isset($_POST['lenguaje']))?$_POST['lenguaje']:'' ;

    $chkphp = (isset($_POST['chkphp'])=='si')?'checked':'';
    $chkhtml = (isset($_POST['chkhtml'])=='si')?'checked':'';
    $chkcss = (isset($_POST['chkcss'])=='si')?'checked':'';

    $lsAnime = (isset($_POST['lsAnime']))?$_POST['lsAnime']:'';
    
    $txt = (isset($_POST['txtComen']))?$_POST['txtComen']:'';
    print_r($_POST['lsAnime']);
    //instruccion de insersion
    //Rutina de agun calculo
    //Aqui puedes alterar esos valores para mostrar diferentes valores modificados
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?PHP if ($_POST){ //codgio endevido?>
    <strong> hola</strong>: <?PHP echo $txtN?><br>
    <strong> tu lenguaje es: </strong>: <?PHP echo $lengua?><br>
    <strong> Estas aprendiendo:</strong><br>
    <?PHP echo ($chkphp == 'checked')? '- PHP <br>':''; ?>
    <?PHP echo ($chkhtml == 'checked')? '- HTML <br>':''; ?>
    <?PHP echo ($chkcss == 'checked')? '- CSS':''; ?><br>
    <strong> tu anime favorito es: : </strong>: <?PHP echo $lsAnime?><br>
    <strong>Tu mensaje es:</strong><br>
    <?php echo $txt;?>
    <?php } //codigo endevido?>
    <form action="ejercicio29.php" method="post">
        Nombre: <br>
        <input value="<?PHP echo $txtN?>" type="text" name="txtname" id="">
        <br>
        ¿te gusta?: <br>
        <br> PHP: <input type="radio" <?PHP echo ($lengua == 'php')?'checked':''; ?>  name="lenguaje" value="php" id="">
        <br> html: <input type="radio" <?PHP echo ($lengua == "html")?"checked":""; ?>  name="lenguaje" value="html" id="">
        <br> css: <input type="radio" <?PHP echo ($lengua == "css")?"checked":""; ?>  name="lenguaje" value="css" id="">
        <br><br>
        estas aprendiendo:
        <br>PHP<input type="checkbox" <?php echo $chkphp?> name="chkphp" id="" value="si">
        <br>HTML<input type="checkbox" <?php echo $chkhtml?> name="chkhtml" id="" value="si">
        <br>CSS<input type="checkbox" <?php echo $chkcss?> name="chkcss" id="" value="si">
        <br>Que anime te gusta: <br>

        <select name="lsAnime" id="" >
    
            <option value="">[Ninguna serie]</option>
            <option value="naruto" <?php echo ($lsAnime == 'naruto')?'selected':'';?> >Naruto</option>
            <option value="BL" <?php echo ($lsAnime == 'BL')?'selected':'';?> >ragonBall</option>
            <option value="bleach" <?php echo ($lsAnime == 'bleach')?'selected':'';?> >Bleach</option>
        </select>
        <br>

        ¿Tienes alguna duda?<br>
        <textarea name="txtComen" id="" cols="30" rows="10" >
            <?php echo $txt?>
        </textarea>
        
        <BR></BR><input type="submit" value="enviar informacion">
    </form>
    
</body>
</html>