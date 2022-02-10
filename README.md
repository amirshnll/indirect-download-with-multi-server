# indirect-download-with-multi-server
how to use indirect download file with multi-server on PHP

<br />

## Server 1 (main)
- Create A folder in Server 1 (folder name: "dl")
- Upload these files from server1 folder to your dl folder
  - .htaccess file
  - dl.php
  - robots.txt

<br />

## Server 2 (dl server)
- Create A folder in Server 2 (folder name: "private")
- Upload these files from server2/private/ folder to your private folder
  - .htaccess
  - index.html
  - robots.txt
- Upload these files from server2 folder to your root folder
  - download.php
  - index.php
  - robots.txt

<br />

### Usage :

https://domain.com/dl/dl.php/myfile.php
