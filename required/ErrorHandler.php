<html>
    <head>
      <script src ="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script type="text/javascript">

            function JSalertCheckbox(){
	swal("Error", " Please Select One or More Competition Type. Each School/Institute Should Participate for One Or More Competition", "error").then(function() {
    window.location = "../Registration.php";});
}
    function filltextbox(){
	swal("Oops", " Total Participants Must be Equal or Less than 8. Check the total participants of each competition", "error").then(function() {
    window.location = "../Registration.php";});
}

function success(){
	swal("Success", " Registration Successful...!", "success").then(function() {
    window.location = "../VITS - Registration Confirmed.php";});
}

function Failed(){
	swal("Failed", " Can not Complete Your Request. Please Try Again Later or Check the Input Values. ", "error").then(function() {
    window.location = "../Registration.php";});
}
        </script>
    </head>
<body>
    

    </body>
</html>