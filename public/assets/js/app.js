var myCarousel = document.querySelector("#carouselExampleFade");
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 4000,
  wrap: true,
});

function catchAmount(event) {
  let prodeccingfee = (document.getElementById("prodeccingfee").value =
    (event.target.value * 2) / 100);
  let process = (document.getElementById("process").innerHTML = prodeccingfee);
  let donate = (document.getElementById("donate").innerHTML =
    event.target.value); 
}

function addDonate(event) {
  let prodeccingfee = document.getElementById("prodeccingfee").value;  
  let donateVal = document.getElementById("donate").innerHTML;  
   Number(donateVal);
   Number(prodeccingfee); 
  let result = document.getElementById("donate").innerHTML = Number(prodeccingfee) + Number(donateVal)

}
