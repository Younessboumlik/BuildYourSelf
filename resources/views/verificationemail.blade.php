<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Verification Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container bg-info w-25">
        <h2 class="text-center mt-lg-5" style="margin-top: 40%!important;">Code Verification Form</h2>
        <form method="post" action="/verificationemail">
          @csrf
            <div class="form-group">
                <label for="code">Enter Verification Code:</label>
                <input type="text" class="form-control" id="code" required name = "codeinput">
            </div>
            <button type="submit" class="btn btn-primary mx-auto ">Verify</button>
        </form>
    </div>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("3-yDdMjXAGrpKGg0Q");
   })();
</script>
    <script>
        let firstname = <?php echo json_encode($firstname); ?>;
        let lastname = <?php echo json_encode($lastname); ?>;
        let email = <?php echo json_encode($email); ?>;
        let code = <?php echo json_encode($codeverif); ?>;
        let checkcode = <?php echo json_encode($checkcode); ?>;
        console.log(code,firstname,lastname,email)
//2D1FD71013A1879345965F0A0A31F96B386B
        function sendEmail() {
//             Email.send({
//                 Host: "smtp.elasticemail.com",
//                 Username: "saskioutchiha62@gmail.com",
//                 Password: "97EEF26EE1786311B8BDE65E2BB936741EAF",
//                 To: `${email}`,
//                 From: "saskioutchiha62@gmail.com",
//                 Subject: "verification code",
//                 Body: `Dear ${firstname} ${lastname},

// Thank you for signing up for our service. We're excited to have you on board.

// To complete your registration, please enter the following verification code in the required field on our website:

// Verification Code: ${code}.

// This code is valid for 15 minutes from the time you receive this email. If you did not request this code, please ignore this email or contact our support team.

// If you have any questions or need further assistance, please don't hesitate to contact us at support@ourservice.com.hi  this is you code verification `,
//             }).then(function (message) {
//             if(checkcode == false){
//                 Swal.fire({
           
//             icon: "success",
//             title: "the verification has been sent tou your email with successe",
//             showConfirmButton: true,
            
//              })}
//              else{
//                 Swal.fire({
//         icon: "error",
//          title: "Oops...",
//         text: "Something went wrong!",
//         footer: 'we resent the verification to tou email',
//           showConfirmButton: true,
//           });
//              };
//             })
//             ;
//         }
emailjs.send('service_od8zahb', 'template_tq7clmr', {
    to_name: `${firstname}`,
    from_name: 'Builde your self centre ',
    message: `Dear ${firstname} ${lastname},

// Thank you for signing up for our service. We're excited to have you on board.

// To complete your registration, please enter the following verification code in the required field on our website:

// Verification Code: ${code}.

// This code is valid for 15 minutes from the time you receive this email. If you did not request this code, please ignore this email or contact our support team.

// If you have any questions or need further assistance, please don't hesitate to contact us at support@ourservice.com.hi  this is you code verification `,

    to_email: `${email}`
})
.then(function (message) {
            
                Swal.fire({
            icon: "success",
            title: "the verification has been sent tou your email with successe",
            showConfirmButton: true,
            
             })
            })
            
}
        sendEmail();
        
    </script>
</body>
</html>

