<?php
$banner = "
\033[0;32m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;34m             ____         ___
\033[1;34m            / __/_ ______/ _/__ ___
\033[1;34m           _\ \/ // / __/ _/ -_) -_)
\033[1;34m          /___/\_,_/_/ /_/ \__/\__/
\033[0;32m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;34m              +-+-+-+-+-+ +-+-+-+-+-+
\033[1;34m              |Z|O|N|E|Z| |S|Q|U|A|D|
\033[1;34m              +-+-+-+-+-+ +-+-+-+-+-+
\033[0;32m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
\033[1;31mðŸš«Kami tidak bertanggung jawab
\033[1;31mjika segala apapun yang terjadi pada akun anda
\033[0;32m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
";

function buatconf()
{
    echo "\033[1;33mMasukan BEARER=>> : ";
    $bearer     = trim(fgets(STDIN));
    $configsura = array('Berer' => $bearer);
    $jsonfile   = json_encode($configsura, JSON_PRETTY_PRINT);
    file_put_contents('configsura.json', $jsonfile);
    echo "\n";
}

$file      = "configsura.json";
$konfigson = file_get_contents($file);
$datason   = json_decode($konfigson, true);

if ($datason["Berer"] == false){
    system("clear");
    echo $banner;
    buatconf();
}

system("clear");
echo $banner;


$file       = "configsura.json";
$konfigson  = file_get_contents($file);
$datason    = json_decode($konfigson, true);
$bearer2    = "".$datason["Berer"]."";
$file2      = "configsur.json";
$konfigson2 = file_get_contents($file2);
$datason2   = json_decode($konfigson2, true);

if ($datason2["Point"] == True){
    echo "\033[1;31m[\033[1;34m÷\033[1;31m]\033[1;34mBertaubat lah nak jgn coly aja \033[1;31m DASAR ZONES lu!!\033[1;31m\n\n";
    echo "°SCRIPT EXPIRED\n";
    echo "\033[1;36m°AUTHOR BY : \n";
    echo "
\033[1;34m              +-+-+-+-+-+ +-+-+-+-+-+
\033[1;34m              |Z|O|N|E|Z| |S|Q|U|A|D|
\033[1;34m              +-+-+-+-+-+ +-+-+-+-+-+
";
    exit();
}

system("clear");
echo $banner;

//$video = "https://adscendmedia.com/adwall/api/publisher/25065/profile/5245/user/teyr8j7h/transactions.json?api_key=Tvj4DCl1YexPjnlRwiRgT2CAiQAhVKQZgJdxG3a0Oljh1pz5AbuK3IOK5vU3&currency_adjustment=1&description=videoBG";
//$task = "https://adscendmedia.com/adwall/api/publisher/25065/profile/5245/user/qrjzytes/transactions.json?api_key=Tvj4DCl1YexPjnlRwiRgT2CAiQAhVKQZgJdxG3a0Oljh1pz5AbuK3IOK5vU3&currency_adjustment=30";
while (true) {
    echo "\033[1;31m[\033[1;34m$date\033[1;31m]\033[1;34mMencari Survei";
    echo " â€¢";
    sleep(1);
    echo " â€¢";
    sleep(1);
    echo " â€¢";
    sleep(1);
    echo " â€¢";
    sleep(1);
    echo " â€¢\n\n";
    sleep(1);

    $dataiid   = Array("266","265","263","264","607","606","605","604","603");
    $countdata = count($dataiid);

    for ($ii = 0; $ii < $countdata; $ii++) {
        date_default_timezone_set('Asia/Jakarta');

        $date       = date('H:i:s');
        $kodid      = "".$dataiid[$ii]."";
        $databonus2 = "point=50";
        $bonus2     = "http://app.surfee.co.id/api/v3/surveys/$kodid/additional_point";
        $headers    = array();
        $headers[]  = "User-Agent: okhttp/3.14.1";
        $headers[]  = "Authorization: ".$bearer2;
        $headers[]  = "Accept-Encoding: application/json";
        $ch         = curl_init();

        curl_setopt($ch, CURLOPT_URL, $bonus2);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $databonus2);

        $resbon3 = curl_exec($ch);
        $jsq3    = json_decode($resbon3, true);

        echo "\033[1;31m[\033[1;34m$date\033[1;31m]\033[1;34mSuntikan maut  crootz ah ";
        echo "\033[1;31m\033[1;34mPoint lu\033[1;31m : \033[33;1m".$jsq3["my_points"]."\n";

        if ($jsq3["my_points"] > 75000) {
            echo "\033[1;31m[\033[1;34m÷\033[1;31m]\033[1;34mWis disit kmfret aja kemaruk semono cukup .\033[1;31mSILIT LU \033[1;31m ";
            $pointe    = $jsq3["my_points"];
            $configsur = array('Point' => $pointe);
            $jsonfile  = json_encode($configsur, JSON_PRETTY_PRINT);
            file_put_contents('configsur.json', $jsonfile);
            echo "\n";
            exit();
        } else {
        }
        sleep(25);
    }
}
?>
