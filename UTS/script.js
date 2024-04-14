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

    // Membuat objek data untuk dikirimkan
    var formData = {
      name: name,
      email: email,
      phone: phone,
      service: service,
      date: date,
      time: time
    };

    // Mengirim data ke submit_booking.php menggunakan AJAX
    $.ajax({
      type: 'POST',
      url: 'submit_booking.php',
      data: formData,
      dataType: 'json',
      encode: true,
      success: function(response) {
        // Jika pengiriman sukses, tampilkan pesan sukses
        if (response.success) {
          alert('Booking berhasil! Kami akan menghubungi Anda segera.');
          // Reset form setelah sukses
          $('#bookingForm')[0].reset();
        } else {
          // Jika ada error, tampilkan pesan error
          alert('Ada masalah saat melakukan booking. Silakan coba lagi.');
        }
      },
      error: function(xhr, status, error) {
        console.error('AJAX Error: ' + status + ', ' + error);
        alert('Terjadi kesalahan saat mengirim data. Silakan coba lagi.');
      }
    });
  });
});
