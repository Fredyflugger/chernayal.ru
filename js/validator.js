// Document is ready
$(document).ready(function () {
    let usernameError = false
    let emailError = false
    // Validating Name
    $("#formName").change(function() {
        nameValidation()
    })

    function nameValidation() {
        let nameValue = $("#formName").val()
        let regex = /^[A-Za-zА-Яа-яЁё\s-]+$/u
        $("#formName").removeClass("errorInput")
        if (nameValue.length == "") {
            $("#nameError").html("Поле 'Имя' обязательно к вводу")
            $("#formName").addClass("errorInput")
            return false
        } else if (nameValue.length < 2 || nameValue.length > 40) {
            $("#nameError").html("Имя должно быть не меньше 2х символов и не больше 40")
            $("#formName").addClass("errorInput")
            console.log("object");
            return false
        } else  if (!regex.test(nameValue)) {
            $("#nameError").html("Поле 'Имя' должно содержать только буквы, пробелы и дефис")
            $("#formName").addClass("errorInput")
            return false
        } else {
            $("#nameError").html("")
            $("#formName").removeClass("errorInput")
            return true
        }
    }

    // Validating Email
    $("#formEmail").change(function() {
        emailValidation()
    })

    function emailValidation() {
        let emailValue = $("#formEmail").val()
        let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/
        $("#formEmail").removeClass("errorInput")
        if (emailValue.length == "") {
            $("#emailError").html("Поле 'Email' обязательно к вводу")
            $("#formEmail").addClass("errorInput")
            return false
        } else if (!regex.test(emailValue)) {
            $("#emailError").html("Неверный адрес почты")
            $("#formEmail").addClass("errorInput")
            return false
        } else {
            $("#emailError").html("")
            $("#formEmail").removeClass("errorInput")
            return true
        }
    }

    $("#close").click(function() {
        $("#modal").hide()
    })
    $(window).click(function(event) {
        if (event.target.id === "modal") {
            $("#modal").hide()
        }
      })

    //Submit Form
    $("#emailForm").submit(function(event) {
        event.preventDefault()
        usernameError = nameValidation()
        emailError = emailValidation()
        if (usernameError === true && emailError === true) {
            $.post('/mail', {
                // Sending Form data
                name: $(this).find('input[name="name"]').val(),
                email: $(this).find('input[name="email"]').val(),
                referral: $(this).find('input[name="referral"]').val(),
                textarea: $(this).find('textarea[name="textarea"]').val(),
            }, (response) => {
                // Response from PHP back-end
                phpResp = JSON.parse(response)
                if (phpResp["error"] == "") {
                    $("#formName").val("")
                    $("#formEmail").val("")
                    $("#formRef").val("")
                    $("#formMsg").val("")
                    $("#modal-content p").html(phpResp["success"]).addClass("success")
                    $("#modal").show()
                } else {
                    $("#modal-content p").html(phpResp["error"]).addClass("error")
                    $("#modal").show()
                }
            });

        return false
        }
        
    })
})
