<?php

/*
 * This file is part of contao-h4a_tabellen.
 * (c) Jan Lünborg
 * @license LGPL-3.0-or-later
 */

namespace Janborg\H4aTabellen\Helper;

use StringUtil;
use System;

class Helper
{
    public static function getURL($type, $id)
    {
        if ('liga' === $type) {
            $liga_url = 'https://h4a.it4sport.de/spo/spo-proxy_public.php?cmd=data&lvTypeNext=class&subType=table&lvIDNext='.$id;
        }
        if ('team' === $type) {
            $liga_url = 'https://h4a.it4sport.de/spo/spo-proxy_public.php?cmd=data&lvTypeNext=team&lvIDNext='.$id;
        }

        return $liga_url;
    }

    public static function getCachedFile($id)
    {
        // prepare cache control
        $strCachePath = StringUtil::stripRootDir(System::getContainer()->getParameter('kernel.cache_dir'));
        $arrResult = null;
        $strCacheFile = $strCachePath.'/contao/janborg/'.$id.'.json';

        return $strCacheFile;
    }

    public static function setCachedFile($id, $liga_url)
    {
        // prepare cache control
        $strCachePath = StringUtil::stripRootDir(System::getContainer()->getParameter('kernel.cache_dir'));
        $arrResult = null;
        $strCacheFile = $strCachePath.'/contao/janborg/'.$id.'.json';
        try {
            $arrResult = json_decode(file_get_contents($liga_url), true);
        } catch (\Exception $e) {
            System::log('h4a update failed for h4a-ID: '.$id.$e->getMessage(), __METHOD__, TL_ERROR);
            $arrResult = [];
        }
        \File::putContent($strCacheFile, json_encode($arrResult));

        return $arrResult;
    }
}