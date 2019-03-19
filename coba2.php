 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    
</head>
<body> 
<form method="POST" action="" name ="form">
<input type="text" name="nama" id="nama"
        placeholder="Inputkan nama">
        <span id="error_nama"></span>
        <br>
        <input type="text" name="nim" id="nim"
        placeholder="Inputkan nim">
        <span id="error_nim"></span>
        <br>
        
        <input type="button" onclick="kirim()" value = "kirim">

        <br>

    </form>
    <?php
    if (isset($_POST["nama"]) && $_POST["nim"]) {
        echo "<br>Nama : ".$_POST["nama"];
        echo "<br>NIM : ".$_POST["nim"];
    }

    ?>

    <script>
        function kirim () {
            var form =
            document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;

            if(nama != " any " nim != "") {
                form[0].submit();
            }
            else {
                if (nama == ""){
                document.getElementByid
                ("error_nama").innerHTML = "Nama jangan dikosongkan";
            }

            if (nim == ""){
                document.getElementByid
                ("error_nim").innerHTML = "NIM jangan dikosongkan";
            }
        }
        }
    
    </script>
</body>
</html>