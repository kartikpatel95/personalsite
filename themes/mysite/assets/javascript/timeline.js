var timeline = document.getElementsByClassName('timeline-content');

if(timeline[0]) timeline[0].className += " loaded";

let i = 1;
const intervalId = setInterval(function() {
    timeline[i].className += " loaded";
    i++;
    if (i >= timeline.length) {
        clearInterval(intervalId);
    }
}, 500);