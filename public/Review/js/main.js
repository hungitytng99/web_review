let rateCircles = document.getElementsByClassName('rate');

for (let i = 0; i < rateCircles.length; i++) {
    if (rateCircles[i].textContent >= 7) {
        rateCircles[i].classList.add('green');
    } else if (rateCircles[i].textContent >= 4) {
        rateCircles[i].classList.add('yellow');
    } else {
        rateCircles[i].classList.add('red');
    }
}
