<?php

namespace Dmelearn\Crawler\Test;

use Dmelearn\Crawler\Url;
use Dmelearn\Crawler\CrawlObserver;

class CrawlLogger implements CrawlObserver
{
    /**
     * Called when the crawler will crawl the url.
     *
     * @param \Dmelearn\Crawler\Url   $url
     */
    public function willCrawl(Url $url)
    {
        CrawlerTest::log("willCrawl: {$url}");
    }

    /**
     * Called when the crawler has crawled the given url.
     *
     * @param \Dmelearn\Crawler\Url $url
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param \Dmelearn\Crawler\Url $foundOnUrl
     */
    public function hasBeenCrawled(Url $url, $response, Url $foundOnUrl = null)
    {
        $logText = "hasBeenCrawled: {$url}";

        if ($foundOnUrl) {
            $logText .= " - found on {$foundOnUrl}";
        }

        CrawlerTest::log($logText);
    }

    /**
     * Called when the crawl has ended.
     */
    public function finishedCrawling()
    {
        CrawlerTest::log('finished crawling');
    }
}
