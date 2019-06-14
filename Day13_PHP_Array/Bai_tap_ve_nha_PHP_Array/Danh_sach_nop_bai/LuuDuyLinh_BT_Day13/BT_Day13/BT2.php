<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 13/06/2019
 * Time: 12:13 PM
 */
function string($arr)
{

    return "Màu $arr[0] là màu yêu thích của Anh, $arr[3] là màu yêu thích của Sơn, $arr[2] là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu $arr[1]";
}

echo string(['đỏ', 'xanh', 'cam', 'trắng']);