$(document).ready(function () {
  $("form[name='register-form']").validate({
    rules: {
      name: {
        required: true,
      },
      username: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      mobile: {
        required: true,
        rangelength: [10, 12],
        number: true,
      },
      password: {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      name: "Please enter Name.",
      email: {
        required: "Please enter Email Address.",
        email: "Please enter a valid Email Address.",
      },
      mobile: {
        required: "Please enter Contact.",
        rangelength: "Contact should be 10 digit number.",
      },
      password: {
        required: "Please enter Password.",
        minlength: "Password must be at least 8 characters long.",
      },
    },
    submitHandler: function (form) {
      form.submit();
    },
  });
});
