$(document).ready(function() {
  // Ketika form disubmit
  $('#bookingForm').submit(function(event) {
    event.preventDefault(); // Menghentikan pengiriman form default

    // Mengambil nilai dari input form
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var service = $('#service').val();
    var date = $('#date').val();
    var time = $('#time').val();

    var formData = {
      name: name,
      email: email,
      phone: phone,
      service: service,
      date: date,
      time: time
    };

    $.ajax({
      type: 'POST',
      url: 'submit_booking.php',
      data: formData,
      dataType: 'json',
      encode: true,
      success: function(response) {
        if (response.success) {
          alert('Booking berhasil! Kami akan menghubungi Anda segera.');
          console.log('Form data:', formData);

          $('#bookingForm')[0].reset();
          var jsonFormData = JSON.stringify(formData);
          console.log('Cookie bookingData:', jsonFormData);
          document.cookie = 'bookingData=' + jsonFormData + '; expires=' + new Date(new Date().getTime() + 24 * 60 * 60 * 1000).toUTCString() + '; path=/';

          alert('Anda akan diarahkan ke jadwal_booking.php');
          window.location.href = 'jadwal_booking.php';
        } else {
          alert('Ada masalah saat melakukan booking. Silakan coba lagi.');
        }
      },
      error: function(xhr, status, error) {
        console.error('AJAX Error: ' + status + ', ' + error);
        alert('Terjadi kesalahan saat mengirim data. Silakan coba lagi.');
      }
    });
  });

  var bookingDataCookie = getCookie('bookingData');
  if (bookingDataCookie) {
    var bookingData = JSON.parse(bookingDataCookie);
    $('#name').val(bookingData.name);
    $('#email').val(bookingData.email);
    $('#phone').val(bookingData.phone);
    $('#service').val(bookingData.service);
    $('#date').val(bookingData.date);
    $('#time').val(bookingData.time);

    alert('Booking berhasil! Kami akan menghubungi Anda segera.');
    console.log('Cookie bookingData:', bookingData);

    alert('Anda akan diarahkan ke jadwal_booking.php');
    document.cookie = 'bookingData=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    window.location.href = 'jadwal_booking.php';
  }

  function getCookie(name) {
    var nameEQ = name + '=';
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      while (cookie.charAt(0) == ' ') {
        cookie = cookie.substring(1, cookie.length);
      }
      if (cookie.indexOf(nameEQ) == 0) {
        return cookie.substring(nameEQ.length, cookie.length);
      }
    }
    return null;
  }
});
