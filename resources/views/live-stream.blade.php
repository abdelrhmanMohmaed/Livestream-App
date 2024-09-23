<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Stream</title>
</head>

<body>
    <h1>Agora Live Stream</h1>
    <div id="video-container" style="width: 640px; height: 480px; border: 1px solid black;"></div>
    <button onclick="startLiveStream()">Start Live Stream</button>
    
    <a >Copy this link: {{ url('view-stream') }}</a>

    <script src="https://cdn.agora.io/sdk/release/AgoraRTC_N-4.13.0.js"></script>
    <script>
        const client = AgoraRTC.createClient({
            mode: "rtc",
            codec: "vp8"
        });

        let localTracks = {
            videoTrack: null,
            audioTrack: null
        };

        const options = {
            appId: '694e412f85bf4feba709edf9d091cb6d',
            channel: 'test-channel', 
            token: null
        };

        async function startLiveStream() {
            client.on('user-published', async (user, mediaType) => {
                await client.subscribe(user, mediaType);
                if (mediaType === 'video') {
                    const remoteVideoTrack = user.videoTrack;
                    const videoContainer = document.getElementById('video-container');
                    remoteVideoTrack.play(videoContainer);
                }
            });

            await client.join(options.appId, options.channel, options.token);
            localTracks.videoTrack = await AgoraRTC.createCameraVideoTrack();
            await client.publish([localTracks.videoTrack]);
            localTracks.videoTrack.play('video-container');
        }
    </script>
</body>

</html>
