<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Live Stream</title>
</head>
<body>
    <h1>Watch Agora Live Stream</h1>
    <div id="video-container" style="width: 640px; height: 480px; border: 1px solid black;"></div>
    
    <script src="https://cdn.agora.io/sdk/release/AgoraRTC_N-4.13.0.js"></script>
    <script>
        const client = AgoraRTC.createClient({ mode: "rtc", codec: "vp8" });

        const options = {
            appId: '694e412f85bf4feba709edf9d091cb6d',
            channel: 'test-channel',
            token: null
        };

        async function joinLiveStream() {
            client.on('user-published', async (user, mediaType) => {
                await client.subscribe(user, mediaType);
                if (mediaType === 'video') {
                    const remoteVideoTrack = user.videoTrack;
                    const videoContainer = document.getElementById('video-container');
                    remoteVideoTrack.play(videoContainer);
                }
            });

            await client.join(options.appId, options.channel, options.token);
        }

        window.onload = joinLiveStream;
    </script>
</body>
</html>
