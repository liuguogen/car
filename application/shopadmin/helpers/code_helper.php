<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Code{
		/**
		*数字加字符验证码
		*/
		public static function getCode($num,$w,$h) {
		// 去掉了 0 1 O l 等
		$str = "23456789abcdefghijkmnpqrstuvwxyz";
		$code = '';
		for ($i = 0; $i < $num; $i++) {
			$code .= $str[mt_rand(0, strlen($str)-1)];
		}
		//将生成的验证码写入session，备验证页面使用
		$_SESSION["code"] = $code;
		//创建图片，定义颜色值
		Header("Content-type: image/PNG");
		$im = imagecreate($w, $h);
		$black = imagecolorallocate($im, mt_rand(0, 200), mt_rand(0, 120), mt_rand(0, 120));
		$gray = imagecolorallocate($im, 118, 151, 199);
		$bgcolor = imagecolorallocate($im, 235, 236, 237);

		//画背景
		imagefilledrectangle($im, 0, 0, $w, $h, $bgcolor);
		//画边框
		imagerectangle($im, 0, 0, $w-1, $h-1, $gray);
		//imagefill($im, 0, 0, $bgcolor);



		//在画布上随机生成大量点，起干扰作用;
		for ($i = 0; $i < 80; $i++) {
			imagesetpixel($im, rand(0, $w), rand(0, $h), $black);
		}
		//将字符随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
		$strx = rand(3, 8);
		for ($i = 0; $i < $num; $i++) {
			$strpos = rand(1, 6);
			imagestring($im, 5, $strx, $strpos, substr($code, $i, 1), $black);
			$strx += rand(8, 14);
		}
			imagepng($im);
			imagedestroy($im);
		}
		/*算术验证码*/
public static function getArithmetic($w, $h) {
	$im = imagecreate($w, $h);

	//imagecolorallocate($im, 14, 114, 180); // background color
	$red = imagecolorallocate($im, rand(0,255), rand(255,0), rand(240,0));
	$white = imagecolorallocate($im, 255, 205, 255);

	$num1 = rand(1, 20);
	$num2 = rand(1, 20);

	

	$gray = imagecolorallocate($im, mt_rand(0,118), mt_rand(0,151), mt_rand(0,191));
	$black = imagecolorallocate($im, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100));

	//画背景
	imagefilledrectangle($im, 0, 0, 100, 24, $black);
	//在画布上随机生成大量点，起干扰作用;
	for ($i = 0; $i < 10; $i++) {
		//imagesetpixel($im, rand(0, $w), rand(0, $h), $gray);
		//在画布上画线，起干扰作用;
		imageline($im, rand($i, $w), rand($i, $h),rand($i, $w), rand($i, $h),$gray);
	}
//判断数字大小更换运算符
	if($num1<$num2){
		$add="+";
		$_SESSION['code'] = ($num1)+ ($num2);
	}else if($num1%$num2==0){
		$add="/";
		$_SESSION['code'] = ($num1)/($num2);
	}else if(strlen($num1)==1 && strlen($num2)==1){
		$add="*";
		$_SESSION['code'] = ($num1)*($num2);
	}else if($num1>$num2){
		$add="-";
		$_SESSION['code'] = ($num1)-($num2);
	}
	imagestring($im, 5, 5, 4, $num1, $red);
	imagestring($im, 5, 30, 3, $add, $red);
	imagestring($im, 5, 45, 4, $num2, $red);
	imagestring($im, 5, 70, 3, "=", $red);
	imagestring($im, 5, 80, 2, "?", $white);

	header("Content-type: image/png");
	imagepng($im);
	imagedestroy($im);
}
	/**
	*纯数字验证码
	*/

	public static function getNum($num,$w,$h) {
		$code = "";
		for ($i = 0; $i < $num; $i++) {
			$code .= rand(0, 9);
		}
		//4位验证码也可以用rand(1000,9999)直接生成
		//将生成的验证码写入session，备验证页面使用
		$_SESSION["code"] = $code;
		//创建图片，定义颜色值
		Header("Content-type: image/PNG");
		$im = imagecreate($w, $h);
		$black = imagecolorallocate($im, 0, 0, 0);
		$gray = imagecolorallocate($im, 200, 200, 200);
		$bgcolor = imagecolorallocate($im, 255, 255, 255);

		imagefill($im, 0, 0, $gray);

		//画边框
		imagerectangle($im, 0, 0, $w-1, $h-1, $black);

		//随机绘制两条虚线，起干扰作用
		$style = array (
			$black,
			$black,
			$black,
			$black,
			$black,
			$gray,
			$gray,
			$gray,
			$gray,
			$gray
		);
		imagesetstyle($im, $style);
		$y1 = rand(0, $h);
		$y2 = rand(0, $h);
		$y3 = rand(0, $h);
		$y4 = rand(0, $h);
		imageline($im, 0, $y1, $w, $y3, IMG_COLOR_STYLED);
		imageline($im, 0, $y2, $w, $y4, IMG_COLOR_STYLED);

		//在画布上随机生成大量黑点，起干扰作用;
		for ($i = 0; $i < 80; $i++) {
			imagesetpixel($im, rand(0, $w), rand(0, $h), $black);
		}
		//将数字随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
		$strx = rand(3, 8);
		for ($i = 0; $i < $num; $i++) {
			$strpos = rand(1, 6);
			imagestring($im, 5, $strx, $strpos, substr($code, $i, 1), $black);
			$strx += rand(8, 12);
		}
		imagepng($im);
		imagedestroy($im);
	}
}
?>