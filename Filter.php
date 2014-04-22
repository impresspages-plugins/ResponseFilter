<?php
/**
 * @package   ImpressPages
 */



namespace Plugin\ResponseFilter;


class Filter {
    public static function ipSendResponse($response)
    {
        if (is_object($response) && $response instanceof \Ip\Response\Layout) {
            $response->setTitle('XXX title');
            $response->setDescription('XXX description');
            $response->setKeywords('keyword1, keyword2, keyword3');
        }
        return $response;
    }
}
