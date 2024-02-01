---
title:
  - Prüfung Vorbereitung
tags:
  - schule
  - bsn_T
links: 
ctime: 01.02.2024 14:52
---

---
# Prüfung Vorbereitung

## IPv6
### Subnetting:
8 Niederlassungen mit gleiche Netzgröße2001:db8:cafe:0000::/51

Netz: 2001:db8:cafe::/48
Netz ausgeschrieben für Subnetting: 2001:db8:cafe:**0        0          0         0**::
Markiert welche Bearbeitet dürfen:                             **000**0 0000 0000 0000::/51

| Binär | Hexa | IPv6 |
| -- | ---- | ---- |
| 0000 | 0 | 2001:db8:cafe:0000::/51 |
| 0010 | 2 | 2001:db8:cafe:2000::/51 |
| 0100 | 4 | 2001:db8:cafe:4000::/51 |
| 0110 | 6 | 2001:db8:cafe:6000::/51 |
| 1000 | 8 | 2001:db8:cafe:8000::/51 |
| 1010 | A | 2001:db8:cafe:A000::/51 |
| 1100 | C | 2001:db8:cafe:C000::/51 |
| 1110 | E | 2001:db8:cafe:E000::/51 |

Netz: 2001:db8:cafe:A800::/53
Netz ausgeschrieben für Subnetting: 2001:db8:**A       8        0         0**::/57
Markiert welche Bearbeitet dürfen:                    :1010 1**000 0**000 0000

| Binär | Hexa | IPv6 |
| ---- | ---- | ---- |
| 1000 0000 | 80 | 2001:db8:cafe:A800::/57 |
| 1000 1000 | 88 | 2001:db8:cafe:A880::/57 |
| 1001 0000 | 90 | 2001:db8:cafe:A900::/57 |
| 1001 1000 | 98 | 2001:db8:cafe:A980::/57 |
| 1010 0000 | A0 | 2001:db8:cafe:AA00::/57 |
| 1010 1000 | A8 | 2001:db8:cafe:AA80::/57 |
| 1010 0000 | B0 | 2001:db8:cafe:AB00::/57 |
| 1011 1000 | B8 | 2001:db8:cafe:AB80::/57 |
| 1100 0000 | C0 | 2001:db8:cafe:AC00::/57 |
| 1100 1000 | C8 | 2001:db8:cafe:AC80::/57 |
| 1101 0000 | D0 | 2001:db8:cafe:AD00::/57 |
| 1101 1000 | D8 | 2001:db8:cafe:AD80::/57 |
| 1110 0000 | E0 | 2001:db8:cafe:AE00::/57 |
| 1110 1000 | E8 | 2001:db8:cafe:AE80::/57 |
| 1111 0000 | F0 | 2001:db8:cafe:AF00::/57 |
| 1111 1000 | F8 | 2001:db8:cafe:AF80::/57 |

### Adressbereiche die man braucht
| Präfix       | Nutzen             | Bedeutung                                  |
| ------------ | ------------------ | ------------------------------------------ |
| 2000 - 3FFFF | Globaler Unicast   | Aggregierbare global gültige Adressen      |
| FE80 - FEBF  | Link-Local         | Nur im selben Netzwerksegemnt gültig       |
| FC-00 - FCFF | Unique-Local (ULA) | Local gültige Adressen also Privatgebrauch |
| FF00 - FFFF  | Multicast          | Spricht eine Gruppe von Geräten an         |

---
## RIP/OSPF

### Eigenschaften

| Eigenschaften       | RIP           | OSPF          |
| ------------------- | ------------- | ------------- |
| Version IPv4        | Ja            | Ja            |
| Version IPv6        | Ja(v2)        | ja(v3)        |
| Max. Anzahl Hops    | 15            | Unbegrenzt    |
| Routing-verfahren   | Distanzvektor | Link-state    |
| Algorithmus         | Bellman-Ford  | shortest-path |
| Unterstüzt von VLSM | Ja(v2)        | Ja(v2)        |
| Routing Updates     | 30sek         | bei Änderung  |
| Metrik              | Hopcount      | cost          |

Alles andere ist egal dabei, denk ich mal 

---
## Datenschutz/Datensicherheit

| Maßnahme                | Beschreibung                                  | Beispiel                           |
| ----------------------- | --------------------------------------------- | ---------------------------------- |
| Zutrittskontrolle       | Physischer Zugang                             | Alarmanlage                        |
| Zugangskontrolle        | Digitaler Zugang zu Verarbeitungsanlagen      | Passwörter                         |
| Zugriffskontrolle       | Digitaler Zugang zu Daten                     | Passwörter                         |
| Weitergabekontrolle     | Sicherstellen das Daten unterwegs sicher sind | persönlich nach Australien liefern |
| Eingabekontrolle        | nachträgliche Überprüfung von passiertem      | Automatisches Logging              |
| Auftragskontrolle       |                                               |                                    |
| Verfügbarkeitskontrolle | Sicherstellen das immer verfügbar             | Geo-Redundanzen                    |
| Trennungsgebot          | Daten getrennt Verarbeiten                    | verschiedene Datenbanken           |

---
## STP Protokoll

### Root-Bridge festlegen
Reihenfolge wie die Root-Bridge entschieden wird

1. Bridge-Priority
2. Vlan ID
3. MacAdresse

Die Root-Bridge wird die Bridge mit der niedrigsten Bridge_ID

Bridge_ID sieht folgender maßen aus:
___Bridge-Priority, 6-byte MAC adress___


### Notation oder so

Ports die vom Root-Switch weggehen sind **Desg.**
Ports die  zum Root-Switch hingehen sind **Root-ports**
Wenn ein Switch mehrere Pakete von verschiedene Switchen erhält, wird der Port mit der niedrigsten **Bridge-Kosten** und wenn diese die gleichen sind mit der niedrigsten **Bridge_ID** als **Root-port** verwendet und der andere Port wird zum **Block/Non Desg.**
