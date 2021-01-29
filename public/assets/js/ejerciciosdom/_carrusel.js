const d = document
export default function slider(){
    const $nextBtn=d.querySelectorAll(".slider-btns .next"),
    $prevBtn=d.querySelectorAll(".slider-btns .prev"),
    $slides=d.querySelectorAll(".slider-slide")
    let i = 0;
    d.addEventListener("click",(e)=>{
        if(e.target===$prevBtn[0]){
            e.preventDefault()
            $slides[i].classList.remove("active");
            i--
            if(i<0){
                i=$slides.length-1
            }
            $slides[i].classList.add("active")
        }
        if(e.target===$nextBtn[0]){
            e.preventDefault();
            $slides[i].classList.remove("active")
            i++
            if(i>=$slides.length){
                i=0
            }
            $slides[i].classList.add("active")
        }
    })
}