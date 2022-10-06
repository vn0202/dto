# Bài thực hành OOP

Đề bài: Thiết kế theo yêu cầu : https://drive.google.com/file/d/1DLPWKv2lRetTcT9P-1aedKsqXQw-HX8R/view

DTO -Data transfer object  (đối tượng truyền dữ liệu). DTO có thể chứa tất cả các dữ liệu hoặc 1 phần tài liệu. Khi được
triển khai, DTO sẽ trở thành phương tiện
truyền dữ liệu giữa các hệ thống.

<details>

<summary>Demo</summary>

```php 
$array = [
    ['name' => "Nguyen Gia Hao ", 'age' => 24, 'address' => 'Ha Noi'],
    ['name' => "Nguyen Van A", 'age' => 18, 'address' => 'Nam Dinh'],
    ['name' => 'Vu Van A', 'age' => 20, 'address' => 'Thai Binh'],
    ['name' => 'Le van Chien', 'age' => 22, 'address' => "Hai Phong"]
];

$user = User::from(['name' => 'Vu Van Nghia', 'email' => 'nghiavuxp0202@gmail.com']);
$user->name = "Nguyen Gia Hao";
$book = \vendor\src\Book::collection($array);
print_r($book->all());
//output 
Array
(
    [0] => vendor\src\Book Object
        (
            [original:protected] => Array
                (
                )

            [casts:protected] => Array
                (
                )

            [attributes:vendor\src\Data:private] => Array
                (
                    [name] => Nguyen Gia Hao 
                    [age] => 24
                    [address] => Ha Noi
                )

        )

    [1] => vendor\src\Book Object
        (
            [original:protected] => Array
                (
                )

            [casts:protected] => Array
                (
                )

            [attributes:vendor\src\Data:private] => Array
                (
                    [name] => Nguyen Van A
                    [age] => 18
                    [address] => Nam Dinh
                )

        )

    [2] => vendor\src\Book Object
        (
            [original:protected] => Array
                (
                )

            [casts:protected] => Array
                (
                )

            [attributes:vendor\src\Data:private] => Array
                (
                    [name] => Vu Van A
                    [age] => 20
                    [address] => Thai Binh
                )

        )

    [3] => vendor\src\Book Object
        (
            [original:protected] => Array
                (
                )

            [casts:protected] => Array
                (
                )

            [attributes:vendor\src\Data:private] => Array
                (
                    [name] => Le van Chien
                    [age] => 22
                    [address] => Hai Phong
                )

        )

)

```
</details>