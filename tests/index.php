<?php

//include class
require_once ('../src/postalcodeValidation.php');

//call new instance of the class with sample data
$postCodeValidation = new PostalCodeValidation();
$validation = $postCodeValidation->return_postcode_validation_status('V6B 4Y8','CA');

if($validation == false) :
    echo '<p style="color:red; font-weight:bold;">The postal code is invalid</p>';
else :
    echo '<p style="color:green; font-weight:bold;">The postal code is valid</p>';
endif;
