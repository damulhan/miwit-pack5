<?php
/**
 * 스마트알람 (Smart-Alarm for Gnuboard4)
 *
 * Copyright (c) 2011 Choi Jae-Young <www.miwit.com>
 *
 * 저작권 안내
 * - 저작권자는 이 프로그램을 사용하므로서 발생하는 모든 문제에 대하여 책임을 지지 않습니다. 
 * - 이 프로그램을 어떠한 형태로든 재배포 및 공개하는 것을 허락하지 않습니다.
 * - 이 저작권 표시사항을 저작권자를 제외한 그 누구도 수정할 수 없습니다.
 */

include_once("_common.php");
include_once("_config.php");

if (!$is_member)
    alert("로그인 해주세요.");

if (!$mo_id)
    sql_query(" delete from $mw_moa_table where mb_id = '$member[mb_id]' ");
else
    sql_query(" delete from $mw_moa_table where mb_id = '$member[mb_id]' and mo_id = '$mo_id'");

alert("삭제했습니다.", "./?page={$page}&is_mobile={$_GET['is_mobile']}");

