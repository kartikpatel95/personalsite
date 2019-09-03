var timeline = document.getElementsByClassName('timeline-content');

let i = 0;
const intervalId = setInterval(function() {
    timeline[i].className += " loaded";
    i++;
    if (i >= timeline.length) {
        clearInterval(intervalId);
    }
}, 500);