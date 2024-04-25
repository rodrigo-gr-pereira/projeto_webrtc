<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Video Chat</title>
    <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
</head>
<body>

<style type="text/css">
    .welcome{
        text-align: center;
        padding: 10px 0;
    }

    body{
        display: flex;
        height: 100vh;
        margin: 0;
        align-items: center;
        justify-content: center;
        padding: 0 50px;
    }

    video{
        max-width: calc(50% - 100px);
        margin: 0 50px;
        box-sizing: border-box;
        border-radius: 2px;
        padding: 0;
        border: 1px solid #ccc;
    }

    .title{
        position: fixed;
        top: 10px;
        left: 50%;
        transform: translate(-50%, 0);
        font-size: 20px;
    }
</style>

    <div class="title">
        <h2>Bem-vindo ao nosso chat em tempo real</h2>
    </div><!--title-->

    <video id="localVideo" autoplay muted></video>
    <video id="remoteVideo" autoplay muted></video>
    
    <script>
        //Inicio ScaleDrone e WebRTC
        if(!location.hash){
            location.hash = Math.floor(Math.random() * 0xFFFFFF.toString(16));
        }

        const roomHash = location.hash.substring(1);

        const drone = new ScaleDrone('yiS12Ts5RdNhebyM');

        const roomName = 'observable-'+roomHash;

        const configuration = {

            iceServers:[
                {
                    urls: 'stun:stun.l.google.com:19302'
                }
            ]
        }

        let room;
        let pc;

        let number = 0;

        function OnSucess(){};

        function onError(error){
            console.log(error);
        };

        drone.on('open', error => {
            if(error)
                return console.log(error);

            room = drone.subscribe(roomName);

            room.on('open', error=>{
                //se acontecer erro, capturamos aqui!
            });

            room.on('members', members=>{
                console.log("Conectado!");

                console.log("Conexões abertas: "+ members.length);
            })
            
        });
    </script>
</body>
</html>