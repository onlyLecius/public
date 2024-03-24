<div>
    <p id="demo"></p>
    QRCode Pix
    <script>
        var interval;
        var second = localStorage.getItem('second');
        let minutes = localStorage.getItem('minutes');
        if (second == null && minutes == null) {
            second = 0;
            minutes = 10;
            localStorage.setItem('second', second);
            localStorage.setItem('minutes', minutes);
        }

        if(!checkComplete()){
            interval = setInterval(checkComplete, 1000);
        }

        function checkComplete() {

            if (minutes == 0 && second == 0) {
                localStorage.clear();
                clearInterval(interval);
                window.location.reload();

            } else {

                if (second > 0 && second < 60) {
                    second = second - 1;
                    localStorage.setItem('second', second);
                } else if (second == 0) {
                    second = 59;
                    minutes = minutes - 1;
                    localStorage.setItem('second', second);
                    localStorage.setItem('minutes', minutes);
                }

                var segundoFormatado = second.toLocaleString('en-US', {
                    minimumIntegerDigits: 2,
                    useGrouping: false
                });

                document.getElementById("demo").innerHTML = `${minutes}:${segundoFormatado}`

            }
        }

        document.onbeforeunload = function(){
            localStorage.setItem('second', second);
            localStorage.setItem('minutes', minutes);
        }
    </script>
</div>

<?php

use chillerlan\QRCode\QRCode;
$imgSrc = (new QRCode)->render($pix);

?>

<img height="350px" src='{{ $imgSrc }}' />

<?php
    echo "<br>";
    echo "Pix Copia Cola";
    echo "<br>";
    echo $pix;
    echo "<br><br>";
?>
<a id='depCopiaCodigo' href='javascript:void(0);' data-clipboard-text='{{ $pix }}' onclick='copyToClipboard(); alert("Código Pix Copia e Cola Copiado!")'  type="submit" class='primary-button dark w-button'>Código Pix Copia e Cola</a>

<p>Ao depositar você concorda com os
    <a href="#">termos de serviço</a>.
</p>
