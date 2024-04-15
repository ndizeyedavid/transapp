// JavaScript Document
var clicks = 0;

document.getElementById("clicks").innerHTML = clicks;

$('.like-counter').click(function() {
  clicks += 1;
  document.getElementById("clicks").innerHTML = clicks;
  $('.like-counter').addClass("liked");
});



			
//  Counter while storering
const likeButton = document.getElementById('like-button');
  const likeCountElement = document.getElementById('like-count');

  // Check if like count data exists in localStorage and set the count accordingly
  let likeCount = JSON.parse(localStorage.getItem('likeCount')) || 0;
  likeCountElement.innerText = likeCount;

  // Listen for clicks on the like button and increment the like count
  likeButton.addEventListener('click', () => {
    likeCount++;
    likeCountElement.innerText = likeCount;

    // Store the updated like count in localStorage
    localStorage.setItem('likeCount', JSON.stringify(likeCount));
  });


// create a new `Date` object
      // create a function to update the date and time
      function updateDateTime() {
        // create a new `Date` object
        const now = new Date();

        // get the current date and time as a string
        const currentDateTime = now.toLocaleString();

        // update the `textContent` property of the `span` element with the `id` of `datetime`
        document.querySelector('#datetime').textContent = currentDateTime;
      }

      // call the `updateDateTime` function every second
      setInterval(updateDateTime, 1000);


  // call the `Geolocation
function geoFindMe() {
  const status = document.querySelector("#status");
  const mapLink = document.querySelector("#map-link");

  mapLink.href = "";
  mapLink.textContent = "";

  function success(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;

    status.textContent = "";
    mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
    mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
  }

  function error() {
    status.textContent = "Dear Customer please, allow to retrieve your location !";
  }

  if (!navigator.geolocation) {
    status.textContent = "Geolocation is not supported by your browser";
  } else {
    status.textContent = "Locating…";
    navigator.geolocation.getCurrentPosition(success, error);
  }
}

document.querySelector("#find-me").addEventListener("click", geoFindMe);

