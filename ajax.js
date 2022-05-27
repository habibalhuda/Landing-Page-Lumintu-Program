$(document).ready(function () {
  $("#form").validate({
    rules: {
      name: "required",
      email: "required",
      subject: "required",
      message: "required",
    },
    errorElement: "span",
    messages: {
      name: "Harap masukkan nama kamu",
      email: "Harap masukkan email kamu",
      subject: "Harap masukkan subject kamu",
      message: "Harap masukkan pesan kamu",
    },
    submitHandler: function (form) {
      var dataparam = $("#form").serialize();

      $.ajax({
        type: "POST",
        async: true,
        url: "send_email.php",
        data: dataparam,
        datatype: "json",
        cache: true,
        global: false,
        beforeSend: function () {
          $("#loader").show();
        },
        success: function (data) {
          if (data == "success") {
            console.log(data);
          } else {
            $(".no-config").show();
            console.log(data);
          }
        },
        complete: function () {
          $("#loader").hide();
        },
      });
    },
  });
});
