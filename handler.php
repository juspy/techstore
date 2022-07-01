                 <!-- <?php
                            error_reporting( E_ERROR );
                            if (isset($_POST['email1'])) {$email1 = $_POST['email1']; if ($email1 == ''){unset($email1);}}
                            if (isset($_POST['company_name'])) {$company_name = $_POST['company_name']; if ($company_name == ''){unset($company_name);}}
                            if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == ''){unset($phone);}}
                            if (isset($_POST['submit'])){$submit = $_POST['submit'];if ($submit == ''){unset($submit);}}

                            if (isset($email1) ) {
                            $email1=stripslashes($email1);
                            $email1=htmlspecialchars($email1);
                            }
                            if (isset($company_name) ) {
                            $company_name=stripslashes($company_name);
                            $company_name=htmlspecialchars($company_name);
                            }
                            if (isset($phone) ) {
                            $phone=stripslashes($phone);
                            $phone=htmlspecialchars($phone);
                            }

                            $to  = "aranotdead@gmail.com";

                            $subject = "Новая заявка";

                            $mesage="
                            Тема : $request \r\n
                            Имя компании: $company_name \r\n 
                            Email : $email1 \r\n 
                            Номер телефона: $phone";

                            $headers = 'From: Techstore <info@techstore.uz>'  . "\r\n" .
                            'Reply-To: Techstore' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                            
                            if (isset($company_name)  &&  isset ($submit) ) {
                            mail($to, $subject, $mesage, $headers);
                            } 

                            ?> -->