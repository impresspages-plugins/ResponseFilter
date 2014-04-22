<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\ResponseFilter;


class Filter {
    public static function ipSendResponse(\Ip\Response\Layout $response)
    {
        $response->setTitle('XXX title');
        $response->setDescription('XXX description');
        $response->setKeywords('keyword1, keyword2, keyword3');
        return $response;
    }
}
