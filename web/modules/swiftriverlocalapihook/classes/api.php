<?php
class API {

    public static function content_api()
    {
        return new Content_API("swiftriver_dev");
    }

    public static function sources_api()
    {
        return new Sources_API("swiftriver_dev");
    }

    public static function channel_api()
    {
        return new Channels_API("swiftriver_dev");
    }
}
?>