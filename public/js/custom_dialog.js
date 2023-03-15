// * event lstener click ketika di tekan maka logic

$(document).on('click', '.deleteSiswa', function(e) {
    var id = $(this).attr('data-id');
    var dataName = $(this).attr('data-name');
    var url = "/siswa/delete/success/" + id;
    Swal.fire({
        title: 'Are you sure want to delete ' + dataName + '?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
       if(result.isConfirmed){
        window.location.href = url;
       }
      })
});

