//DATE

document.addEventListener("DOMContentLoaded", function () {
  let date1 = new Date(Date.now());

  console.log(date1);

  let date =
    date1.getDate() +
    " / " +
    (date1.getMonth() + 1) +
    " / " +
    date1.getFullYear() +
    " , " +
    date1.getHours() +
    " : " +
    date1.getMinutes() +
    " : " +
    date1.getSeconds();

  console.log(document.getElementById("date"));
  document.getElementById("date").innerHTML = date;

  /////////////////////////////NAVIGATION//////////////////////////////////////NAVIGATION

  /////////////////////////////WINDOW Infographiste/////////////////////////////WINDOW Infographiste
  let nfgrphst = document.getElementById("nfgrphst");
  let winSize = "width=500, height=900";

  nfgrphst.addEventListener("click", openWindow);

  function openWindow() {
    console.log("toto");
    fenetre = window.open("https://flashblack.fr/", "", winSize);
  }
});
