# Codeigniter - SMTP.

**Codeigner - SMPT** merupakan aplikasi sederhana untuk mengirimkan pesan email menggunakan library email dari codeigniter.

## Lahkah-langkah instalasi.
### 1. Clone repository ini.
```
git clone git@github.com:mo-taufiq/ci-smtp.git
```
### 2. Buat file baru bernama .htaccess di root folder.
Copy tulisan di bawah ke dalam file .htaccess yang baru di buat. 
```
RewriteEngine On
RewriteCond  %{REQUEST_FILENAME}  !-f
RewriteCond  %{REQUEST_FILENAME}  !-d
RewriteRule  ^(.*)$  index.php/$1 [L]
```

### 3. Configurasi di file config (Aplication/config/config.php).
Ubah email dan password di file cofig.php sesuai dengan email dan password mu.
```
$config['base_url'] = 'http://localhost/<nama folder mu>/'; // sesuaikan dengan nama folder mu, di sini punya saya `http://localhost/ci-email/`
$config['index_page'] = '';
...
$config['email_smtp'] = [
'protocol' => 'smtp',
'smtp_host' => 'ssl://smtp.googlemail.com',
'smtp_user' => 'xxxx', // email anda
'smtp_pass' => 'xxxx', // password anda
'smtp_port' => 465,
'mailtype' => 'html',
'charset' => 'utf-8',
'newline' => "\r\n"  // pake tanda petik dua (")

];
```
### 4. Configurasi di file autoload (Aplication/config/autoload).
Jangan lupa untuk menambahkan beberapa parameter di library dan helper yang ada di file autoload (optional).
##### 4.1. Libraries
```
$autoload['libraries'] = array('form_validation', 'session');
```
##### 4.2. Helper
```
$autoload['helper'] = array('form', 'url');
```
### 5. Buka link berikut di browser browser mu
Sesuaikan dengan nama fordermu, `http://localhost/nama_foldermu/home`
```
http://localhost/ci-email/home
```