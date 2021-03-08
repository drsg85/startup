<!-- 
    Template Name: Post
-->
<?php
    $to = "mitternacht@bk.ru";
    $content = "";
    $response = '';
    $responseRaw = '';

    if (!isset($_POST) || empty($_POST)) {
        // ajax here
        exit('Не заполнены поля формы');
        $success = false;
        $response = json_decode(file_get_contents('php://input'), true);
    } else {
        // without ajax
        $responseRaw = array_merge($_POST, (array) json_decode(file_get_contents('php://input')));
        }

    var_dump($response);

    $response = array_slice($responseRaw, 1);
    $headers[] = "Content-Type: text/html; charset=UTF-8";
    $headers[] = "From: Startup <$to>";
    // $headers[] = "Cc: <barber1911@mail.ru>";
    
    foreach ($response as $key => $value) {
        
        $formName = $response["Клиент"];
        $formEmail = $response["Электронная почта"];
        $formSubject = $response["Форма заявки"];

        $content .= "<table cellpadding='0' cellspacing='0' border='0' width='100%' style='background: #f5f5f5; min-width: 340px; font-size: 16px; line-height: normal;'>
            
            <td style='padding:12px; width: 200px; background: #000000; font-family: Arial, Helvetica, sans-serif; color: #c7a166; border: 1px solid #c7a166';>$key</td>
            
            <td style='padding:12px; background: #c7a166; font-family: Arial, Helvetica, sans-serif; font-weight: 700; color: #171717; border-top: 1px solid #fc0; border-bottom: 1px solid #fc0; text-align: center;'>$value</td></table>";

        $contentOut = "
        <!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
            <html>
                <head>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' >
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title> Заявка </title>
                <style type='text/css'>
                html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
                
                td a {
                    color: #ff0000 !important;
                }
                
                @media only screen and (min-device-width: 660px) {
                    .table660{
                        width:660px !important;
                    }
                }
                @-ms-viewport{width:device-width}
                @media only screen and (max-device-width: 660px), only screen and (max-width: 660px) { 
                    table[class='table660']{
                        width: 100% !important;
                    }
                }
                .table660{
                    width:660px;
                }
                .preheader{
                    display:none !important;
                }
                </style>
                </head>
            
                <body style='padding:0px;margin:0px;'>
                    
                    <div id='mailsub' class='notification' align='center' style='word-break:normal;-webkit-text-size-adjust:none; -ms-text-size-adjust: none;line-height: normal;'>
    
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' style='line-height: normal;'>
                    
                            <tr>
                                <td align='center' bgcolor='#f9f2df'>
                
                                <!--[if (gte mso 9)|(IE)]>
                                    <table width='660' border='0' cellspacing='0' cellpadding='0'>
                                        <tr>
                                            <td>
                                    <![endif]-->
                
                                                <div style='max-width:660px;'>
                                                        
                                                    <table border='0' cellspacing='0' cellpadding='0' class='table660' width='100%' style='max-width: 660px;min-width:300px;'>
    
                                                        <!--head-->
                                                        <tr>
                                                            <td align='center'>
                                                                <!--[if !mso]><!-->
                                                                <div class='preheader' style='font-size:0px;color:transparent;opacity:0;'>
                                                                </div>
                                                                <!--<![endif]-->
                                                            </td>
                                                        </tr>
                                                        <!--head END-->
    
                                                        <!--main -->
                                                        <tr>
                                                            <td align='center'>
                                                                $content
                                                            </td>
                                                        </tr>	
                                                        <!--main END-->
    
                                                    </table>
                                                </div>
                    
                                            <!--[if (gte mso 9)|(IE)]>
                                            </td>
                                        </tr>
                                    </table>
                                <![endif]-->
                
                                </td>
                            </tr>
                        </table>	
                    </div>
                </body>
            </html>";
        }
    $success = wp_mail($to, $formSubject, $contentOut, $headers);
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
        <title>Заявка Startup</title>
    </head>

    <body>
    <?php if($success): ?>
        <div class="common-popup__wrapper">
            <div class="common-popup-content">
                <div class="common-popup__content">
                    <h1 class="common-popup-content__title"><?php echo $formSubject; ?></h1>
                    <div class="common-popup-content__info">
                        <h2 class="common-popup-content__subtitle">Здравствуйте <?php echo $formName; ?></h2>
                        <p class="common-popup-content__text"> Ваше сообщение успешно отправлено. В ближайшее время наши менеджеры свяжутся с вами.
                        <p class="common-popup-content__text">Спасибо за выбор компании Startup</p>
                    </div>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button button--popup common-popup-content__close">Спасибо</a>
        </div>
    <?php else: ?>
        <h1>Sorry!</h1>
    <?php endif; ?> 
    </body>

</html>