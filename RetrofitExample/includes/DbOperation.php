<?php
class DbOperation
{
    private $con;

    function __construct()
    {
        require_once dirname(__FILE__) . '/DbConnect.php';
        $db = new DbConnect();
        $this->con = $db->connect();
    }

    //Method to create a new user
    function registerUser($data)
    {
        $BotOrClient = "true";
        $Id = "";  $Money = 0;$ki=0;
        if (strlen($data) > 2 && substr($data,0, 3) == "%??" && strlen($data) >= 35)
        {
            $Id = substr($data,3, 10);
            $Money = substr($data,21, 12);
            $ImageNumber = substr($data,33, 2);
            if (strlen($data)>40&&substr($data,35, 1) == "f")
            {
                $BotOrClient = "false";
                $BotlistNumber = substr($data,36, 12);
            }
        }

        if ($Id == "0000000000")
        {
            if ($BotOrClient!= "false")
            {
                $stmt2=$this->con->prepare("SELECT id FROM users WHERE nmadr=?");
                $stmt2->bind_param("i",$ki);
                $stmt2->execute();
                $stmt2->store_result();
                $ki=$ki+1;

                $stmt =$this->con->prepare("INSERT INTO users (id,Imagenumber,money) VALUES(?,?,?)");
                $stmt->bind_param("isi",$ki,$ImageNumber,$Money);
                $stmt->execute();
            }
        }
        if ($BotOrClient != "false")
        {
            return("Jiklo".str_pad($ki,10,"0"));
        }
        else
        {
            //     OnIncomBot("Jiklo" + ki.ToString().PadLeft(10, '0'), int.Parse(MainData.BotlistNumber));
        }

        return true;
    }

    function UyingaKirish($data){

        function Tekshir($ki1){

            $stmt2=$this->con->prepare("SELECT HowmanyPlayer FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("i",$ki1);
            $stmt2->execute();
            $stmt2->store_result();
            return $ki1;
        }
        function SetTikilganPullar($nmaligi,$value,$GroupNumber){
            $stmt =$this->con->prepare("UPDATE TiilganPullar SET $nmaligi = ? WHERE GroupNumber = $GroupNumber");
            $stmt->bind_param("s",$value);
            $stmt->execute();
        }
        function SetUyinchilar($value,$GroupNumber){
            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber = $GroupNumber");
            $stmt->bind_param("s",$value);
            $stmt->execute();
        }
        function Getuyinchilar($grouppade){

            $stmt2=$this->con->prepare("SELECT uyinchilar FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("s",$grouppade);
            $stmt2->execute();
            $stmt2->store_result();
            return $grouppade;
        }
        function SetHuy($value,$GroupNumber){
            $stmt =$this->con->prepare("UPDATE players SET huy = ? WHERE GroupNumber = $GroupNumber");
            $stmt->bind_param("i",$value);
            $stmt->execute();
        }
        function SetXAmmakartalar($value,$GroupNumber){
            $stmt =$this->con->prepare("UPDATE players SET hammakartalar = ? WHERE GroupNumber = $GroupNumber");
            $stmt->bind_param("i",$value);
            $stmt->execute();
        }
        function GetKartatarqatildi($ki1){
            $stmt2=$this->con->prepare("SELECT Kartatarqatildi FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("i",$ki1);
            $stmt2->execute();
            $stmt2->store_result();
            return $ki1;
        }
        function GetYurishKimmiki($ki1){
            $stmt2=$this->con->prepare("SELECT YurishKimmiki FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("s",$ki1);
            $stmt2->execute();
            $stmt2->store_result();
            return $ki1;
        }
        function SEndMEssage($groupnumber,$index,$message){
            $stmt2=$this->con->prepare("   INSERT INTO messages (gropnumber,index,message) VALUES ?,?");
            $stmt2->bind_param("is",$groupnumber,$index,$message);
            $stmt2->execute();
        }
        function Getgrop2help($grouppy){

            $stmt2=$this->con->prepare("SELECT grop2help FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("s",$grouppy);
            $stmt2->execute();
            $stmt2->store_result();
            return $grouppy;
        }
        function GetOxirgiZapisplar($GroupNumber ,$OxirgiZapis){
            $stmt2=$this->con->prepare("SELECT $OxirgiZapis FROM players WHERE GroupNumber=?");
            $stmt2->bind_param("s",$GroupNumber);
            $stmt2->execute();
            $stmt2->store_result();

            return $GroupNumber;
        }
        //boshqalarde
        function uyinchilarade($son)
        {$st=uyinchilar($son);

            if (!strpos($st, '1') !== false)
            {
                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                $ki=$st."1";
                $stmt->bind_param("s",$ki);
                $stmt->execute();
            }
            else
            {
                if (!strpos($st, '4') !== false)
                {
                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                    $ki=$st."4";
                    $stmt->bind_param("s",$ki);
                    $stmt->execute();
                }
                else
                {
                    if (!strpos($st, '2') !== false)
                    {
                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                        $ki=$st."2";
                        $stmt->bind_param("s",$ki);
                        $stmt->execute();
                    }
                    else
                    {
                        if (!strpos($st, '6') !== false)
                        {
                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                            $ki=$st."6";
                            $stmt->bind_param("s",$ki);
                            $stmt->execute();
                        }
                        else
                        {
                            if (!strpos($st, '3') !== false)
                            {
                                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                $ki=$st."3";
                                $stmt->bind_param("s",$ki);
                                $stmt->execute();
                            }
                            else
                            {
                                if (!strpos($st, '5') !== false)
                                {
                                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                    $ki=$st."5";
                                    $stmt->bind_param("s",$ki);
                                    $stmt->execute();
                                }
                                else
                                {
                                    if (!strpos($st, '9') !== false)
                                    {
                                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                        $ki=$st."9";
                                        $stmt->bind_param("s",$ki);
                                        $stmt->execute();
                                    }
                                    else
                                    {
                                        if (!strpos($st, '8') !== false)
                                        {
                                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                            $ki=$st."8";
                                            $stmt->bind_param("s",$ki);
                                            $stmt->execute();
                                        }
                                        else
                                        {
                                            if (!strpos($st, '7') !== false)
                                            {
                                                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                                $ki=$st."7";
                                                $stmt->bind_param("s",$ki);
                                                $stmt->execute();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        function uyinchilarade2($son)
        {
            $st=uyinchilar($son);

            if (!strpos($st, '1') !== false)
            {
                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                $ki=$st."1";
                $stmt->bind_param("s",$ki);
                $stmt->execute();
            }
            else
            {
                if (!strpos($st, '3') !== false)
                {
                    $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                    $ki=$st."4";
                    $stmt->bind_param("s",$ki);
                    $stmt->execute();
                }
                else
                {
                    if (!strpos($st, '5') !== false)
                    {
                        $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                        $ki=$st."2";
                        $stmt->bind_param("s",$ki);
                        $stmt->execute();
                    }
                    else
                    {
                        if (!strpos($st, '7') !== false)
                        {
                            $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                            $ki=$st."6";
                            $stmt->bind_param("s",$ki);
                            $stmt->execute();
                        }
                        else
                        {
                            if (!strpos($st, '9') !== false)
                            {
                                $stmt =$this->con->prepare("UPDATE players SET uyinchilar = ? WHERE GroupNumber =$son");
                                $ki=$st."3";
                                $stmt->bind_param("s",$ki);
                                $stmt->execute();
                            }
                        }
                    }
                }
            }
        }

        function PlayerdaKartaniTarqatish($data,$ass3,$lk,$index,$sonide)
        {
            $ass2 = $ass3;
            $minSatck = TurnLk($lk);
            //Gruppalaga ajratiganda
            // NechtasiBorliginiAniqlash(lk);

            //ChiqqanBusaChiqaribYuborish(lk);


            // return $data.$index.$ass2;


            if ($sonide == 2 && $lk <= 2100 )
            {
                YurishAsosiy($lk, $minSatck, 2);
            }

            //Turnir
            if ($lk > 2000)
            {
                if ($lk % 2 == 0)
                {
                    if ($sonide == 5)
                    {
                        YurishAsosiy($lk, $minSatck, 5);
                    }
                }
                else
                {

                    if ($sonide == 9)
                    {
                        YurishAsosiy($lk, $minSatck, 9);
                    }
                }
            }
        }
        function combinatsiya()
        {
            for ($i = 0; $i < 18; $i++)
            {
                $g[$i] = rand(11, 63);
            }
            for ($iop = 0; $iop < 5; $iop++)
            {
                $n[$iop] = rand(11, 63);
            }
            try
            {
                for ($t1 = 1; $t1 < 18; $t1++)
                {
                    if ($t1 == 1)
                    {
                        while ($g[1] == $g[0] ||
                            $g[1] == $g[2] || $g[1] == $g[3] ||
                            $g[1] == $g[4] || $g[1] == $g[5] ||
                            $g[1] == $g[6] || $g[1] == $g[7] ||
                            $g[1] == $g[8] || $g[1] == $g[9] ||
                            $g[1] == $g[10] || $g[1] == $g[11] ||
                            $g[1] == $g[12] || $g[1] == $g[13] ||
                            $g[1] == $g[14] || $g[1] == $g[15] ||
                            $g[1] == $g[16] || $g[1] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 2)
                    {
                        while ($g[2] == $g[0] ||
                            $g[2] == $g[1] || $g[2] == $g[3] ||
                            $g[2] == $g[4] || $g[2] == $g[5] ||
                            $g[2] == $g[6] || $g[2] == $g[7] ||
                            $g[2] == $g[8] || $g[2] == $g[9] ||
                            $g[2] == $g[10] || $g[2] == $g[11] ||
                            $g[2] == $g[12] || $g[2] == $g[13] ||
                            $g[2] == $g[14] || $g[2] == $g[15] ||
                            $g[2] == $g[16] || $g[2] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if (t1 == 3)
                    {
                        while ($g[3] == $g[0] ||
                            $g[3] == $g[1] || $g[3] == $g[2] ||
                            $g[3] == $g[4] || $g[3] == $g[5] ||
                            $g[3] == $g[6] || $g[3] == $g[7] ||
                            $g[3] == $g[8] || $g[3] == $g[9] ||
                            $g[3] == $g[10] || $g[3] == $g[11] ||
                            $g[3] == $g[12] || $g[3] == $g[13] ||
                            $g[3] == $g[14] || $g[3] == $g[15] ||
                            $g[3] == $g[16] || $g[3] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 4)
                    {
                        while ($g[4] == $g[0] ||
                            $g[4] == $g[1] || $g[4] == $g[3] ||
                            $g[4] == $g[2] || $g[4] == $g[5] ||
                            $g[4] == $g[6] || $g[4] == $g[7] ||
                            $g[4] == $g[8] || $g[4] == $g[9] ||
                            $g[4] == $g[10] || $g[4] == $g[11] ||
                            $g[4] == $g[12] || $g[4] == $g[13] ||
                            $g[4] == $g[14] || $g[4] == $g[15] ||
                            $g[4] == $g[16] || $g[4] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 5)
                    {
                        while ($g[5] == $g[0] ||
                            $g[5] == $g[1] || $g[5] == $g[3] ||
                            $g[5] == $g[4] || $g[5] == $g[2] ||
                            $g[5] == $g[6] || $g[5] == $g[7] ||
                            $g[5] == $g[8] || $g[5] == $g[9] ||
                            $g[5] == $g[10] || $g[5] == $g[11] ||
                            $g[5] == $g[12] || $g[5] == $g[13] ||
                            $g[5] == $g[14] || $g[5] == $g[15] ||
                            $g[5] == $g[16] || $g[5] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 6)
                    {
                        while ($g[6] == $g[0] ||
                            $g[6] == $g[1] || $g[6] == $g[3] ||
                            $g[6] == $g[4] || $g[6] == $g[5] ||
                            $g[6] == $g[2] || $g[6] == $g[7] ||
                            $g[6] == $g[8] || $g[6] == $g[9] ||
                            $g[6] == $g[10] || $g[6] == $g[11] ||
                            $g[6] == $g[12] || $g[6] == $g[13] ||
                            $g[6] == $g[14] || $g[6] == $g[15] ||
                            $g[6] == $g[16] || $g[6] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 7)
                    {
                        while ($g[7] == $g[0] ||
                            $g[7] == $g[1] || $g[7] == $g[3] ||
                            $g[7] == $g[4] || $g[7] == $g[5] ||
                            $g[7] == $g[6] || $g[7] == $g[2] ||
                            $g[7] == $g[8] || $g[7] == $g[9] ||
                            $g[7] == $g[10] || $g[7] == $g[11] ||
                            $g[7] == $g[12] || $g[7] == $g[13] ||
                            $g[7] == $g[14] || $g[7] == $g[15] ||
                            $g[7] == $g[16] || $g[7] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 8)
                    {
                        while ($g[8] == $g[0] ||
                            $g[8] == $g[1] || $g[8] == $g[3] ||
                            $g[8] == $g[4] || $g[8] == $g[5] ||
                            $g[8] == $g[6] || $g[8] == $g[2] ||
                            $g[8] == $g[7] || $g[8] == $g[9] ||
                            $g[8] == $g[10] ||$g[8] == $g[11] ||
                            $g[8] == $g[12] || $g[8] == $g[13] ||
                            $g[8] == $g[14] || $g[8] == $g[15] ||
                            $g[8] == $g[16] || $g[8] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 9)
                    {
                        while ($g[9] == $g[0] ||
                            $g[9] == $g[1] || $g[9] == $g[3] ||
                            $g[9] == $g[4] || $g[9] == $g[5] ||
                            $g[9] == $g[6] || $g[9] == $g[2] ||
                            $g[9] == $g[8] || $g[9] == $g[7] ||
                            $g[9] == $g[10] || $g[9] == $g[11] ||
                            $g[9] == $g[12] || $g[9] == $g[13] ||
                            $g[9] == $g[14] || $g[9] == $g[15] ||
                            $g[9] == $g[16] || $g[9] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 10)
                    {
                        while ($g[10] == $g[0] ||
                            $g[10] == $g[1] || $g[10] == $g[3] ||
                            $g[10] == $g[4] || $g[10] == $g[5] ||
                            $g[10] == $g[6] || $g[10] == $g[2] ||
                            $g[10] == $g[8] || $g[10] == $g[7] ||
                            $g[10] == $g[9] || $g[10] == $g[11] ||
                            $g[10] == $g[12] || $g[10] == $g[13] ||
                            $g[10] == $g[14] || $g[10] == $g[15] ||
                            $g[10] == $g[16] || $g[10] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 11)
                    {
                        while ($g[11] == $g[0] ||
                            $g[11] == $g[1] || $g[11] == $g[3] ||
                            $g[11] == $g[4] || $g[11] == $g[5] ||
                            $g[11] == $g[6] || $g[11] == $g[2] ||
                            $g[11] == $g[8] || $g[11] == $g[7] ||
                            $g[11] == $g[9] || $g[11] == $g[10] ||
                            $g[11] == $g[12] || $g[11] == $g[13] ||
                            $g[11] == $g[14] || $g[11] == $g[15] ||
                            $g[11] == $g[16] || $g[11] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 12)
                    {
                        while ($g[12] == $g[0] ||
                            $g[12] == $g[1] || $g[12] == $g[3] ||
                            $g[12] == $g[4] || $g[12] == $g[5] ||
                            $g[12] == $g[6] || $g[12] == $g[2] ||
                            $g[12] == $g[8] || $g[12] == $g[7] ||
                            $g[12] == $g[9] || $g[12] == $g[10] ||
                            $g[12] == $g[11] || $g[12] == $g[13] ||
                            $g[12] == $g[14] || $g[12] == $g[15] ||
                            $g[12] == $g[16] || $g[12] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 13)
                    {
                        while ($g[13] == $g[0] ||
                            $g[13] == $g[1] || $g[13] == $g[3] ||
                            $g[13] == $g[4] || $g[13] == $g[5] ||
                            $g[13] == $g[6] || $g[13] == $g[2] ||
                            $g[13] == $g[8] || $g[13] == $g[7] ||
                            $g[13] == $g[9] || $g[13] == $g[10] ||
                            $g[13] == $g[11] || $g[13] == $g[12] ||
                            $g[13] == $g[14] || $g[13] == $g[15] ||
                            $g[13] == $g[16] || $g[13] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 14)
                    {
                        while ($g[14] == $g[0] ||
                            $g[14] == $g[1] || $g[14] == $g[3] ||
                            $g[14] == $g[4] || $g[14] == $g[5] ||
                            $g[14] == $g[6] || $g[14] == $g[2] ||
                            $g[14] == $g[8] || $g[14] == $g[7] ||
                            $g[14] == $g[9] || $g[14] == $g[10] ||
                            $g[14] == $g[11] || $g[14] == $g[12] ||
                            $g[14] == $g[13] || $g[14] == $g[15] ||
                            $g[14] == $g[16] || $g[14] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 15)
                    {
                        while ($g[15] == $g[0] ||
                            $g[15] == $g[1] || $g[15] == $g[3] ||
                            $g[15] == $g[4] || $g[15] == $g[5] ||
                            $g[15] == $g[6] || $g[15] == $g[2] ||
                            $g[15] == $g[8] || $g[15] == $g[7] ||
                            $g[15] == $g[9] || $g[15] == $g[10] ||
                            $g[15] == $g[11] || $g[15] == $g[12] ||
                            $g[15] == $g[13] || $g[15] == $g[14] ||
                            $g[15] == $g[16] || $g[15] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 16)
                    {
                        while ($g[16] == $g[0] ||
                            $g[16] == $g[1] || $g[16] == $g[3] ||
                            $g[16] == $g[4] || $g[16] == $g[5] ||
                            $g[16] == $g[6] || $g[16] == $g[2] ||
                            $g[16] == $g[8] || $g[16] == $g[7] ||
                            $g[16] == $g[9] || $g[16] == $g[10] ||
                            $g[16] == $g[11] || $g[16] == $g[12] ||
                            $g[16] == $g[13] || $g[16] == $g[15] ||
                            $g[16] == $g[14] || $g[16] == $g[17])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                    if ($t1 == 17)
                    {
                        while ($g[17] == $g[0] ||
                            $g[17] == $g[1] || $g[17] == $g[3] ||
                            $g[17] == $g[4] || $g[17] == $g[5] ||
                            $g[17] == $g[6] || $g[17] == $g[2] ||
                            $g[17] == $g[8] || $g[17] == $g[7] ||
                            $g[17] == $g[9] || $g[17] == $g[10] ||
                            $g[17] == $g[11] || $g[17] == $g[12] ||
                            $g[17] == $g[13] || $g[17] == $g[15] ||
                            $g[17] == $g[14] || $g[17] == $g[16])
                        {
                            $g[$t1] = rand(11, 63);
                        }
                    }
                }

                for ($yu = 0; $yu < 5; $yu++)
                {
                    if ($yu == 0)
                    {
                        while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                            $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                            $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                            $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                            $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                            $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                            $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                            $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                            $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                            $n[$yu] == $n[1] || $n[$yu] == $n[2] ||
                            $n[$yu] == $n[3] || $n[$yu] == $n[4])
                        {
                            $n[$yu] = rand(11, 63);
                        }
                    }
                    if ($yu == 1)
                    {
                        while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                            $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                            $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                            $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                            $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                            $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                            $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                            $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                            $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                            $n[$yu] == $n[0] || $n[$yu] == $n[2] ||
                            $n[$yu] == $n[3] || $n[$yu] == $n[4])
                        {
                            $n[$yu] = rand(11, 63);
                        }
                    }
                    if ($yu == 2)
                    {
                        while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                            $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                            $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                            $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                            $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                            $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                            $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                            $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                            $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                            $n[$yu] == $n[0] || $n[$yu] == $n[1] ||
                            $n[$yu] == $n[3] || $n[$yu] == $n[4])
                        {
                            $n[$yu] = rand(11, 63);
                        }
                    }
                    if ($yu == 3)
                    {
                        while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                            $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                            $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                            $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                            $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                            $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                            $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                            $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                            $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                            $n[$yu] == $n[0] || $n[$yu] == $n[2] ||
                            $n[$yu] == $n[1] || $n[$yu] == $n[4])
                        {
                            $n[$yu] = rand(11, 63);
                        }
                    }
                    if ($yu == 4)
                    {
                        while ($n[$yu] == $g[0] || $n[$yu] == $g[7] ||
                            $n[$yu] == $g[1] || $n[$yu] == $g[3] ||
                            $n[$yu] == $g[4] || $n[$yu] == $g[5] ||
                            $n[$yu] == $g[6] || $n[$yu] == $g[2] ||
                            $n[$yu] == $g[8] || $n[$yu] == $g[9] ||
                            $n[$yu] == $g[10] || $n[$yu] == $g[11] ||
                            $n[$yu] == $g[12] || $n[$yu] == $g[13] ||
                            $n[$yu] == $g[14] || $n[$yu] == $g[15] ||
                            $n[$yu] == $g[16] || $n[$yu] == $g[17] ||
                            $n[$yu] == $n[0] || $n[$yu] == $n[2] ||
                            $n[$yu] == $n[1] || $n[$yu] == $n[3])
                        {
                            $n[$yu] = rand(11, 63);
                        }
                    }
                }
                //flesh test

                //  g[1] = 12; g[0] = 13; n[0] = 14; n[1] = 15; n[2] = 50; n[3] = 56; n[4] = 17;
                //  g[2] = 12; g[3] = 13;
                //Strit
                //    g[2] = 33; g[3] = 35;
                //n[0] = 18;n[1] = 16;n[2] = 49;n[3] = 45;n[4] = 47;
                // g[1] = 26; g[0] = 17;
                //para
                //  g[2] = 23; g[3] = 36; n[0] =26; n[1] = 17; n[2] = 48; n[3] = 35; n[4] = 51;
                //   g[0] = 23; g[1] = 36;
                //g[4] = 23; g[5] = 36;

                //kikerets;
                //  g[0] = 11; g[1] = 12; n[0] =31; n[1] = 56; n[2] = 48; n[3] = 35; n[4] = 57;
                // g[2] = 13; g[3] = 14;
                //set
                // g[1] = 32; g[0] = 37; n[0] =25; n[1] = 43; n[2] = 11; n[3] = 24; n[4] = 58;
                // g[2] = 45; g[3] = 50;
            }
            catch (Exception $e)
            {
                print($e->getMessage());
            }
        }

        function  cardio()
        {
            for($i = 11; $i < 24; $i++)
            {
                $cards[$i] = "cl".$i;
            }
            for ($i = 24; $i < 37; $i++)
            {
                $cards[$i] = "di".($i-13);
            }
            for ($i = 37; $i < 50; $i++)
            {
                $cards[$i] = "he".($i - 26);
            }
            for ($i = 50; $i < 63; $i++)
            {
                $cards[$i] = "sp".($i - 39);
            }
        }
        function TurnLk($lk)
        {
            $m = 0;
            //lobbi
            if ($lk > 0) { $m = 10; }
            if ($lk > 100) { $m = 50; }
            if ($lk > 200) { $m = 200; }
            if ($lk > 300) { $m = 1000; }
            if ($lk > 400) { $m = 4000; }
            if ($lk > 500) { $m = 20000; }
            if ($lk > 600) { $m = 100000; }
            if ($lk > 700) { $m = 500000; }
            if ($lk > 800) { $m = 1000000; }
            if ($lk > 900) { $m = 2000000; }
            if ($lk > 1000) { $m = 10000000; }
            if ($lk > 1100) { $m = 200000000; }
            if ($lk > 1200) { $m = 500000000; }
            if ($lk > 1300) { $m = 1000000000; }
            if ($lk > 1400) { $m = 500000; }
            if ($lk > 1500) { $m = 1000000; }
            if ($lk > 1600) { $m = 2000000; }
            if ($lk > 1700) { $m = 10000000; }
            if ($lk > 1800) { $m = 200000000; }
            if ($lk > 1900) { $m = 500000000; }
            if ($lk > 2000) { $m = 1000000000; }
            //turnir
            if ($lk > 2100) { $m = 20; }
            if ($lk > 2200) { $m = 20; }
            if ($lk > 2300) { $m = 20; }
            if ($lk > 2400) { $m = 20; }
            if ($lk > 2500) { $m = 20; }
            if ($lk > 2600) { $m = 20; }
            if ($lk > 2700) { $m = 20; }
            if ($lk > 2800) { $m = 20; }

            //3roundli
            if ($lk > 2900) { $m = 20; }
            if ($lk > 3000) { $m = 20; }
            if ($lk > 3100) { $m = 20; }

            return $m;
        }

        function YurishAsosiy($lk, $minSatck,$soni ,$index){
            $koo=$lk;
            $stmt2=$this->con->prepare("SELECT KartaTarqatildi FROM players WHERE groupnumber=?");
            $stmt2->bind_param("s",$koo);
            $stmt2->execute();
            $stmt2->store_result();

            if ($koo== "false")
            {
                if ($lk > 2100)
                {
                    $stmt =$this->con->prepare("UPDATE players SET group2help = ? WHERE gruberopnum =$lk");
                    $sad="false";
                    $stmt->bind_param("i",$sad);
                    $stmt->execute();
                }

                //   yield return new WaitForSeconds(2);

                // NechtasiBorliginiAniqlash( lk);


                //  ChiqqanBusaChiqaribYuborish( lk);
                $trt = -1;
                if ($koo == "false")
                {/*
                for ($i = 0; $i < ChiqaribYuborish.Count; $i++)
                {
                    if (ChiqaribYuborish[i].lk1 == lk)
                    {
                        if(ChiqaribYuborish[i].Timer.IsRunning)
                        {
                            ChiqaribYuborish[i].Timer.Stop();
                            ChiqaribYuborish[i].Timer.Reset();
                        }
                        $trt = $i;
                        break;
                    }
                }
                if ($trt == -1)
                {
                    ChiqaribYuborish.Add(new RRniKItish(lk));
                }*/
                    $dssad = 0;
                    $ttt4 = "";

                    if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis0"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis0"),27,12)>=$minSatck){
                        $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(0+ 1)) !== false){ $ttt4 = $ttt4.(string)(0+ 1);}
                    } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis1"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis1"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(1+ 1)) !== false){ $ttt4 = $ttt4.(string)(1+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis2"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis2"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(2+ 1)) !== false){ $ttt4 = $ttt4.(string)(2+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis3"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis3"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(3+ 1)) !== false){ $ttt4 = $ttt4.(string)(3+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis4"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis4"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(4+ 1)) !== false){ $ttt4 = $ttt4.(string)(4+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis5"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis5"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(5+ 1)) !== false){ $ttt4 = $ttt4.(string)(5+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis6"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis6"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(6+ 1)) !== false){ $ttt4 = $ttt4.(string)(6+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis7"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis7"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(7+ 1)) !== false){ $ttt4 = $ttt4.(string)(7+ 1);}
                } if( (int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis8"),14,12)+(int)substr(GetOxirgiZapisplar($lk,"Oxirgizapis8"),27,12)>=$minSatck){
                    $dssad = $dssad + 1;if(strpos(Getuyinchilar($lk), (string)(8+ 1)) !== false){ $ttt4 = $ttt4.(string)(8+ 1);}
                }

                    $stmt =$this->con->prepare("UPDATE players SET huy = ?,yurishkimmi=? WHERE gruberopnum =$lk");
                    $stmt->bind_param("is",$dssad,$ttt4);
                    $stmt->execute();
                    $koo=$lk;
                    $stmt2=$this->con->prepare("SELECT Kimboshlashi FROM players WHERE groupnumber=?");
                    $stmt2->bind_param("i",$koo);
                    $stmt2->execute();
                    $stmt2->store_result();
                    $koo2=$lk;
                    $stmt2=$this->con->prepare("SELECT yurishkimmi FROM players WHERE groupnumber=?");
                    $stmt2->bind_param("s",$koo2);
                    $stmt2->execute();
                    $stmt2->store_result();
                    $mkj = "";
                    for ($i = 1; $i < 10; $i++)
                    {

                        $gd = $koo + $i;
                        if ($gd > 9)
                        {
                            $gd = $gd - 9;
                        }

                        if (strpos($koo2, $gd) !== false)
                        {
                            $rew=(string)$gd.(string)$koo2;
                            $stmt =$this->con->prepare("UPDATE players SET Kimboshlashi = ?,yurishkimmi=? WHERE gruberopnum =$lk");
                            $stmt->bind_param("is",$gd,$rew);
                            $stmt->execute();
                            break;
                        }
                    }
                }
                /*        if (BotGrouplar[lk].Count + grop2[lk].Count != grop22[lk].Count)
                     /* {
                           for ($i = 0; $i < grop2[lk].Count; i++)
                           {
                               int mkdsd = BotGrouplar[lk].Count;
                               for ($l = 0; $l < $mkdsd; $l++)
                               {
                                   if (grop2[lk][i].indexClient.ToString() == BotGrouplar[lk][l].Index)
                                   {
                                       BotGrouplar[lk].RemoveAt(l);
                                       l = l - 1;
                                       mkdsd = mkdsd - 1;
                                   }
                               }
                           }
                       }*/

                if (Tekshir($lk) >= $soni && GetKartatarqatildi($lk) == "false")
                {
                    $stmt =$this->con->prepare("UPDATE players SET KartaTarqatildi = ? WHERE gruopnumber =$lk");
                    $dsfds="true";
                    $stmt->bind_param("i",$dsfds);
                    $stmt->execute();
                    SetTikilganPullar("Tikilganpullar0","0",$lk);
                    SetTikilganPullar("Tikilganpullar1","1",$lk);
                    SetTikilganPullar("Tikilganpullar2","2",$lk);
                    SetTikilganPullar("Tikilganpullar3","3",$lk);
                    SetTikilganPullar("Tikilganpullar4","4",$lk);
                    SetTikilganPullar("Tikilganpullar5","5",$lk);
                    SetTikilganPullar("Tikilganpullar6","6",$lk);
                    SetTikilganPullar("Tikilganpullar7","7",$lk);
                    SetTikilganPullar("Tikilganpullar8","8",$lk);



                     combinatsiya();cardio();
                    //Gruppalaga ajratiganda
                    SetXAmmakartalar($cards[$n[0]].$cards[$n[1]].$cards[$n[2]].$cards[$n[3]].$cards[$n[4]],$lk);
                    //XammaKartalar[lk] = ;
                    // if (trt != -1) { ChiqaribYuborish[trt].Timer.Start(); }

                    try
                    {    $asd=Getuyinchilar($lk);
                        $asd2=GetYurishKimmiki($lk);
                        for ($i = 0; $i < 9; $i++)
                        {
                            SetUyinchilar(substr($asd,1,1).substr($asd,2,strlen($asd-2)).substr($asd,0,1),$lk);
                            $asd=substr($asd,1,1).substr($asd,2,strlen($asd-2)).substr($asd,0,1);
                            if ( strpos($asd2, substr($asd,1,1)) !== false&& strpos($asd2, substr($asd,0,1)) !== false)
                            {
                                break;
                            }
                        }
                    }
                    catch (Exception $e)
                    {
                        print($e->getMessage());
                    }
                    $totti = Tekshir($lk);

                    SetHuy($totti,$lk);

                    for ($m = 0; $m < $totti; $m++)
                    {
                        $tott2 = -1;
                        // $tott3 = 0;
                        /*                   for ($o = 0; $o < Tekshir($lk); $o++)
                                        {

                                            if (YurishKimmiki[lk].Length>m+1 && YurishKimmiki[lk].Substring(m + 1, 1) == grop2[lk][o].indexClient.ToString())
                                            {

                                                tott2 = o;                                          break;
                                            }
                                        }
                                /*     for ($o = 0; $o < grop22[lk].Count; $o++)
                                        {
                                            if (YurishKimmiki[lk].Length > m + 1 && YurishKimmiki[lk].Substring(m + 1, 1) == grop22[lk][o].indexClient.ToString())
                                            {
                                                tott3 = o;
                                                break;
                                            }
               }*/
                        if ($tott2==-1)
                        {
                            try
                            {
                                SEndMEssage($lk,$index,$)

                            writer.WriteLine(cards[g[m * 2]] + cards[g[m * 2 + 1]] + "" + YurishKimmiki[lk].Substring(0, 1) +
                            (minSatck / 2).ToString().PadLeft(12, '0') + "!" + (minSatck).ToString().PadLeft(12, '0') +
                            uyinchilar[lk] + grop22[lk][tott2].indexClient + grop22[lk][tott2].ClientGroup);
                        }
                            catch ( ErrorException $e)
                            {
                                print("ee uyinchi chiqibketti".$e->getMessage());
                            }
                        }
                        else
                        {
                            /*                       int mop = 0;
                                               for(int i = 0; i < BotGrouplar[lk].Count; i++)
                                               {
                                                   if(grop22[lk][tott3].indexClient.ToString()== BotGrouplar[lk][i].Index)
                                                   {
                                                       mop = i;
                                                 break;
                                                   }
                                               }
                                     /*            OnIncomBot(cards[g[m * 2]] + cards[g[m * 2 + 1]] + "" + YurishKimmiki[lk].Substring(0, 1) +
                                           (minSatck / 2).ToString().PadLeft(12, '0') + "!" + (minSatck).ToString().PadLeft(12, '0') +
                                           uyinchilar[lk] + grop22[lk][tott3].indexClient + grop22[lk][tott3].ClientGroup, int.Parse(BotGrouplar[lk][mop].IdNumber));*/
                        }
                    }
                }
            }
        }




        function uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol){

            if ($GroupNumber % 2 == 0)
            {
                uyinchilarade2($GroupNumber);
            }
            else
            {
                uyinchilarade($GroupNumber);
            }
            if ($BotOrClient != "false")
            {
                $stmt =$this->con->prepare("UPDATE users SET Index = ?,groupnamer = ?,Levelde = ?,Tikilgan='0',ContactName = ? WHERE CustomerID =$Id");
                $ki="person".Tekshir($GroupNumber);
                $stmt->bind_param("iiis",substr(Getuyinchilar($GroupNumber),strlen(Getuyinchilar($GroupNumber)), 1),$GroupNumber,$Level,$ki);
                $stmt->execute();
            }





            //      NechtasiBorliginiAniqlash($GroupNumber);

            //       ChiqqanBusaChiqaribYuborish($GroupNumber);

            $minStavka = TurnLk($GroupNumber);

            $gruppdagaiOdamlariSoni=0;
            for ($i = 0; $i < Tekshir($GroupNumber); $i++)
            {
                switch(substr(uyinchilar($GroupNumber),$i, 1)){
                    case 0 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis0"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    }
                        break;
                    case 1 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis1"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                    case 2 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis2"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                    case 3 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis3"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                    case 4 :   if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis4"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    }break;
                    case 5 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis5"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                    case 6 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis6"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                    case 7 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis7"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                    case 8 :  if ((int)substr(OxirgiZapisplar($GroupNumber,"OxirgiZapis8"),14, 12) >= $minStavka)
                    {
                        $gruppdagaiOdamlariSoni = $gruppdagaiOdamlariSoni + 1;
                    } break;
                }
            }


            $data = "%%".$Name .str_pad((string)$GroupNumber,4,"0").$pul."$" .$yol
                .$Level .$Money."xb".$Id;
            //%%NameByMe\Ism\0001\gruppa\00000001000$\pul\000000000000\yul\00000\level\000000001000\pul\xb0000000000\id\
            $index =substr(Getuyinchilar($GroupNumber),strlen(Getuyinchilar($GroupNumber)), 1)
            switch($index){
                case 0;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar0 = ? WHERE CustomerID =$Id")
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);
                    $stmt->execute();  break;
                case 1;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar1 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 2;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar2 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 3;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar3 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 4;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar4 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 5;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar5 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 6;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar6 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 7;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar7 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
                case 8;  $stmt =$this->con->prepare("UPDATE Players SET OxirgiZapislar8 = ? WHERE CustomerID =$Id");
                    $fd=$data.substr(uyinchilar($GroupNumber),strlen(uyinchilar($GroupNumber)), 1);
                    $stmt->bind_param("s",$fd);                    $stmt->execute();  break;
            }


        $kil = "";

            if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis0") != "")
            { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis0"); }
            if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis1") != "")
            { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis1"); }
             if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis2") != "")
             { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis2"); }
             if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis3") != "")
             { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis3"); }
             if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis4") != "")
             { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis4"); }
             if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis5") != "")
             { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis5"); }
             if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis6") != "")
             { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis6"); }
             if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis7") != "")
             { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis7"); }
                if(GetOxirgiZapisplar($GroupNumber,"OxirgiZapis8") != "")
                { $kil = $kil.GetOxirgiZapisplar($GroupNumber,"OxirgiZapis8"); }



        // GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] = GruppadagiAktivOdamlarSoni[Maindata.GroupNumber] + 1;
        PlayerdaKartaniTarqatish($data, $kil, $GroupNumber,$index,Tekshir($GroupNumber));



            return true;
        }




        $BotOrClient = "true";
        $GroupNumber = 0;
        $pul = "";  $Id = "";
        $Level = "";$Money = "";
        $yol = "";  $Name = "";
        if(strlen($data)>2 && substr($data,0, 2) == "%%" && strlen($data)>=69)
        {
            $GroupNumber = substr($data,10, 4);
            $Id = substr($data,59, 10);
            $Level = substr($data,39, 6);
            $Name = substr($data,2, 8);
            $Money = substr($data,45, 12);
            $yol = substr($data,27, 12);
            $pul = substr($data,14, 12);
            if (strlen($data) > 69 && substr($data,69, 1) == "f")
            {
                $BotOrClient = "false";
            }
        }
        $ki=$GroupNumber;
        if ($GroupNumber > 2100)
        {
            for($i = 0; $i < 100; $i = $i + 2)
            {

                if (Getgrop2help($GroupNumber + $i))
                {
                    $GroupNumber = $GroupNumber + $i;
                    break;
                }
            }
        }
        else
        {/**/
            if (str_pad((string)$ki,10,"0") == "0001")
            {
                $mvc = 0;
                for($i = 2; $i < 100; $i=$i+2)
                {
                    //  print("1");
                    switch ((int)$pul)
                    {
                        case 100:if (Tekshir($i) < 5) { $GroupNumber = $i; $mvc = 1; }  ; break;
                        case 500: if (Tekshir(100 + $i) < 5) { $GroupNumber = 100 + $i; $mvc = 1; } break;
                        case 2000: if (Tekshir(200 + $i) < 5) { $GroupNumber = 200 + $i; $mvc = 1; }; break;
                        case 10000: if (Tekshir(300 + $i) < 5) { $GroupNumber = 300 + $i; $mvc = 1; }; break;
                        case 40000: if (Tekshir(400 + $i) < 5) { $GroupNumber = 400 + $i; $mvc = 1; }; break;
                        case 200000: if (Tekshir(500 + $i) < 5) { $GroupNumber = 500 + $i; $mvc = 1; }; break;
                        case 1000000: if (Tekshir(600 + $i) < 5) { $GroupNumber = 600 + $i; $mvc = 1; }; break;
                        case 10000000: if (Tekshir(700 + $i) < 5) { $GroupNumber = 700 +$i; $mvc = 1; }; break;
                        case 100000000: if (Tekshir(800 + $i) < 5) { $GroupNumber = 800 + $i; $mvc = 1; }; break;
                        case 200000000: if (Tekshir(900 + $i) < 5) { $GroupNumber = 900 +$i; $mvc = 1; }; break;
                        case 400000000: if (Tekshir(1000 + $i) < 5) { $GroupNumber = 1000 + $i; $mvc = 1; }; break;
                        case 1000000000: if (Tekshir(1100 + $i) < 5) { $GroupNumber = 1100 + $i; $mvc = 1; }; break;
                        case 2000000000: if (Tekshir(1200 + $i) < 5) { $GroupNumber = 1200 + $i; $mvc = 1; }; break;
                    }
                    //  print("41");
                    if ($mvc == 1) {  break; }
                    //  print("6");
                    switch ((int)$pul)
                    {
                        case 100: if (Tekshir($i + 1) < 9) { $GroupNumber =  $i + 1; $mvc = 1; }; break;
                        case 500: if (Tekshir(100 + $i + 1) < 9) { $GroupNumber = 100 + $i + 1; $mvc = 1; }; break;
                        case 2000: if (Tekshir(200 + $i + 1) < 9) { $GroupNumber = 200 + $i + 1; $mvc = 1; }; break;
                        case 10000: if (Tekshir(300 + $i + 1) < 9) { $GroupNumber = 300 + $i + 1; $mvc = 1; }; break;
                        case 40000: if (Tekshir(400 + $i + 1) < 9) { $GroupNumber = 400 + $i + 1; $mvc = 1; }; break;
                        case 200000: if (Tekshir(500 + $i + 1) < 9) { $GroupNumber = 500 + $i + 1; $mvc = 1; }; break;
                        case 1000000: if (Tekshir(600 + $i + 1) < 9) { $GroupNumber = 600 + $i + 1; $mvc = 1; }; break;
                        case 10000000: if (Tekshir(700 + $i + 1) < 9) { $GroupNumber = 700 + $i + 1; $mvc = 1; }; break;
                        case 100000000: if (Tekshir(800 + $i + 1) < 9) { $GroupNumber = 800 + $i + 1; $mvc = 1; }; break;
                        case 200000000: if (Tekshir(900 + $i + 1) < 9) { $GroupNumber = 9000 + $i + 1; $mvc = 1; }; break;
                        case 400000000: if (Tekshir(1000 + $i + 1) < 9) { $GroupNumber = 1000 + $i + 1; $mvc = 1; }; break;
                        case 1000000000: if (Tekshir(1100 + $i + 1) < 9) { $GroupNumber = 1100 + $i + 1; $mvc = 1; }; break;
                        case 2000000000: if (Tekshir(1200 + $i + 1) < 9) { $GroupNumber = 1200 + $i + 1; $mvc = 1; }; break;
                    }
                    if ($mvc == 1) {  break; }
                }
            }
        }
        if ($GroupNumber % 2 == 0)
        {
            if (Tekshir($GroupNumber) > 4)
            {
                if ($BotOrClient != "false")
                {
                    return"OdamtudaUzi";
                }
            }
            else
            {
                if ($GroupNumber > 2100)
                {
                    if (Getgrop2help($GroupNumber)=="true")
                    {
                        uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                    }
                }
                else
                {
                    uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                }
            }
        }
        else
        {
            if (Tekshir($GroupNumber) > 8)
            {
                if ($BotOrClient != "false")
                {
                    return"OdamtudaUzi";
                }
            }
            else
            {
                if ($GroupNumber > 2100)
                {
                    if (Getgrop2help($GroupNumber)=="true")
                    {
                        uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                    }
                }
                else
                {
                    uyinchiniGruppgaQushish($data,$GroupNumber,$BotOrClient,$Id,$Level,$Money,$Name,$pul,$yol);
                }
            }
        }
        return true;
    }




}