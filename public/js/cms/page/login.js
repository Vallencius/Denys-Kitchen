$('#btn-login').on('click', function () {
  jQuery.validator.addMethod("emailstudent", function (value, element) {
    return this.optional(element) || /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(value);
  }, "Email harus menggunakan email student atau email dari UMN"
  );
  $('#form-login').validate({
    rules: {
      email: {
        required: true
      },
      password: {
        required: true
      }
    },
    messages: {
      email: {
        required: "Kamu perlu mengisi email kamu"
      },
      password: {
        required: "Kamu perlu mengisi password kamu"
      }
    }
  });
});