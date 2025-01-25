<?php

namespace App\Models;

use CodeIgniter\Model;

class GithubModel extends Model
{
    public function getGitHubEvents($username = 'achmedhibatillah')
    {
        $url = "https://api.github.com/users/{$username}/events/public";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'CI-App');
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
