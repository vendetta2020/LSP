<?php

return [

    /*
    Latihan pertanyaan esai
1.	Jika kita ingin mendeklarasi nilai angka bilangan bulat, tipe data yang digunakan adalah
Jawab : Tipe data yang digunakan adalah INT (Integer)
2.	Tipe data yang memberikan nilai balikan hanya berupa kode benar dan salah adalah
Jawab : Tipe data yang memberikan nilai balikan berupa benar dan salah adalah Boolean
3.	Tuliskan 3 command dalam database manipulation language
Jawab : Insert untuk memasukkan data, Delete untuk menghapus data dan update untuk memperbarui data
4.	Pada perulangan,terdapat 2 jenis perulangan yaitu counted loop dan uncounted loop pada perulangan for termasuk kedalam jenis perulangan
Jawab : Termasuk dalam jenis perulangan For
5.	Tuliskan perbedaan running dan debugging
Jawab : 
-	Running digunakan untuk menjalankan program yang sudah dibuat untuk melihat hasil eksekusi tanpa mencari kesalahan program.
-	Debugging digunakan Ketika mencari dan memperbaiki bug dalam kode program
6.	Tuliskan dua Bahasa pemograman untuk membuat aplikasi berbasis web
Jawab : HTML dan PHP
7.	Hubungan antar table dalam sebuah database dikenal dengan istilah
Jawab : Relasi
8.	Open source maknanya adalah
Jawab : kode sumber dibuat tersedia secara bebas untuk kemungkinan modifikasi dan reditribusi produk
9.	Dalam merancang user interface, untuk melakukan input yang merupakan pilihan dari beberapa pilihan yang diberikan, biasanya berupa pulldown option adalah
Jawab : Pulldown option atau dropdown menu adalah elemen UI yang sering digunakan untuk memfasilitasi input pilihan dari beberapa opsi
10.	Diagram yang digunakan untuk menampilkan ide tentang penyusunan database adalah
Jawab : Flowchart

    */
    
    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send any email
    | messages sent by your application. Alternative mailers may be setup
    | and used as needed; however, this mailer will be used by default.
    |
    */

    'default' => env('MAIL_MAILER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers to be used while
    | sending an e-mail. You will specify which one you are using for your
    | mailers below. You are free to add additional mailers as required.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses",
    |            "postmark", "log", "array", "failover"
    |
    */

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN'),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'mailgun' => [
            'transport' => 'mailgun',
        ],

        'postmark' => [
            'transport' => 'postmark',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Markdown Mail Settings
    |--------------------------------------------------------------------------
    |
    | If you are using Markdown based email rendering, you may configure your
    | theme and component paths here, allowing you to customize the design
    | of the emails. Or, you may simply stick with the Laravel defaults!
    |
    */

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
