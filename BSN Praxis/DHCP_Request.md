### DHCP Handshake

DHCP Discover
		Server
Client	---> FF FF FF FF

DHCP Offer
	<---

DHCP Request
	--->

DHCP-ACK
	<---

IP-Adresse
Subnetzmaske
Gateway
DNS-Server
TFTP-Server
lease Time

Nach 50% lease Time wird:
DHCP Release

Wenn nach 87,5% kein ACK bekommt:
Adresse wird bei 100% freigegeben. Dann neues DHCP Discover