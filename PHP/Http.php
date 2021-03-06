<?php
namespace auxiliary;

class Http
{

    public static function httpRequest($url, $data=array(), $method='GET',$headers = array()){
        $headers = self::headerDispose($headers);
        $curl = self::getCurl($url,$data,$method,$headers);
        try {
          $result = curl_exec($curl);    //执行操作
          if (curl_errno($curl)) echo curl_error($curl);
          return $result;
        } catch (Exception $e) {
          echo ("HTTP异常:".(string)$e);
        }finally{
          curl_close($curl); 
        } 
    }

      private static function arrstr($arr){
          $ret = "";
          reset($arr);
          while (list($k, $v) = each($arr)){
              $tmp = "$k"."="."$v";
              $ret = $ret."&".$tmp;
          }
          return $ret;
      }

      private static function getCurl($url, $data, $method,$headers){
        $curl = curl_init();  // 启动一个CURL会话
        if (count($headers) >= 1) curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        if($method=='GET') $url = $url."?".self::arrstr($data);
        curl_setopt($curl, CURLOPT_URL, $url);  // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);  // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);  // 从证书中检查SSL加密算法是否存在
        //curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);  // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转 
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);  // 自动设置Referer
        if($method=='POST'){
            curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
            if ($data != '')  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);  // Post提交的数据包
        }
        curl_setopt($curl, CURLOPT_TIMEOUT, 5);  // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0);  // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   // 获取的信息以文件流的形式返回
        return $curl;
      }


      private static function headerDispose($headers){
        if (count($headers) === 0) array_push($header,"User-Agent: Mozilla/5.0 (Linux; U; Mobile; Android 6.0.1;C107-9 Build/FRF91 )");
        $ipArr = [mt_rand(1, 255),mt_rand(1, 255),mt_rand(1, 255),mt_rand(1, 255)];
        array_push($headers,"X-FORWARDED-FOR:".$ipArr[0].".".$ipArr[1].".".$ipArr[2].".".$ipArr[3]);
        array_push($headers,"CLIENT-IP:".$ipArr[0].".".$ipArr[1].".".$ipArr[2].".".$ipArr[3]);
        return $headers;
      }

}
