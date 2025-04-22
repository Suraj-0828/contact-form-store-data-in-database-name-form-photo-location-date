
<script>
    function getLocation() {
      const status = document.getElementById('locationStatus');
      const latInput = document.getElementById('latitude');
      const lonInput = document.getElementById('longitude');

      if (navigator.geolocation) {
        status.innerText = "Getting your location...";
        navigator.geolocation.getCurrentPosition(
          (position) => {
            latInput.value = position.coords.latitude;
            lonInput.value = position.coords.longitude;
            status.innerText = "Location captured ✔️";
          },
          (error) => {
            status.innerText = "Location access denied ❌";
            alert("You must allow location access to submit the form.");
          }
        );
      } else {
        status.innerText = "Geolocation not supported ❌";
        alert("Your browser does not support location sharing.");
      }
    }

    function validateLocation() {
      const lat = document.getElementById('latitude').value;
      const lon = document.getElementById('longitude').value;

      if (!lat || !lon) {
        alert("Please share your location before submitting.");
        return false;
      }

      return true;
    }
  </script>