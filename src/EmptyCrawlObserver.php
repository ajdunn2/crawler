<?php

namespace Dmelearn\Crawler;

class EmptyCrawlObserver implements CrawlObserver
{
    /**
     * Called when the crawler will crawl the url.
     *
     * @param \Dmelearn\Crawler\Url $url
     *
     * @return void
     */
    public function willCrawl(Url $url)
    {
    }

    /**
     * Called when the crawler has crawled the given url.
     *
     * @param \Dmelearn\Crawler\Url $url
     * @param \Psr\Http\Message\ResponseInterface|null $response
     * @param \Dmelearn\Crawler\Url $foundOnUrl
     *
     * @return void
     */
    public function hasBeenCrawled(Url $url, $response, Url $foundOnUrl = null)
    {
    }

    /**
     * Called when the crawl has ended.
     *
     * @return void
     */
    public function finishedCrawling()
    {
    }
}
