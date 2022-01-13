nombre de la base de date_offset_get
contraseña
E|M/{O35Wi\h9~IX
<?php
        /*
        $string ='hola munso';
        echo 'hola';
        // comillas doble solo cuando vamos ha usar variables
        echo "Hola $string  <br>";
        $int = 17;
        // evalua que sea un nuemro
        // para validar floatval(),intval()
        if (intval($int)) {
            echo "<button onclick='alert('soy alert')' type='button' style='padding:1.5rem;background:green;color:white'>Soy un
            boton</button>";
        }else{        
            echo '<h1>Retorna false</h1>';
        }
        
        */
    
    ?>
<?php
        // $int=2;
        // $string=3;
        // function sumar($val1,$val2){
        //     if (intval($val1) & intval($val2) ) {
        //         # code...
        //         $sumar=$val1+$val2;
        //         echo 'La suma es: '.$sumar;
        //     }else{
        //         echo "No se puede sumar";
        //     }
        // }
        // sumar($int,$int);
        // /****************************** */
        // function nota($val){
            // if ($val >= 80 & $val<80):
            //      echo 'Su nota es C';
            // elseif($val >=100):
            //     echo "resultado";
            // else:            
            //  echo 'Strign';
            // endif;

            
        //     if ($val >= 80 & $val< 90):
        //         echo 'Su nota es C';
        //     endif;
            
        //     if ($val >= 90 & $val< 100):
        //         echo 'Su nota es C';
        //     endif;
        // }
        // $calificacion =85;
        // nota($calificacion);
    ?>
<?php
        $int=2;
        $string=3;
        function sumar($val1,$val2){
            if (intval($val1) & intval($val2) ) {
                # code...
                $sumar=$val1+$val2;
                echo 'La suma es: '.$sumar;
            }else{
                echo "No se puede sumar";
            }
        }
        sumar($int,$int);
        /****************************** */
        function nota($val){
            if ($val >= 80 & $val<80):
                echo 'A';
            else:
            echo 'Strign';
            endif;


            
            
            if ($val >= 80 & $val< 90):
                echo 'B';
            endif;
            
            if ($val >= 90 & $val<= 100):
                echo 'C';
            endif;
        }
        $calificacion =100;
        $resultado=nota($calificacion);
        echo $resultado;
    ?>

<br>
<button onclick="alert('soy alert')" type="button" style="padding:1.5rem;background:green;color:white">Soy un
    boton</button>