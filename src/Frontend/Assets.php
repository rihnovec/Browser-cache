<?php

namespace RihnovecDev\Frontend;

class Assets
{
    public static $assetsPaths;
    public static $docRoot;

    public static function init()
    {
        self::$docRoot = $_SERVER['DOCUMENT_ROOT'];
        self::initAssetsPaths();
    }

    public static function initAssetsPaths()
    {
        if (file_exists(self::$docRoot . '/dist/.vite/manifest.json')) {
            $bundles = file_get_contents(self::$docRoot . '/dist/.vite/manifest.json');

            if (!empty($bundles)) {
                $bundles = json_decode($bundles, true);
            }

            foreach ($bundles as $bundle) {
                self::$assetsPaths[$bundle['name']] = [
                    'js' => $bundle['file'],
                    'css' => $bundle['css'][0]
                ];
            }
        }
    }

    public static function getAssetPath($bundleName, $ext)
    {
        return self::$assetsPaths[$bundleName][$ext];
    }
}
