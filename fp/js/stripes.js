//Making stripes
var colors = ['#0077c8','#c8102e', '#111', '#fedd00', '#43b02a'];   //array holds the five hex values of colors

for (var i = 0; i < colors.length; i++){                            //loop that creates a div of a color and appends it to the "stripe container"
    var stripe = document.createElement('div');
    stripe.style.backgroundColor = colors[i];
    // stripe.style.height = '3vw';
    if (window.innerWidth < 1024){
        stripe.style.height = '3vw';
    }else{
        stripe.style.height = '1vw';
    }
    var stripeContainer = document.getElementById('stripes');
    stripeContainer.appendChild(stripe);
};