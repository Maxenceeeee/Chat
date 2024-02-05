<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Chat</title>
    <style>
*{
    margin: 0;
    padding:0;
    box-sizing: border-box;
    font-family: sans-serif;
    overflow: hidden;
}

body{
    height: 100vh;
}

#messages{
 
    overflow-y: scroll;
    scrollbar-width: thin;
    border-radius: 10px;
    border: 1px solid #1f1d1d;
    height: 350px;
    padding: 10px;
    margin-left: 33%;
    margin-right: 34%;
    margin-top: 4%;
    word-wrap: break-word;  
    
}
 

</style>
</head>
<body>
    <div id="messages"></div>
    <form action="">
        <input id="msg" autocomplete="off" /> <button>Envoyer</button>
    </form>
    
    <script>
const form = document.querySelector('form');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const msgText = document.querySelector('#msg').value;

  const newMsg = document.createElement('p');
  newMsg.textContent = msgText;

  const messages = document.querySelector('#messages');
  messages.appendChild(newMsg);

  document.querySelector('#msg').value = '';
});

</script>

</body>
</html>
