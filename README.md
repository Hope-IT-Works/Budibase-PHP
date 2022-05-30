<p align="center">
  <img src="https://raw.githubusercontent.com/Hope-IT-Works/Budibase-PHP/main/resources/graphics/logo/budibase-php.svg" alt="budibase-php_logo" style="width: 50%"/>
</p>
<h1 align="center">Budibase-PHP</h1>
<h3 align="center">Budibase API wrapper for PHP</h3>

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

## Status

Budibase-PHP is in developement state and probably not ready for production environments.

Test the wrapper & let me know if something is wrong.

## Documentation

### Applications

`create` → [applications_create](https://docs.budibase.com/reference/post_applications)

```php
string $app_id,
string $name,
[string $url]
```

`update` → [applications_update](https://docs.budibase.com/reference/put_applications-appid)

```php
string $app_id,
string $name,
[string $url]
```

`delete` → [applications_delete](https://docs.budibase.com/reference/delete_applications-appid)

```php
string $app_id
```

`retrieve` → [applications_retrieve](https://docs.budibase.com/reference/get_applications-appid)

```php
string $app_id
```

`search` → [applications_search](https://docs.budibase.com/reference/post_applications-search)

```php
string $name
```

### Queries

`execute` → [queries_execute](https://docs.budibase.com/reference/post_queries-queryid)

```php
string $app_id,
string $query_id,
[
  object $parameters,
  object $pagination
]
```

`search` → [queries_search](https://docs.budibase.com/reference/post_queries-search)

```php
string $app_id,
string $name
```

### Rows

`create` → [rows_create](https://docs.budibase.com/reference/post_tables-tableid-rows)

```php
string $app_id,
string $table_id,
[array $body]
```

`update` → [rows_update](https://docs.budibase.com/reference/put_tables-tableid-rows-rowid)

```php
string $app_id,
string $table_id,
string $row_id,
[array $body]
```

`delete` → [rows_delete](https://docs.budibase.com/reference/delete_tables-tableid-rows-rowid)

```php
string $app_id,
string $table_id,
string $row_id
```

`retrieve` → [rows_retrieve](https://docs.budibase.com/reference/get_tables-tableid-rows-rowid)

```php
string $app_id,
string $table_id,
string $row_id
```

`search` → [rows_search](https://docs.budibase.com/reference/post_tables-tableid-rows-search)

```php
string $app_id,
string $table_id,
object $query,
[
  bool $paginate,
  string|int $bookmark,
  int $limit,
  object $sort
]
```

### Tables

`create` → [tables_create](https://docs.budibase.com/reference/post_tables)

```php
string $app_id,
string $name,
[
  string $primaryDisplay,
  object $schema
]
```

`update` → [tables_update](https://docs.budibase.com/reference/put_tables-tableid)

```php
string $app_id,
string $table_id,
string $name,
object $schema,
[string $primaryDisplay]
```

`delete` → [tables_delete](https://docs.budibase.com/reference/delete_tables-tableid)

```php
string $app_id,
string $table_id
```

`retrieve` → [tables_retrieve](https://docs.budibase.com/reference/get_tables-tableid)

```php
string $app_id,
string $table_id
```

`search` → [tables_search](https://docs.budibase.com/reference/post_tables-search)

```php
string $app_id,
string $name
```

### Users

`create` → [users_create](https://docs.budibase.com/reference/post_users)

```php
string $email,
object $roles,
[
  string $password,
  string $status,
  string $firstName,
  string $lastName,
  bool $forceResetPassword,
  object $builder,
  object $admin
]
```

`update` → [users_update](https://docs.budibase.com/reference/put_users-userid)

```php
string $user_id,
string $email,
object $roles,
[
  string $password,
  string $status,
  string $firstName,
  string $lastName,
  bool $forceResetPassword,
  object $builder,
  object $admin
]
```

`delete` → [users_delete](https://docs.budibase.com/reference/delete_users-userid)

```php
string $user_id
```

`retrieve` → [users_retrieve](https://docs.budibase.com/reference/get_users-userid)

```php
string $user_id
```

`search` → [users_search](https://docs.budibase.com/reference/post_users-search)

```php
string $name
```

![budibase-php](https://socialify.git.ci/Hope-IT-Works/Budibase-PHP/image?description=1&logo=https%3A%2F%2Fraw.githubusercontent.com%2FHope-IT-Works%2Fbudibase-php%2Fmain%2Fresources%2Fgraphics%2Flogo%2Fbudibase-php.svg&name=1&owner=1&pattern=Solid&theme=Light)
