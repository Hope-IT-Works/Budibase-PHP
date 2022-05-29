<?php
require_once('vendor/autoload.php');

class BudibasePHP {
    private string $budibase_hostname;
    private $client;

    public function __construct($budibase_hostname) {
        $this->budibase_hostname = $budibase_hostname;
        $this->client = new \GuzzleHttp\Client();
    }

    public function applications_create(string $app_id, string $name, string $url = null){
        $body = [
            'name' => $name
        ];
        if($url != null){
            $body['url'] = $url;
        }
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/applications', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function applications_update(string $app_id, string $name, string $url = null){
        $body = [
            'name' => $name
        ];
        if($url != null){
            $body['url'] = $url;
        }
        $response = $this->client->request('PUT', 'https://'.$this->budibase_hostname.'/api/public/v1/applications/'.$app_id, [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ],
        ]);
        return $response->getBody();
    }

    public function applications_delete(string $app_id){
        $response = $this->client->request('DELETE', 'https://'.$this->budibase_hostname.'/api/public/v1/applications/'.$app_id, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function applications_retrieve(string $app_id){
        $response = $this->client->request('GET', 'https://'.$this->budibase_hostname.'/api/public/v1/applications/'.$app_id, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function applications_search(string $name){
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/applications/search', [
            'body' => json_encode(['name' => $name]),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function queries_execute(string $app_id, string $query_id, object $parameters = null, object $pagination = null){
        if($parameters != null){
            $body = [
                'parameters' => $parameters
            ];
        } else {
            $body = [];
        }
        if($pagination != null){
            $body['pagination'] = $pagination;
        }
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/queries/'.$query_id, [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function queries_search(string $app_id, string $name){
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/queries/search', [
            'body' => json_encode(['name' => $name]),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function rows_create(string $app_id, string $table_id, array $body = null){
        if($body != null){
            $body = [
                'body' => $body
            ];
        } else {
            $body = [];
        }
        $response = $client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id.'/rows', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function rows_update(string $app_id, string $table_id, string $row_id, array $body = null){
        if($body != null){
            $body = [
                'body' => $body
            ];
        } else {
            $body = [];
        }
        $response = $this->client->request('PUT', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id.'/rows/'.$row_id, [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function rows_delete(string $app_id, string $table_id, string $row_id){
        $response = $this->client->request('DELETE', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id.'/rows/'.$row_id, [
            'headers' => [
                'Accept' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function rows_retrieve(string $app_id, string $table_id, string $row_id){
        $response = $this->client->request('GET', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id.'/rows/'.$row_id, [
            'headers' => [
                'Accept' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function rows_search(string $app_id, string $table_id, object $query, bool $paginate = null, string|int $bookmark = null, int $limit = null, object $sort = null){
        $body = [
            'query' => $query
        ];
        if($paginate != null){
            $body['paginate'] = $paginate;
        }
        if($bookmark != null){
            $body['bookmark'] = $bookmark;
        }
        if($limit != null){
            $body['limit'] = $limit;
        }
        if($sort != null){
            $body['sort'] = $sort;
        }
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id.'/rows/search', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function tables_create(string $app_id, string $name, string $primaryDisplay = null, object $schema = null){
        $body = [
            'name' => $name
        ];
        if($primaryDisplay != null){
            $body['primaryDisplay'] = $primaryDisplay;
        }
        if($schema != null){
            $body['schema'] = $schema;
        }
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/tables', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function tables_update(string $app_id, string $table_id, string $name, object $schema, string $primaryDisplay = null){
        $body = [
            'name' => $name,
            'schema' => $schema
        ];
        if($primaryDisplay != null){
            $body['primaryDisplay'] = $primaryDisplay;
        }
        $response = $this->client->request('PUT', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id, [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function tables_delete(string $app_id, string $table_id){
        $response = $this->client->request('DELETE', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id, [
            'headers' => [
                'Accept' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function tables_retrieve(string $app_id, string $table_id){
        $response = $this->client->request('GET', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/'.$table_id, [
            'headers' => [
                'Accept' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function tables_search(string $app_id, string $name){
        $body = [
            'name' => $name
        ];
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/tables/search', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'x-budibase-app-id' => $app_id,
            ],
        ]);
        return $response->getBody();
    }

    public function users_create(string $email, object $roles, string $password = null, string $status = null, string $firstName = null, string $lastName = null, bool $forceResetPassword = null, object $builder = null, object $admin = null){
        $body = [
            'email' => $email,
            'roles' => $roles
        ];
        if($password != null){
            $body['password'] = $password;
        }
        if($status != null){
            $body['status'] = $status;
        }
        if($firstName != null){
            $body['firstName'] = $firstName;
        }
        if($lastName != null){
            $body['lastName'] = $lastName;
        }
        if($forceResetPassword != null){
            $body['forceResetPassword'] = $forceResetPassword;
        }
        if($builder != null){
            $body['builder'] = $builder;
        }
        if($admin != null){
            $body['admin'] = $admin;
        }
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/users', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function users_update(string $user_id, string $email, object $roles, string $password = null, string $status = null, string $firstName = null, string $lastName = null, bool $forceResetPassword = null, object $builder = null, object $admin = null){
        $body = [
            'email' => $email,
            'roles' => $roles
        ];
        if($password != null){
            $body['password'] = $password;
        }
        if($status != null){
            $body['status'] = $status;
        }
        if($firstName != null){
            $body['firstName'] = $firstName;
        }
        if($lastName != null){
            $body['lastName'] = $lastName;
        }
        if($forceResetPassword != null){
            $body['forceResetPassword'] = $forceResetPassword;
        }
        if($builder != null){
            $body['builder'] = $builder;
        }
        if($admin != null){
            $body['admin'] = $admin;
        }
        $response = $this->client->request('PUT', 'https://'.$this->budibase_hostname.'/api/public/v1/users/'.$user_id, [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function users_delete(string $user_id){
        $response = $this->client->request('DELETE', 'https://'.$this->budibase_hostname.'/api/public/v1/users/'.$user_id, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function users_retrieve(string $user_id){
        $response = $this->client->request('GET', 'https://'.$this->budibase_hostname.'/api/public/v1/users/'.$user_id, [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }

    public function users_search(string $name){
        $body = [
            'name' => $name
        ];
        $response = $this->client->request('POST', 'https://'.$this->budibase_hostname.'/api/public/v1/users/search', [
            'body' => json_encode($body),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
        return $response->getBody();
    }
}

?>
