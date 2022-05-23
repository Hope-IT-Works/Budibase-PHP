# budibase-php

Budibase API wrapper for php

## About

This is a simple PHP wrapper for the official Budibase API.

## Dependencies

Budibase-PHP requires [guzzle/guzzle](https://github.com/guzzle/guzzle):

```Shell
composer require guzzlehttp/guzzle
```

Built using

- [Budibase API Reference](https://docs.budibase.com/reference)
- [GitHub Copilot](https://copilot.github.com/)

## Documentation

### Applications

[applications_create](https://docs.budibase.com/reference/post_applications)

```php
string $app_id, string $name, [string $url]
```

[applications_update](https://docs.budibase.com/reference/put_applications-appid)

```php
string $app_id, string $name, [string $url]
```

[applications_delete](https://docs.budibase.com/reference/delete_applications-appid)

```php
string $app_id
```

[applications_retrieve](https://docs.budibase.com/reference/get_applications-appid)

```php
string $app_id
```

[applications_search](https://docs.budibase.com/reference/post_applications-search)

```php
string $name
```

### Queries

[queries_execute](https://docs.budibase.com/reference/post_queries-queryid)

```php
string $app_id, string $query_id, [object $parameters, object $pagination]
```

[queries_search](https://docs.budibase.com/reference/post_queries-search)

```php
string $app_id, string $name
```

### Rows

[rows_create](https://docs.budibase.com/reference/post_tables-tableid-rows)

```php
string $app_id, string $table_id, [array $body]
```

[rows_update](https://docs.budibase.com/reference/put_tables-tableid-rows-rowid)

```php
string $app_id, string $table_id, string $row_id, [array $body]
```

[rows_delete](https://docs.budibase.com/reference/delete_tables-tableid-rows-rowid)

```php
string $app_id, string $table_id, string $row_id
```

[rows_retrieve](https://docs.budibase.com/reference/get_tables-tableid-rows-rowid)

```php
string $app_id, string $table_id, string $row_id
```

[rows_search](https://docs.budibase.com/reference/post_tables-tableid-rows-search)

```php
string $app_id, string $table_id, object $query, [bool $paginate, string|int $bookmark, int $limit, object $sort]
```

### Tables

[tables_create](https://docs.budibase.com/reference/post_tables)

```php
string $app_id, string $name, [string $primaryDisplay, object $schema]
```

[tables_update](https://docs.budibase.com/reference/put_tables-tableid)

```php
string $app_id, string $table_id, string $name, object $schema, [string $primaryDisplay]
```

[tables_delete](https://docs.budibase.com/reference/delete_tables-tableid)

```php
string $app_id, string $table_id
```

[tables_retrieve](https://docs.budibase.com/reference/get_tables-tableid)

```php
string $app_id, string $table_id
```

[tables_search](https://docs.budibase.com/reference/post_tables-search)

```php
string $app_id, string $name
```

### Users

[users_create](https://docs.budibase.com/reference/post_users)

```php
string $email, object $roles, [string $password, string $status, string $firstName, string $lastName, bool $forceResetPassword, object $builder, object $admin]
```

[users_update](https://docs.budibase.com/reference/put_users-userid)

```php
string $user_id, string $email, object $roles, [string $password, string $status, string $firstName, string $lastName, bool $forceResetPassword, object $builder, object $admin]
```

[users_delete](https://docs.budibase.com/reference/delete_users-userid)

```php
string $user_id
```

[users_retrieve](https://docs.budibase.com/reference/get_users-userid)

```php
string $user_id
```

[users_search](https://docs.budibase.com/reference/post_users-search)

```php
string $name
```
