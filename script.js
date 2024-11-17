var typed = new Typed('#element', {
    strings: [' Web-Developer ,', ' Designer , ',' Frontend ,'],
    typeSpeed: 50,
  });

  var tablinks = document.getElementsByClassName("tab-links");
  var tabcontents = document.getElementsByClassName("tab-contents");

  function opentab(tabname) {
  // Remove active classes from all tabs
  for (tablink of tablinks) {
      tablink.classList.remove("active-link");
  }
  for (tabcontent of tabcontents) {
      tabcontent.classList.remove("active-tab");
  }
  event.currentTarget.classList.add("active-link");
  document.getElementById(tabname).classList.add("active-tab")

  }


  //close and open menu

  var sidemenu=document.getElementById("sidemenu");

  function openmenu(){
    sidemenu.style.right="0";
  }

  function closemenu(){
    sidemenu.style.right="-200px";
  }
