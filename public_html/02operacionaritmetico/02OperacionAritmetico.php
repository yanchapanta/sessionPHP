<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
form>div {
    width: 50%;
    margin: auto;
    display: grid;
    gap: .5rem;
    grid-template-columns: 40% auto 40% 10%;
}

input,
select {
    padding: 1rem;
}
</style>

<body>
    <h1>Realizar una suma de números</h1>
    <form action="02OperacionAritmetico.php" method="POST">
        <div>
            <input name="valor1" type=" text" placeholder="Valor uno">
            <select name="operacion" id="">
                <option value="">--Operación--</option>
                <option value="suma">+</option>
                <option value="resta">-</option>
                <option value="multiplicacion">*</option>
                <option value="division">/</option>
                <option value="modulo">%</option>
            </select>
            <input name="valor2" type="text" placeholder="Valor dos">
            <input type="submit" value="Enviar">
        </div>
    </form>
    <?php        
        $valor1=$_POST['valor1'];
        $valor2=$_POST['valor2'];
        $operacion=$_POST['operacion'];
       
        function calcular($v1=0,$v2=0,$op){
            $resultado=0;
            if(floatval($v1) & floatval($v2) ):
                // echo 'mostar: '.$op;
                switch($op){
                    case 'suma':
                        $resultado=$v1+$v2;
                    break;
                    case 'resta':
                        $resultado=$v1-$v2;
                    break;
                    case 'multiplicacion':
                        $resultado=$v1*$v2;
                    break;
                    case 'division':
                        $resultado=$v1+$v2;
                    break;               
                    case 'modulo':
                        $resultado=$v1%$v2;
                    break;   
                             

                }
            else:
                echo 'Valor incorrecto';
                return;
            endif;
                

            return $resultado;
        }
        echo calcular($valor1,$valor2,$operacion);
        
    ?>
    <div>Respuesta:
        <span>
            <?php echo " ".calcular($valor1,$valor2,$operacion); ?>
        </span>
    </div>


</body>

</html>