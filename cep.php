<html>
    <head>
        <script>
            function ola(){
                //window.alert("oi");

                //document.getElementById('cepId').options[document.getElementById('cepId').valueOf()].text;
                var selecFilial = document.getElementById('cepId').value;

                $.ajax({
                    url:"functions.php?type=getCep&selecFilial="+ selecFilial,
                    type: "GET",
                    success:function(result){
                        $('#cepId').val(result);
                    }
                });
            }
        </script>
    </head>
    <body>
        <input type="text" name="cep" id="cepId" onblur="ola()">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>
</html>
