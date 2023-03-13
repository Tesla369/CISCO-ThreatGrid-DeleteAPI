# CISCO-ThreatGrid-DeleteAPI
CISCO ThreatGrid API call to DELETE user and organization.<br /> CISCO ThreatGrid doesn't provide Web Interface options to directly Delete Users and Organizations, rather it can only done through API DELETE Request, This Repo will provide a clean WebUI to delete user & org.

## Pre-Requisite
1. PHP
2. Apache2 Web Server

## Usage
```git clone https://github.com/Tesla369/CISCO-ThreatGrid-DeleteAPI``` <br />
```cd CISCO-ThreatGrid-DeleteAPI``` <br />
```mv threatgrid /var/www/html/``` <br />
```sudo service apache2 start```

## Edit
```cd /var/www/html/threatgrid/``` <br />
```sudo nano del/api/delusr.php``` <br />
Update Host and your ThreatGrid Admin TUI CLEAN Interface API-KEY (Administrator) <br />
Save the file (Ctrl + S) and exit (Ctrl + X) <br />
Similarly for the delorg.php as well,  <br />
```sudo nano del/api/delorg.php``` <br />
Update Host and your ThreatGrid Admin TUI CLEAN Interface API-KEY (Administrator) <br />
Finally restart your server using, <br />
```sudo service apache2 restart``` <br />
```sudo systemctl restart apache2```

## Access
You can Access the site in any of the following method via your browser <br />
```http://0.0.0.0/threatgrid/``` <br />
```http://127.0.0.1/threatgrid/``` <br />
```http://localhost/threatgrid/``` <br />
```http://[private_ip]/threatgrid/``` <br />
```http://[port_mapped_public_ip]/threatgrid/``` <br />
```http(s)://[host]/threatgrid/```
