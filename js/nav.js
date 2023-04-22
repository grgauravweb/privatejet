// $(window).scroll(function(){
//     $("nav").hide("nav2", $(this).scrollTop() > 50);
//     $('#nav2').hide();
//  });
//  $(window).scroll(function() {
//      if ($(this).scrollTop() < 50) {
//        $('#nav1').hide();
//      }
//    });
//on scroll play video
window.addEventListener('load', videoScroll);
window.addEventListener('scroll', videoScroll);

function videoScroll() {

  if ( document.querySelectorAll('video[autoplay]').length > 0) {
    var windowHeight = window.innerHeight,
        videoEl = document.querySelectorAll('video[autoplay]');

    for (var i = 0; i < videoEl.length; i++) {

      var thisVideoEl = videoEl[i],
          videoHeight = thisVideoEl.clientHeight,
          videoClientRect = thisVideoEl.getBoundingClientRect().top;

      if ( videoClientRect <= ( (windowHeight) - (videoHeight*.5) ) && videoClientRect >= ( 0 - ( videoHeight*.5 ) ) ) {
        thisVideoEl.play();
      } else {
        thisVideoEl.pause();
      }

    }
  }

}
//on scroll change nav bar
   $(window).scroll(function() {
    if ($(this).scrollTop()>50)
     {
      $('#nav1').hide();
      $('#nav2').show();
      
     }
 });
 $(window).scroll(function() {
  if ($(this).scrollTop()<50)
   {
    $("#nav2").removeClass("hide");
    $('#nav1').show();
    $('#nav2').hide();
   }
});
//password match
$(document).ready(function(){
          
  $("#confirm_password").bind('keyup change', function(){

    check_Password( $("#password").val(), $("#confirm_password").val() )
    
    
  })

  // $("#sign_in_btn").click(function(){

  //   check_Password( $("#password").val(), $("#confirm_password").val() )

  // })
})

function check_Password( Pass, Con_Pass){

  if(Pass === ""){

    

  }else if( Pass === Con_Pass){

    $("#sign_in_btn").removeAttr("onclick")
    $('#confirm_password_msg').show()
    $("#confirm_password_msg").html('<div class="alert alert-success">Password matched</div>')

    setTimeout(function() {
        $('#confirm_password_msg').fadeOut('slow');
    }, 3000);

  }else{
    $("#confirm_password").focus()
    $('#confirm_password_msg').show()
    $("#confirm_password_msg").html('<div class="alert alert-danger">Password didnot matched</div>')

    setTimeout(function() {
        $('#confirm_password_msg').fadeOut('slow');
    }, 3000);

  }

}
//fetch airport list
const searchInput = document.getElementById("search");
const airportList = document.getElementById("airportList");

const searchairport = async (searchBox) => {
  // get json
  const res = await fetch("https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json");
  const airports = await res.json();

  // get data
  let fits = airports.filter((airport) => {
    const regex = new RegExp(`^${searchBox}`, "gi");
    return (
      airport.country.match(regex) ||
      airport.name.match(regex) ||
      airport.city.match(regex) ||
     airport.iata_code.match(regex)
    );
  });

  if (searchBox.length === 0) {
    fits = [];
    airportList.innerHTML = "";
  }

  outputHtml(fits);
};

// show results in HTML
const outputHtml = (fits) => {
  if (fits.length > 0) {
    const airportFits = fits
      .map(
        (fit) =>
          `<option name="${fit.iata_code}">
          <div class="airport-search__result">
            <div class="airport__id">
              <div class="airport__iata">${fit.iata_code}</div>
              <h3 class="airport__name">${fit.name}</h3>
            </div>

            <div class="airport__location">
              <p class="airport__city">${fit.city}, </p> 
              <p class="airport__country">${fit.country}</p>
            </div>
          </div>
          </option><br>`
      )
      .join("");
    airportList.innerHTML = airportFits;
  }
};

searchInput.addEventListener("input", () => searchairport(search.value));

const searchInput2 = document.getElementById("search2");
const airportList2 = document.getElementById("airportList2");

const searchairport2 = async (searchBox) => {
  // get json
  const res = await fetch("https://raw.githubusercontent.com/algolia/datasets/master/airports/airports.json");
  const airports = await res.json();

  // get data
  let fits = airports.filter((airport) => {
    const regex = new RegExp(`^${searchBox}`, "gi");
    return (
      airport.country.match(regex) ||
      airport.name.match(regex) ||
      airport.city.match(regex) ||
     airport.iata_code.match(regex)
    );
  });

  if (searchBox.length === 0) {
    fits = [];
    airportList2.innerHTML = "";
  }

  outputHtml2(fits);
};

// show results in HTML
const outputHtml2 = (fits) => {
  if (fits.length > 0) {
    const airportFits = fits
      .map(
        (fit) =>
          `<option name="${fit.iata_code}">
          <div class="airport-search__result">
            <div class="airport__id">
              <div class="airport__iata">${fit.iata_code}</div>
              <h3 class="airport__name">${fit.name}</h3>
            </div>

            <div class="airport__location">
              <p class="airport__city">${fit.city}, </p> 
              <p class="airport__country">${fit.country}</p>
            </div>
          </div>
          </option><br>`
      )
      .join("");
    airportList2.innerHTML = airportFits;
  }
};

searchInput2.addEventListener("input", () => searchairport2(search2.value));
