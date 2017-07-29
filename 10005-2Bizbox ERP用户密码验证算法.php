<?php

class LoginEmulator
{
    private $dbSver = "127.0.0.1:3307";
    private $dbUser = "root";
    private $dbPasd = "root";
    private $dbName = "bb2_default";

    private $dbConn = null;
    function __construct() {
        // print "In LoginEmulator constructor</br>";
    }
    function __destruct() {
        if($this->dbConn)
        {
            mysqli_close($this->dbConn);
        }
    }

    function Init()
    {
       $this->dbConn = mysqli_connect($this->dbSver, $this->dbUser, $this->dbPasd);
       if(!$this->dbConn)
       {
           return false;
       }

       $t = mysqli_select_db($this->dbConn, $this->dbName);
       if(!$t)
       {
            return false;
       }
       return true;
    }

    function Validate($user, $password, $strErr)
    {
        $sql = "select password from bizbox_user where `username`='{$user}'";

        $stRs=mysqli_query($this->dbConn, $sql);
        if(!$stRs)
        {
            $strErr = "mysql_query error" + mysqli_error($this->dbConn);
            return false;
        }

        $nCount = mysqli_num_fields($stRs);
        if($nCount != 1)
        {
            mysqli_free_result($stRs);
            return false;
        }
        $rFetch = mysqli_fetch_row ($stRs);

        if(!$rFetch)
        {
            mysqli_free_result($stRs);
            return false;
        }
        if( ! mysqli_data_seek($stRs, 0))
        {
            mysqli_free_result($stRs);
            return false;
        }
        $strPstDes = $rFetch[0];
        mysqli_free_result($stRs);

        return $this->desValidate($password, $strPstDes);
    }
    static function desValidate($txt, $cipher)
    {
        static $key = "ghawvtiq";
        $txt = LoginEmulator::encrypt($txt, $key);
        return ($txt == $cipher);
    }
    /**
     * 加密
     * @param string $str 字符串
     * @param string $key 密钥
     */
    public static function encrypt($str, $key)  {
        if($str == "")
        {
            return $str;
        }
        $block = mcrypt_get_block_size('des', 'ecb');
        $pad = $block - (strlen($str) % $block);
        $str .= str_repeat(chr($pad), $pad);
        $str = mcrypt_encrypt(MCRYPT_DES, $key, $str, MCRYPT_MODE_ECB);
        return strtoupper(bin2hex($str));
    }

    /**
     * 解密
     * @param string $str 字符串
     * @param string $key 密钥
     */
    public static function decrypt($str, $key) {
        if($str == "")
        {
            return $str;
        }
        $str = hex2bin($str);
        $str = mcrypt_decrypt(MCRYPT_DES, $key, $str, MCRYPT_MODE_ECB);
        $block = mcrypt_get_block_size('des', 'ecb');
        $pad = ord($str[($len = strlen($str)) - 1]);
        return substr($str, 0, strlen($str) - $pad);
    }
}

    $stOp = new LoginEmulator();
    if(! $stOp->Init())
    {
        die("Init DataBase Failed.");
    }
    $strErr = "";
    // $rst = $stOp->Validate("user", "password", $strErr);
    $rst = $stOp->Validate("admin", "", $strErr);
    if($rst == true)
    {
        echo "用户验证成功.<br/>";
    }
    else
    {
        echo "用户验证失败.<br/>";
    }
?>