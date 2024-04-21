<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

  <style>#absoluteCenteredDiv{position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;width:50%;height: 50%;text-align: center;}</style>
  <script src="https://cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdn.tutorialjinni.com/notify/0.4.2/notify.min.js"></script>

  <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('a3b74a80e97458162753', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel-' + {{ session()->get("badge") }});
    channel.bind('my-event', function(data) {
      $.notify(data.message,{position:"bottom right",className:"info"});
    });
  </script>
</head>
<body>
  <h1>Test notif after assign task</h1>
  <h2>
    Assign task untuk Alex Sirait (200431)
  </h2>
</body>