<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <style> 
  body {
  margin: 20px 0;
  font-family: 'Lato';
  font-weight: 300;
  font-size: 1.25rem;
  width: 300px;
}

form, p {
  margin: 20px;
}

p.note {
  font-size: 1rem;
  color: red;
}

input, textarea {
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 4px;
  font-family: 'Lato';
  width: 300px;
  margin-top: 10px;
}

label {
  width: 300px;
  font-weight: bold;
  display: inline-block;
  margin-top: 20px;
}

label span {
  font-size: 1rem;
}

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error, textarea.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
}

[type="submit"], [type="reset"], button, html [type="button"] {
    margin-left: 0;
    border-radius: 0;
    background: black;
    color: white;
    border: none;
    font-weight: 300;
    padding: 10px 0;
    line-height: 1;
}
</style>
<body>
<form id="basic-form" action="" method="post">
    <p>
      <label for="name">Name <span>(required, at least 3 characters)</span></label>
      <input id="name" name="name">
    </p>
  <p>
      <label for="age">Your Age <span>(minimum 18)</span></label>
      <input id="age" name="age">
    </p>
    <p>
      <label for="email">E-Mail <span>(required)</span></label>
      <input id="email" name="email">
    </p>
  <p>
    <label for="weight">Weight <span>(required if age over 50)</span></label>
    <input id="weight" name="weight">
    </p>
    <p>
      <input class="submit" type="submit" value="SUBMIT">
    </p>
</form>
<script>

$(document).ready(function() {
  $("#basic-form").validate({
    rules: {
      name : {
        required: true,
        minlength: 3
      },
      age: {
        required: true,
        number: true,
        min: 18
      },
      email: {
        required: true,
        email: true
      },
      weight: {
        required: {
          depends: function(elem) {
            return $("#age").val() > 50
          }
        },
        number: true,
        min: 0
      }
    },
    messages : {
      name: {
        minlength: "Name should be at least 3 characters"
      },
      age: {
        required: "Please enter your age",
        number: "Please enter your age as a numerical value",
        min: "You must be at least 18 years old"
      },
      email: {
        email: "The email should be in the format: abc@domain.tld"
      },
      weight: {
        required: "People with age over 50 have to enter their weight",
        number: "Please enter your weight as a numerical value"
      }
    }
  });
});
</script>


</body>

</html>
$(document).ready(function() {

$('#signval').submit(function(e) {
  e.preventDefault();


  var email = $('#email1').val();
  var password = $('#last_name1').val();

  $(".error").remove();


  if (email.length < 1) {
    $('#email1').after('<span class="error">This field is required</span>');
  } else {
    var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
    var validEmail = regEx.test(email);
    if (!validEmail) {
      $('#email1').after('<span class="error">Enter a valid email</span>');
    }
  }
  if (password.length < 8) {
    $('#last_name1').after('<span class="error">Password must be at least 8 characters long</span>');
  }
});

});
</script>


<script>

$(document).ready(function() {
  $("#signval").validate({
    rules: {
      last_name1 : {
        required: true,
        minlength: 6
      },
   
      email1: {
        required: true,
        email: true
      },
      
    },
    messages : {
      last_name1: {
        minlength: "Name should be at least 6 characters"
        required: "Please enter your email",
      },
    
      email1: {
        email: "The email should be in the format: abc@domain.tld"
        required: "Please enter your email",
      }
   
    }
  });
});
</script>
    <script src="app.js"></script>
    <script>
      const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});