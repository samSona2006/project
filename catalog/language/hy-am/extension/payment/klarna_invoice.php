<?php
// Text
$_['text_title']				= 'Klarna հաշիվ - վճարել 14 օրվա ընթացքում';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Klarna հաշիվը պահանջում է լրացուցիչ տեղեկություններ, նախքան Ձեր պատվերի մշակումը:';
$_['text_male']					= 'Արական';
$_['text_female']				= 'Իգական';
$_['text_year']					= 'Տարի';
$_['text_month']				= 'Ամիս';
$_['text_day']					= 'Օր';
$_['text_comment']				= 'Klarna\'ի հաշվի ID: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Սեռ';
$_['entry_pno']					= 'Անձնական համար';
$_['entry_dob']					= 'Ծննդյան ամսաթիվ';
$_['entry_phone_no']			= 'Հեռախոսահամար';
$_['entry_street']				= 'Փողոց';
$_['entry_house_no']			= 'Բնակարան No.';
$_['entry_house_ext']			= 'Առանձնատուն';
$_['entry_company']				= 'Ընկերության գրանցման համար';

// Help
$_['help_pno']					= 'Խնդրում ենք մուտքագրել ձեր Սոցիալական ապահովության համարը այստեղ:';
$_['help_phone_no']				= 'Խնդրում ենք մուտքագրել ձեր հեռախոսահամարը';
$_['help_street']				= 'Խնդրում ենք նկատի ունենալ, որ առաքումը կարող է իրականացվել միայն գրանցված հասցեով, միայն Klarna-ով վճարելիս։';
$_['help_house_no']				= 'Խնդրում ենք մուտքագրել բնակարանի համարը';
$_['help_house_ext']			= 'Խնդրում ենք մուտքագրել առաձնատան համարը';
$_['help_company']				= 'Խնդրում ենք մուտքագրել ընկերության գրանցման համար';

// Error
$_['error_deu_terms']			= 'Դուք պետք է համաձայնեք Klarna\'ի Գաղտնիության քաղաքականությանը (Datenschutz)';
$_['error_address_match']		= 'Վճարման և առաքման հասցեները պետք է համընկնեն, եթե ցանկանում եք օգտագործել Klarna հաշիվը';
$_['error_network']				= 'Klarna-ին միացնելիս սխալ է տեղի ունեցել: Խնդրում եմ փորձեք մի փոքր ուշ։';