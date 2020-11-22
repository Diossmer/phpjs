const d = document,w=window
export default function voiceRecognition(){
    const $receiver = d.getElementById("voice-receiver"),
    $emitterBtn = d.getElementById("voice-emitter"),
    $emitter = w.webkitSpeechRecognition || w.SpeechRecognition,
    rec = new $emitter()
    rec.onstart=()=>{
        $receiver.innerHTML=`<b>Grabando...</b>`
    }
    rec.onaudioend=()=>{
        $receiver.innerHTML=""
    }
        rec.onresult=(e)=>{
            const $code = e.resultIndex,
            $text=e.results[$code][0]?e.results[$code][0].transcript: "";
            setTimeout(()=>{
            $receiver.textContent = $text
            },0)
        }
    $emitterBtn.addEventListener("click",(e)=>{
        rec.start()
    })
}