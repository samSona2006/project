<?php
// Text
$_['text_new_card']                     = '+ ավելացնել նոր քարտ';
$_['text_loading']                      = 'Հարցում... Խնդրում ենք սպասել...';
$_['text_card_details']                 = 'Քարտի տվյալներ';
$_['text_saved_card']                   = 'Օգտագործել պահպանված քարտը';
$_['text_card_ends_in']                 = 'Վճարել գրանցված քարտով %s քարտի վերջին նիշերն են XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Քարտի համար';
$_['text_card_expiry']                  = 'Քարտի վավերականության ժամկետ (MM/YY):';
$_['text_card_cvc']                     = 'Քարտի անվտանգության ծածկագիր (CVC):';
$_['text_card_zip']                     = 'Քարտի փոստային ինդեքս';
$_['text_card_save']                    = 'Պահպանե՞լ այս քարտը հետագա օգտագործման համար';
$_['text_trial']                        = '%s յուրաքանչյուր %s %s համար %s վճարում ';
$_['text_recurring']                    = '%s յուրաքանչյուր %s %s';
$_['text_length']                       = ' համար %s վճարում';
$_['text_cron_subject']                 = 'Square CRON- ի աշխատանքի ամփոփում';
$_['text_cron_message']                 = 'Square հավելվածով կատարված CRON առաջադրանքների ցանկ։';
$_['text_squareup_profile_suspended']   = ' Ձեր կրկնվող վճարումները կասեցվել են: Լրացուցիչ մանրամասների համար դիմեք մեզ:';
$_['text_squareup_trial_expired']       = ' Ձեր փորձնական օգտագործման ժամանակը ավարտվել է։';
$_['text_squareup_recurring_expired']   = ' Ձեր կրկնվող վճարումները ավարտվել են: Սա ձեր վերջին վճարումն էր:';
$_['text_cron_summary_token_heading']   = 'Մուտքի նշանի թարմացում';
$_['text_cron_summary_token_updated']   = 'Մուտքի նշանը հաջողությամբ թարմացվել է։';
$_['text_cron_summary_error_heading']   = 'Գործարքի սխալներ';
$_['text_cron_summary_fail_heading']    = 'Ձոխողված գործարքներ (Հաշվի կասեցում):';
$_['text_cron_summary_success_heading'] = 'Հաջողված գործարքներ';
$_['text_cron_fail_charge']             = 'Հաշվից <strong>#%s</strong> գանձում չի կարող կատարվել <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Հաշվից <strong>#%s</strong> գանձում է կատարվել <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'MM/YY';
$_['text_default_squareup_name']        = 'Կրեդիտ քարտ/ դեբատային քարտ';
$_['text_token_issue_customer_error']   = 'Մեր վճարային համակարգում տեխնիկական խնդիր է առկա: Խնդրում եմ փորձեք մի փոքր ուշ։';
$_['text_token_revoked_subject']        = 'Ձեր Square մուտքի նշանը չեղարկվեց:';
$_['text_token_revoked_message']        = "Square վճարային հավելվածի մուտքը Square  հաշիվ չեղարկվեց Square ղեկավարման վահանակի կողմից։ Անհրաժեշտ է հաստատել ձեր դիմումի հավատարմագրերը հավելվածի պարամետրերում և կրկին կապվել:";
$_['text_token_expired_subject']        = 'Ձեր Square մուտքի նշանի ժամանակը ավատրվեց։';
$_['text_token_expired_message']        = "Square վճարային հավելվածի մուտքային նշանը, որը կապված է Square հաշվին ավարտվել է։ Դուք պետք է հաստատեք հավելվածի հավատարմագրերը և CRON-ի աշխատանքը՝ հավելվածի պարամետրերում և կրկին կապվել։ ";

// Error
$_['error_browser_not_supported']       = 'Սխալ․ վճարային համակարգը այլևս չի աջակցում ձեր վեբ զննարկչին: Խնդրում ենք թարմացնել կամ օգտագործել այլ տարբերակ:';
$_['error_card_invalid']                = 'Սխալ․ քարտը անվավեր է։';
$_['error_squareup_cron_token']         = 'Սխալ․ Մուտքի նշանը չի կարող թարմացվել։ Կապ հաստատեք Square վճարային հավելվածի հետ OpenCart ադմինի վահանակից։';

// Warning
$_['warning_test_mode']                 = 'Ուշադրություն․ Sandbox ռեժիմը միացված է: Գործարքները, ըստ երևույթին, կանցնեն, բայց որևէ վճար չի կատարվի:';

// Statuses
$_['squareup_status_comment_authorized']    = 'Քարտային գործարքը has been authorized but not yet captured.';
$_['squareup_status_comment_captured']      = 'Քարտային գործարքը was authorized and subsequently captured (i.e., completed).';
$_['squareup_status_comment_voided']        = 'Քարտային գործարքը was authorized and subsequently voided (i.e., canceled).   ';
$_['squareup_status_comment_failed']        = 'Քարտային գործարքը ձախողված է։';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Վճարման հասցեի երկիրը վավեր չէ: Խնդրում ենք փոփոխել և կրկին փորձել:';
$_['squareup_override_error_shipping_address.country']      = 'Առաքման հասցեն վավեր չէ: Խնդրում ենք փոփոխել և կրկին փորձել:';
$_['squareup_override_error_email_address']                 = 'Ձեր էլեկտրոնային հասցեն վավեր չէ: Խնդրում ենք փոփոխել և կրկին փորձել:';
$_['squareup_override_error_phone_number']                  = 'Ձեր հեռախոսահամարը վավեր չէ: Խնդրում ենք փոփոխել և կրկին փորձել:';
$_['squareup_error_field']                                  = ' Ձախողում %s';