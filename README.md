# CISCO-ThreatGrid-DeleteAPI
CISCO ThreatGrid API call to DELETE user and organization. CISCO ThreatGrid doesn't provide Web Interface options to directly Delete Users and Organizations, rather it can only done through API DELETE Request, This Repo will provide a clean WebUI to delete user/org.

## Pre-Requisite
1. PHP
2. Apache2 Web Server

## Usage
```git clone https://github.com/Tesla369/CISCO-ThreatGrid-DeleteAPI```
```cd CISCO-ThreatGrid-DeleteAPI```
```mv threatgrid /var/www/html/```
```sudo service apache2 start```

## Edit
```cd /var/www/html/threatgrid/```
```sudo nano del/api/delusr.php```
Update Host and your ThreatGrid Admin TUI CLEAN Interface API-KEY (Administrator)
Save the file (Ctrl + S) and exit (Ctrl + X)
Similarly for the delorg.php as well, 
```sudo nano del/api/delorg.php```
Update Host and your ThreatGrid Admin TUI CLEAN Interface API-KEY (Administrator)
Finally restart your server using,
```sudo service apache2 restart```
```sudo systemctl restart apache2```

## Access
You can Access the site in any of the following method via your browser
```http://0.0.0.0/threatgrid/
http://127.0.0.1/threatgrid/
http://localhost/threatgrid/
http://[private_ip]/threatgrid/
http://[port_mapped_public_ip]/threatgrid/
http(s)://[host]/threatgrid/```
