var index=0;
var photos=[];
var waitingTime=2500;
photos[0]='../images/8.jpg';
photos[1]='../images/2.jpg';
photos[2]='../images/3.jpg';
photos[3]='../images/4.jpg';
photos[4]='../images/5.jpg';
photos[5]='../images/6.jpg';
photos[6]='../images/7.jpg';
photos[7]='../images/1.jpg';

function slideShow(){
    
    document.slide.src=photos[index];
    if( index<photos.length - 1 )
        {
            index++;
        }
    else
        {
            index=0;
        }
    setTimeout("slideShow()",waitingTime);
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