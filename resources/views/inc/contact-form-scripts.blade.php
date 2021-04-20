<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.0.3/nouislider.js"></script>
<script>
    var rangeslider = document.getElementById('range-slider');
    var updateSliderValue = document.getElementById('slider-value');
noUiSlider.create(rangeslider, {
start: [1000, 10000],
step: 100,
connect: true,
range: {
    'min': 1000,
    'max': 10000
},
tooltips:true,
format: wNumb({
    decimals: 0, // default is 2
    // thousand: '.' // thousand delimiter
    // postfix: ' (US $)', // gets appended after the number
})
});




var nodes = [
document.getElementById('lower-value'), // 0
document.getElementById('upper-value')  // 1
];

// Display the slider value and how far the handle moved
// from the left edge of the slider.
rangeslider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
nodes[handle].innerHTML =  '$ ' + values[handle] ;
$("#budget").val(values)
});



</script>