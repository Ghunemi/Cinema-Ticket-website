var index=0;
var photos=[];
var time=2500;
photos[0]='../images/cin.jpg';
photos[1]='../images/pop1.jpg';
photos[2]='../images/lob1.jpg';
 
function slideShow(){
    document.slide.src=photos[index];
    if(index<photos.length-1)
        {
            index++;
        }
    else
        {
            index=0;
        }
    setTimeout("slideShow()",time);
    
   

}
 
window.onload=slideShow;
 
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    
  if ( document.body.scrollTop > 500 )
  {
    document.getElementById("myBtn").style.display = "block";
  }
  else 
  {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
}
function image_map() {
  // The location of Pos
  var Pos = {lat: 30.0320, lng: 31.4085};
  // The map, centered at Pos
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 20, center: Pos});
  // The marker, positioned at Pos
  var marker = new google.maps.Marker({position: Pos, map: map});
}