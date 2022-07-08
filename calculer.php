<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculer</title>
</head>
<body>
    <form method="post">
        <h1>calculatrice</h1>
            <input name="a" size="5">
        <select name="par">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
         </select>
        
            <input name="b" size="5">
            <br>
            <input type="submit"name="valider" value="valider">
            <input type="reset" value="vider">
            
    

    </form>
    
</body>
</html>
<?php
if (isset($_POST['vider']))
{
    if(!empty($_POST['a'])&& !empty($_POST['b'])&& !empty($_POST['par']))
    {   $n1=$_POST['a'];
        $n2=$_POST['b'];
         $opr=$_POST['par'];
         switch($opr)
            {
             case'+':$c=$n1+$n2 ; break;
             case'-':$c=$n1-$n2 ; break;
             case'*':$c=$n1*$n2 ; break;
             case'/':$c=$n1/$n2 ; break;
            }
            echo "la resultat est : $c" ;
    }
}

?>