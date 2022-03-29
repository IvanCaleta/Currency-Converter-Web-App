
<?php
    session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Pretvarač valuta</title>
    <link rel="stylesheet" href="Styles/converter_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
</head>
<body>
    <header style="background-color: white;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding:0.5em;

    position: fixed;
    top: 0;
    left: 0;
    right: 0;">
        <label style="font-size:25px;
        color:forestgreen;
        border: radius 5px;;
        ">
        Dobrodošli <?php echo $_SESSION["ime"] ?></label>
        <label style="font-size: 25px;
        background:forestgreen;
        border-radius: 5px;
        ">
        <a href="login.php" style="color: white; text-decoration:none; padding:0.5em;">Logout</a></label>
    </header>


<main>
<div class="wrapper">
<div class="container">
 
    <header> Pretvarač valuta</header>
    <form action="#">
        <div class="iznos">
            <p>Unesi iznos</p>
            <input name="iznos" type="text" value="1">
        </div>
        <div class="drop-list">
            <div class="iz">
                <p>Iz</p>
                <div class="select-box">
                    <img src="https://countryflagsapi.com/png/us" alt="flag">
                    <select>
    
                    </select>
                </div>
            </div>
            <div class="icon">
                <i class="fas fa-exchange-alt"></i>
            </div>
            <div class="u">
                <p>U</p>
                <div class="select-box">
                    <img src="https://countryflagsapi.com/png/hr" alt="flag">
                    <select>
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="pretvori"></div><br>
        <button><p>Pretvori</p></button>
        
    </form>
</div>
</div>
</main>

<script src="Scripts/countries.js"></script>
<script src="Scripts/script.js"></script>


</body>
</html>
