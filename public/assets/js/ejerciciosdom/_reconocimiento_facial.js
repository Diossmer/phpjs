const d = document,
    n = navigator,
    $video = d.getElementById('video'),
    $section = d.getElementById("seccion17")
export default function faceRecognition() {
    const startVideo=()=>{
        n.mediaDevices.enumerateDevices()
        .then(devices =>{
            // console.log(devices)
            if(Array.isArray(devices)){
                devices.forEach(device =>{
                    if(device.kind === 'videoinput'){
                        // console.log(device)
                        if(device.label.includes('TOSHIBA')){
                            n.getUserMedia({
                                video:{
                                    deviceId:device.deviceId
                                }},
                                stream => video.srcObject = stream,
                                // error => console.error(error)
                            )
                        }
                    }
                })
            }
        })
    }
    Promise.all([faceapi.nets.tinyFaceDetector.loadFromUri('../../public/assets/js/face-api/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('../../public/assets/js/face-api/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('../../public/assets/js/face-api/models')]).then(startVideo)
    $video.addEventListener('play',async()=>{
        const canvas = faceapi.createCanvasFromMedia($video),//video
        canvasSize={
            width:video.width,
            height:video.height
        }
        faceapi.matchDimensions(canvas,canvasSize)
        $section.appendChild(canvas);
        setInterval(async() => {
            const detentions = await faceapi.detectAllFaces(video,new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks(),
            resizedDetections = faceapi.resizeResults(detentions, canvasSize)
            canvas.getContext('2d').clearRect(0,0,canvas.width,canvas.height)
            faceapi.draw.drawDetections(canvas,resizedDetections)
            faceapi.draw.drawFaceLandmarks(canvas,resizedDetections)
            /* resizedDetections.forEach(detentions=>{
                const {age,gender,genderProbability} = detentions
                new faceapi.draw.DrawTextField([
                    `${parseInt(age,10)} years`,
                    `${gender} (${parseInt(genderProbability*100,10)})`,
                ],detentions.detentions.box.topRight).draw(canvas)
            }) */
        }, 3000);
    })
}
// https://www.youtube.com/watch?v=aGecIY04ymQ&ab_channel=MatheusCastiglioni