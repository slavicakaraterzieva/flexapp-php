<?php 
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../models/Realestate.php";
require "../models/Img.php";
require "../models/Post.php";
require "../helpers/session_helper.php";
require "../helpers/url_redirect.php";
$user = new User();

if(isset($_POST["update_user"])){
    //echo "the button works";
    $POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);
    $first_name=$_POST["first_name"];
    $last_name=$_POST["last_name"];
    $company_email=$_POST["company_email"];
    $user_phone=$_POST["user_phone"];
    $address=$_POST["address"];
    $postal_code=$_POST["postal_code"];
    $company_email=$_POST["company_email"];
    $user_gender=$_POST["select_gender"];
    $user_bio=$_POST["user_bio"];
    $user_experiance=$_POST["work_experiance"];
    $ocupation=$_POST["ocupation"];
    $company=$_POST["company"];
    $linkedin=$_POST["linkedin"];

    $userData=array();
    $data=array();
    $user_id=$_SESSION["user_id"];

    $data=array(
        "user_first_name"=>$first_name,
        "user_last_name"=>$last_name,
        "company_email"=>$company_email,
        "user_ocupation"=>$ocupation,
        "user_suburb"=>$postal_code,
        "user_address"=>$address,
        "user_gender"=>$user_gender,
        "user_phone"=>$user_phone,
        "user_bio"=>$user_bio,
        "user_experiance"=>$user_experiance,
        "user_work"=>$company,
        "user_linkedin"=>$linkedin,
        "user_id"=>$user_id
    );

    //check if column is empty and push the array else unset the value
    if($first_name!=""){
        array_push($userData,"user_first_name");
    }
        else{unset($data["user_first_name"]);}

        if($last_name!=""){
            array_push($userData,"user_last_name");
        }
            else{unset($data["user_last_name"]);}

            if($company_email!=""){
                array_push($userData,"company_email");
            }
                else{unset($data["company_email"]);}

                if($ocupation!=""){
                    array_push($userData,"user_ocupation");
                }
                    else{unset($data["user_ocupation"]);}

                    if($postal_code!=""){
                        array_push($userData,"user_suburb");
                    }
                        else{unset($data["user_suburb"]);}

                        if($address!=""){
                            array_push($userData,"user_address");
                        }
                            else{unset($data["user_address"]);}

                            if($user_gender!="" && $user_gender!="default"){
                                array_push($userData,"user_gender");
                            }
                                else{unset($data["user_gender"]);}

                                if($user_phone!=""){
                                    array_push($userData,"user_phone");
                                }
                                    else{unset($data["user_phone"]);}

                                    if($user_bio!=""){
                                        array_push($userData,"user_bio");
                                    }
                                        else{unset($data["user_bio"]);}

                                        if($user_experiance!="" && $user_experiance!="0"){
                                            array_push($userData,"user_experiance");
                                        }
                                            else{unset($data["user_experiance"]);}

                                        if($company!=""){
                                            array_push($userData,"user_work");
                                        }
                                            else{unset($data["user_work"]);}

                                            if($linkedin!=""){
                                                array_push($userData,"user_linkedin");
                                            }
                                                else{unset($data["user_linkedin"]);}

//print_r($data);
function arrayString($userData){
    $string="";
    foreach($userData as $key=>$value){
        $string.=" ".$value."=:".$value.",";
    }
    return $string;
}
$string =arrayString($userData);
$string=substr($string, 0,-1 );
 //echo $string;   
$query="UPDATE `users` SET ".$string." WHERE user_id=:user_id";
/* echo $query;
print_r ($data); */
 $updateUser=$user->updateUserDetails($query,$data);
if($updateUser){
    flashSuccess('success','You have updated your profile info!');
    redirect('../../flexapp/index.php');
}
else{
    flashDanger('success','You have not updated your profile info!');
    redirect('../../flexapp/index.php');
} 

}//end of the button
?>