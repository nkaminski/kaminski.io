var added = 1;
window.onload = function() {
  document.getElementById("blink").innerHTML += ' ';
  blink();
};
function blink() {
  if(added == 0){
    document.getElementById("blink").innerHTML = document.getElementById("blink").innerHTML.slice(0,-1);
    document.getElementById("blink").innerHTML += ' ';
    added = 1;
  }
  else{
    document.getElementById("blink").innerHTML = document.getElementById("blink").innerHTML.slice(0,-1);
    document.getElementById("blink").innerHTML += '&#x258A;';
    added = 0;
  }
  window.setTimeout(blink,500);
}
