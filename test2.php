<?require($_SERVER['DOCUMENT_ROOT']."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetTitle("")?><?$APPLICATION->IncludeComponent(
	"mycomponents:main.feedback",
	"",
	Array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "lytkinanton@yandex.ru",
		"REQUIRED_FIELDS" => array(),
		"EVENT_MESSAGE_ID" => array()
	),
false
);?><?require($_SERVER['DOCUMENT_ROOT']."/bitrix/footer.php")?>