<?php

// php /home/path/protected/yiic.php cron
// php /home/hollywoo/public_html/protected/yiic.php cron

class CronCommand extends CConsoleCommand {

    /**
     * Send mail method
     */
    public static function sendMail($email, $subject, $message, $fromName, $fromMail) {
        $adminEmail = $fromName . '<' . $fromMail . '>';
        $headers = "MIME-Version: 1.0\r\nFrom: $adminEmail\r\nReply-To: $adminEmail\r\nContent-Type: text/html; charset=utf-8";
        $message = wordwrap($message, 70);
        $message = str_replace("\n.", "\n..", $message);
        return mail($email, '=?UTF-8?B?' . base64_encode($subject) . '?=', $message, $headers);
    }

    public function get_subscriber_name($id) {
        $value = Yii::app()->db->createCommand()
                ->select('name')
                ->from('{{user}}')
                ->where('id=' . $id . ' AND status=1')
                ->queryScalar();
        return $value;
    }

    public function get_subscriber_email($id) {
        $value = Yii::app()->db->createCommand()
                ->select('email')
                ->from('{{user}}')
                ->where('id=' . $id)
                ->queryScalar();
        return $value;
    }

    public function actionIndex() {
        $returnValue = Yii::app()->db->createCommand()
                ->select('*')
                ->from('{{subscriber}}')
                ->where('published=1')
                ->queryAll();

        foreach ($returnValue as $key => $value) {
            $body = '<h1>Hollywoodbangla.com daily update</h1>';
            $returnValuess = Yii::app()->db->createCommand()
                    ->select('id,title,created,DATE_FORMAT(created, "%Y-%m-%d")')
                    ->from('{{news}}')
                    ->where('state = 1 AND created <= NOW() AND created >= (NOW() - INTERVAL 1 DAY)')
                    ->order('created DESC')
                    ->limit('100')
                    ->queryAll();
            $body .= '<ul>';
            foreach ($returnValuess as $keyss => $valuess) {
                $body .= '<li><a href="http://www.hollywoodbangla.com/news/' . $valuess['id'] . '.html">' . $valuess['title'] . '</a> - ' . date("F j, Y, g:i A", strtotime($valuess['created'])) . '</li>';
            }
            $body .= '</ul>';
            $body .= '<br /><br />';
            $body .= 'Thank you<br /><strong>Syed Abed Nipu</strong><br />CEO & Publisher.<br />Cel. 1 562 688 1911.<br />hollywoodbangla@gmail.com<br />http://www.hollywoodbangla.com';            

            $subject = 'Hollywoodbangla.com daily update';
            $fromNames = Yii::app()->params['adminName'];
            $fromMails = Yii::app()->params['adminEmail'];
            $to_name = $value["full_name"];
            $to_mail = $value["email"];
            $recipients = "{$to_name}<{$to_mail}>";
            //$recipients = 'saidurwd@gmail.com';
            $this->sendMail($recipients, $subject, $body, $fromNames, $fromMails);
        }
    }

}
