//Animation logo:
let xPos = 0;
let yPos = 0;
let angle = 0;

function animate (){
    xPos += 5;
    xPos -= 5;
    angle += .05;
    yPos = Math.round(20 * Math.sin(angle));

    logo.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;

    requestAnimationFrame(animate);
};

animate();

