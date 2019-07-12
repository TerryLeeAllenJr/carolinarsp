<?php
/**
 * App\Lib\Cms\CmsClient.php
 */
namespace App\Lib\Cms;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Psr7\Request as GuzzleRequest;



class CmsClient implements ClientInterface
{



    private $guzzleClient = null;

    /**
     * @param string $uri
     * @param array $params
     * @return mixed
     * @throws CmsException
     */
    public function get(string $uri, array $params=[])
    {

        $client = $this->getGuzzleClient();
        $request = $this->getGuzzleRequest('GET',$uri, $params);
        $response = $client->send($request);

        return  json_decode((string)$response->getBody()->getContents(),true);
    }


    /**
     * @return GuzzleClient|null
     */
    private function getGuzzleClient()
    {

        if(isset($this->guzzleClient)) {
            return $this->guzzleClient;
        }

        $this->guzzleClient = new GuzzleClient([
            'base_uri' => env('CMS_URL'),
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'auth' => [],
            'debug' => false,
            'defaults' =>  [
                'verify' => false,
            ],
        ]);


        return $this->guzzleClient;
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $params
     * @param array $data
     * @return GuzzleRequest
     */
    private function getGuzzleRequest(string $method, string $url, array $params = [], array $data = [])
    {

        $body = (($method == "POST" || $method == "PUT") && !empty($data))? json_encode($data) : null;

        return new GuzzleRequest(
            $method,
            "{$url}?" . http_build_query($params),
            ['Content-Type' => 'application/json'],
            $body
        );
    }

}
