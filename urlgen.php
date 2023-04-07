<!DOCTYPE html>
<html>
<head>
    <title>Buat Undangan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <style>
        body{
          font-family: 'Open Sans', sans-serif;
          background:#3498db;
          margin: 0 auto 0 auto;  
          width:100%; 
          text-align:center;
          margin: 20px 0px 20px 0px;   
        }
        p{
          font-size:12px;
          text-decoration: none;
          color:#ffffff;
        }
        h1{
          font-size:1.5em;
          color:#525252;
        }
        .box{
          background:white;
          width:300px;
          border-radius:6px;
          margin: 0 auto 0 auto;
          padding:0px 0px 70px 0px;
          border: #2980b9 4px solid; 
        }
        .username{
          background:#ecf0f1;
          border: #ccc 1px solid;
          border-bottom: #ccc 2px solid;
          padding: 8px;
          width:250px;
          color:#AAAAAA;
          margin-top:10px;
          font-size:1em;
          border-radius:4px;
        }
        .button{
          background:#2ecc71;
          width:125px;
          padding-top:5px;
          padding-bottom:5px;
          color:white;
          border-radius:4px;
          border: #27ae60 1px solid;
          margin-top:20px;
          margin-bottom:20px;
          float:left;
          margin-left:88px;
          font-weight:800;
          font-size:0.8em;
        }
        .button:hover{
          background:#2CC06B; 
        }
        .fpwd{
            color:#f1c40f;
            text-decoration: underline;
        }
       #absoluteCenteredDiv{
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width:400px;
            height: 300px;
            text-align: center;
       }
    </style>
</head>
<body>
    <div id="absoluteCenteredDiv">
        <form method="get">
            <div class="box">
                <h1>Undang Untuk</h1>
                <input class="username" name="pria" type="text" placeholder="bapak">
                <input class="username" name="wanita" type="text" placeholder="ibu">
                <input class="username" name="notlp" type="text" placeholder="857xxx">
              <input type="submit" class="button" ></input>
            </div>
        </form>
        <?php
if(isset($_GET['pria']) && isset($_GET['wanita'] )&& isset($_GET['notlp'] )) {
   $nama = isset($_GET['pria']) && !empty($_GET['pria']) ? urlencode($_GET['pria']) : "pasangan";
   $umur = isset($_GET['wanita']) && !empty($_GET['wanita']) ? urlencode($_GET['wanita']) : "pasangan";
   $kontak = isset($_GET['notlp']) && !empty($_GET['notlp']) ? urlencode($_GET['notlp']) : "xxxxx";
   
  $url = "https://api.whatsapp.com/send?phone=62$kontak&text=" .
         urlencode("Assalamu'alaikum Wr. Wb\nBismillahirahmanirrahim.\n\nYth.  ".str_replace("+"," ",$nama)." & ".str_replace("+"," ",$umur)." \n\nTanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami:\n\nCaca & Fikri\n\nBerikut link undangan kami untuk info lengkap dari acara bisa kunjungi:\n\nhttps://salma.cleverapps.io/index.php?pria=$nama&wanita=$umur\n\nMerupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\nMohon maaf perihal undangan hanya di bagikan melalui pesan ini. Terima kasih banyak atas perhatiannya.\n\nWassalamu'alaikum Wr. Wb.\nTerima Kasih");
         header("Location: $url");;
}
?>
     
    
<script>
function copyToClipboard(text) {
  var tempInput = document.createElement("input");
  tempInput.value = text;
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
  alert("URL telah disalin ke clipboard.");
}
</script>  
</body>
</html>

<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Generator URL</title>
    <script src="./js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="C:\wamp64x\www\revis\wedd\css\glanz_style.css" />
  </head>
  
  <body>

    <form method="get">
      <label for="pria">Pria:</label>
      <input type="text" name="pria" id="pria">
      <br>
      <label for="wanita">Wanita:</label>
      <input type="text" name="wanita" id="wanita">
      <br>
      <input type="submit" value="Generate URL">
    </form>
    


  </body>
</html> -->
