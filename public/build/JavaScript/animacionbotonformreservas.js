let button = document.getElementById("button");
button.addEventListener('click',function(){
    for(var i = 0; i < 50; i++){
        let bubble = document.createElement('i');
        bubble.classList.add("bubbles");

        const bubblePosX = (Math.random()  - 0.5) * window.innerWidth;
        const bubblePosY = (Math.random()  - 0.5) * window.innerHeight;
        bubble.style.setProperty("--x",bubblePosX + "px");
        bubble.style.setProperty("--y",bubblePosY + "px");

        const durationAnimated = Math.random() * 2 + 0.5;
        bubble.style.animation = `animacionBubble ${durationAnimated}s ease-out forwards`;

        const randomPos = Math.random() * 8 +2;
        bubble.style.width = randomPos + "px";
        bubble.style.height = randomPos + "px";
        document.body.appendChild(bubble);
        setTimeout(function(){
            bubble.remove();
        },2000)
    }
})