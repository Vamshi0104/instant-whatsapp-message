<html lang="en">
   <head>
      <title>Inst Whatsapp Message</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="area" >
         <br><br>
         <h1 align="center" style="font-family:cursive;color:white;font-size:32px;">Instant WhatsApp Message</h1>
         <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
         </ul>
         <center>
            <form id="form">
               <input id="phoneNumber" type="tel" style="font-size:17px;font-weight:600;" pattern="[0-9]{4,14}" title="Example: 919234566789 ~ India" placeholder="CountryCode + Phone No" minlength="4" maxlength="14" required autofocus autocomplete="false">
               <input type="text" id="textBox" minlength="1" maxlength="80" placeholder="Your Message" required><br><input type="button" value="SEND" id="submitButton"><br>
            </form>
         </center>
      </div >
      <div class="footer">
         <footer style="color:black;font-weight:600;">&copy; Copyrights 2021 Vamshi Krishna Madhavan</footer>
      </div>
      <script src="js/main.js"></script>
   </body>
</html>