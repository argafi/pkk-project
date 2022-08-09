$(function () {
  $(".tampilModalTambah").on("click", function () {
    $("#judul-modal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $(".modal-content form").attr("action", "http://pwpb-project.test:8080/public/mahasiswa/tambah");
    $(".modal-content form").trigger("reset");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#judul-modal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-content form").attr("action", "http://pwpb-project.test:8080/public/mahasiswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://pwpb-project.test:8080/public/mahasiswa/getubah",
      data: { id: id },
      method: "POST",
      dataType: "JSON",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
