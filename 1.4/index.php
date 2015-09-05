<!DOCTYPE html>

<html>

<meta charset="UTF-8">
<link rel="stylesheet" href="/stylesheets/index.css">


<body>

  Hello, This is a website made by me, David Harper.
  <br/> As far as I'm concerned, Your name is
  <?php echo $_SERVER['REMOTE_ADDR']; ?>

    <br/>
    <img src="/img/face.jpg" alt="My Face" style="width:304px;height:360px;">
    <br/>
    <br/> Feel free to look around my website.
    <br/> You can <a href="chat">Chat</a>,
    <br> Learn about <a href="infinity">Infinity</a>,
    <br> Or play a broken game of <a href="tictactoe">Tic Tac Toe</a>.
    <br>
    <br> Have Fun!

</body>
<br/><br/>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>
